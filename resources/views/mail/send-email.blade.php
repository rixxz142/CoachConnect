<h2>Bukti Pembayaran</h2>
<ul>
    <li>Nama Pembeli: {{ auth()->user()->name }}</li>
    <li>Pembelian pada tanggal: {{ date('Y-m-d') }}</li>
</ul>
<img src="{{ $img_url }}" alt="Bukti Pembayaran" loading="lazy">
<p>Bila gambar tidak muncul <a href="{{ $img_url }}">Klik Disini</a></p>
