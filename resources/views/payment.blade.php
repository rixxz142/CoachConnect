<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>

    {{-- TailwindCSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="/assets/css/poppins.css">

    {{-- Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <script async src="https://imgbb.com/upload.js"></script>

</head>

<body class="p-10">
    <div class="flex justify-center items-center">
        <div class="border rounded-lg">
            <div class="p-5 border-b">
                <h1 class="text-2xl poppins-semibold">Silahkan Selesaikan Pembayaran Anda</h1>
            </div>
            <div class="p-5 border-b flex justify-between">
                <span class="poppins">Virtual Account Number</span>
                <span class="poppins-medium">{{ $cart[0]->va_number }}</span>
            </div>
            <div class="p-5 border-b flex justify-between">
                <span class="poppins">Total</span>
                <span class="poppins-medium">$ {{ $total_pembayaran }}</span>
            </div>
            <div class="p-5 border-b">
                <div class="flex justify-between">
                    <span class="poppins">Product Detail</span>
                    <span class="poppins-medium">{{ $cart->count() }} Item</span>
                </div>
                <div class="mt-5 flex flex-col gap-5">
                    @foreach ($cart as $c)
                        <div class="flex gap-4">
                            <div class="">
                                <img src="{{ $c->product->image }}" class="w-[100px] rounded-md shadow-md p-3"
                                    alt="">
                            </div>
                            <div class="flex flex-col">
                                <span class="poppins-medium">{{ $c->product->title }}</span>
                                <span class="poppins-semibold text-red-700">$ {{ $c->product->price }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <form action="/payment-confirm" method="POST" enctype="multipart/form-data" class="p-5">
                @csrf
                <input type="hidden" id="img_url" name="img_url">
                <div class="mb-5">
                    <label id="label-bukti-pembayaran"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="bukti_pembayaran">
                        Masukkan Bukti Pembayaran
                    </label>
                    <input accept="image/*"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="bukti_pembayaran" name="bukti_pembayaran" required type="file">
                </div>
                <button disabled id="btn-konfirmasi-pembayaran"
                    class="block py-2 bg-gradient-to-r cursor-not-allowed from-gray-500 to-gray-300 w-full rounded-lg text-white text-center">Konfirmasi
                    Pembayaran</button>
            </form>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        const getBase64StringFromDataURL = (dataURL) =>
            dataURL.replace('data:', '').replace(/^.+,/, '');

        $('#bukti_pembayaran').change(function() {
            const file = this.files[0];
            const reader = new FileReader();
            reader.onloadend = function() {
                const imageData = getBase64StringFromDataURL(reader.result);
                const fileName = file.name;
                uploadImage(imageData, fileName);
            }
            reader.readAsDataURL(file);
        });

        function uploadImage(imageData, fileName) {
            var apiUrl = 'https://api.imgbb.com/1/upload';
            var apiKey = 'f70fcc720889c538434e342b4214c832';
            var formData = new FormData();
            formData.append('key', apiKey);
            formData.append('image', imageData);
            formData.append('name', fileName);
            $.ajax({
                url: apiUrl,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#btn-konfirmasi-pembayaran").prop("disabled", true);
                    $("#btn-konfirmasi-pembayaran")
                        .removeClass("from-blue-700 to-blue-500")
                        .addClass("cursor-not-allowed from-gray-500 to-gray-300")
                    $("#btn-konfirmasi-pembayaran").html("Loading upload file...");
                },
                success: function(response) {
                    const url = response.data.thumb.url;
                    let imageURL = url.replace('.co', '.co.com');
                    $("#btn-konfirmasi-pembayaran").prop("disabled", false);
                    $("#btn-konfirmasi-pembayaran")
                        .removeClass("cursor-not-allowed from-gray-500 to-gray-300")
                        .addClass("from-blue-700 to-blue-500")
                    $("#img_url").val(imageURL);
                    $("#btn-konfirmasi-pembayaran").html("Konfirmasi Pembayaran");
                },
            });
        }
    });
</script>

</html>
