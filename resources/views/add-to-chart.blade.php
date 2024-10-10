<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/assets/css/addtocart.css">
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    <title>Order</title>
</head>

<body>
    <div class="header">
        <p class="logo">CHECKOUT</p>
        <div class="cart"><i class="fa-solid fa-cart-shopping"></i>
            <p id="count">0</p>
        </div>
    </div>
    <div class="container">
        <div data-product='@json($product)' id="root"></div>
        <div class="sidebar">
            <div class="head">
                <p>My Cart</p>
            </div>
            <div id="cartItem">Your cart is empty</div>
            <div class="foot">
                <h3>Total</h3>
                <h2 id="total">$ 0.00</h2>
            </div>
            <div class="">
                <button id="payment-now">Payment Now</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="/assets/js/addtocart.js"></script>
    <div class="kembali">
        <a href="/index.html" method="get">
            <h1>Back</h1>
        </a>
    </div>
</body>

</html>
