<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoachConnect - SportHub</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./assets/images/PA.png" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style-prefix.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>


    <div class="overlay" data-overlay></div>

    <!--
    - MODAL
  -->

    <div class="modal" data-modal>

        <div class="modal-close-overlay" data-modal-overlay></div>

        <div class="modal-content">

            <button class="modal-close-btn" data-modal-close>
                <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="newsletter-img">
                <img src="./assets/images/Coach connect.png" alt="subscribe newsletter" width="400" height="400">
            </div>

            <div class="newsletter">

                <form action="#">

                    <div class="newsletter-header">

                        <h3 class="newsletter-title">Subscribe Newsletter.</h3>

                        <p class="newsletter-desc">
                            Subscribe the <b>CoachConnect</b> to get latest update and discount.
                        </p>

                    </div>

                    <input type="email" name="email" class="email-field" placeholder="Email Address" required>

                    <button type="submit" class="btn-newsletter">Subscribe</button>

                </form>

            </div>

        </div>

    </div>





    <!--
    - NOTIFICATION TOAST
  -->

    <div class="notification-toast" data-toast>

        <button class="toast-close-btn" data-toast-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="toast-banner">
            <img src="./assets/images/black-white-swimming-8.png" alt="Tennis Coach" width="80" height="70">
        </div>

        <div class="toast-detail">

            <p class="toast-message">
                Someone in new just deal
            </p>

            <p class="toast-title">
                Swimming Coach
            </p>

            <p class="toast-meta">
                <time datetime="PT2M">1 Minutes</time> ago
            </p>

        </div>
    </div>



    <!--
    - HEADER
  -->

    <header>

        <div class="header-top">

            <div class="container">

                <ul class="header-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

                <div class="header-alert-news">
                    <p>
                        <b>Get Discount</b>
                        This Week Order Over - $55
                    </p>
                </div>

                <div class="header-top-actions">

                    <select name="currency">

                        <option value="idr">IDR </option>
                        <option value="usd">USD &dollar;</option>

                    </select>

                    <select name="language">

                        <option value="en-US">Indonesia</option>
                        <option value="en-US">English</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="header-main">

            <div class="container">

                <a href="#" class="header-logo">
                    <img src="./assets/images/Coach connect.png" alt="Anon's logo" width="150" height="130">
                </a>

                <div class="header-search-container">

                    <input type="search" name="search" class="search-field" placeholder="Enter the sport you want...">

                    <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>

                </div>

                <div class="header-user-actions">

                    @auth
                        <a href="/logout" method="post">
                            <button class="action-btn">
                                <ion-icon name="power"></ion-icon>
                            </button>
                        </a>
                    @else
                        <a href="/login" method="post">
                            <button class="action-btn">
                                <ion-icon name="person-outline"></ion-icon>
                            </button>
                        </a>
                    @endauth

                    <button class="action-btn">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span class="count">0</span>
                    </button>
                    <a href="/add-to-chart" method="post">
                        <button class="action-btn">
                            <span style="font-size: 20px;">Order</span>
                            {{-- <ion-icon name="bag-handle-outline"></ion-icon> --}}
                        </button>
                    </a>
                </div>

            </div>

        </div>

        <nav class="desktop-navigation-menu">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <li class="menu-category">
                        <a href="#" class="menu-title">Home</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Categories</a>

                        <div class="dropdown-panel">

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Strength and Fitness </a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Weightlifting</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">CrossFit</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Bodybuilding</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Kettlebell Training</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">WOD (Workout of the Day)</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/179810171_484446579540067_2843400388175817882_n.jpg"
                                            alt="headphone collection" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Cardio and Endurance </a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Running</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Cycling</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Swimming</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Hiking</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Zumba</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/7-exercises-that-can-improve-your-cardiovascular-endurance.jpg"
                                            alt="men's fashion" width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Martial Arts and Self-Defense</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Boxing</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Brazilian Jiu-Jitsu</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Karate</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Muay Thai</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Krav Maga</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/0_ULFEPno8ix3wjttC.jpg" alt="women's fashion"
                                            width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Team and Ball</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Soccer</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Basketball</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Rugby</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Cricket</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Volleyball</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="./assets/images/Korfball-Image.jpg" alt="mouse collection"
                                            width="250" height="119">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Team</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Soccer</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Basketball</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Rugby</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Cricket</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Individual </a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Weightlifting</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">CrossFit</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Pilates</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Barre</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Program</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">An Hour</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">A Day</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">A Week</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">A Month</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Coach</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Men's</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Women's</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Location</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Jabodetabek</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Jawa Barat</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Jawa Tengah</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Jawa Timur</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Hot Offers</a>
                    </li>

                </ul>

            </div>

        </nav>

        <div class="mobile-bottom-navigation">

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="bag-handle-outline"></ion-icon>

                <span class="count">0</span>
            </button>

            <button class="action-btn">
                <ion-icon name="home-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="heart-outline"></ion-icon>

                <span class="count">0</span>
            </button>

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="grid-outline"></ion-icon>
            </button>

        </div>

        <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

            <div class="menu-top">
                <h2 class="menu-title">Menu</h2>

                <button class="menu-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            <ul class="mobile-menu-category-list">

                <li class="menu-category">
                    <a href="#" class="menu-title">Home</a>
                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Men's</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Shirt</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Shorts & Jeans</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Safety Shoes</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Wallet</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Women's</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Dress & Frock</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Earrings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Necklace</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Makeup Kit</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Jewelry</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Earrings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Couple Rings</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Necklace</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Bracelets</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">

                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Perfume</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Clothes Perfume</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Deodorant</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Flower Fragrance</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Air Freshener</a>
                        </li>

                    </ul>

                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Blog</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Hot Offers</a>
                </li>

            </ul>

            <div class="menu-bottom">

                <ul class="menu-category-list">

                    <li class="menu-category">

                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Language</p>

                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">English</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Fren&ccedil;h</a>
                            </li>

                        </ul>

                    </li>

                    <li class="menu-category">
                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Currency</p>
                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>
                            <li class="submenu-category">
                                <a href="#" class="submenu-title">USD &dollar;</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">EUR &euro;</a>
                            </li>
                        </ul>
                    </li>

                </ul>

                <ul class="menu-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

    </header>





    <!--
    - MAIN
  -->

    <main>

        <!--
      - BANNER
    -->

        <div class="banner">

            <div class="container">

                <div class="slider-container has-scrollbar">

                    <div class="slider-item">

                        <img src="./assets/images/360_F_515419034_pbFpjmwb36PxEQRkBdcOMlTFWJ1zfIAH.jpg"
                            alt="women's latest fashion sale" class="banner-img">

                        <div class="banner-content">

                            <p class="banner-subtitle">Trending This Week</p>

                            <h2 class="banner-title">Tennis in the morning</h2>

                            <p class="banner-text">
                                starting at &dollar; <b>20</b>.00
                            </p>

                            <a href="#" class="banner-btn">Shop now</a>

                        </div>

                    </div>

                    <div class="slider-item">

                        <img src="./assets/images/Coach-stock-00002.jpg" alt="modern sunglasses" class="banner-img">

                        <div class="banner-content">

                            <p class="banner-subtitle">Trending Coaching</p>

                            <h2 class="banner-title">For Football lovers</h2>

                            <p class="banner-text">
                                starting at &dollar; <b>15</b>.00
                            </p>

                            <a href="#" class="banner-btn">Shop now</a>

                        </div>

                    </div>

                    <div class="slider-item">

                        <img src="./assets/images/Fitness-Industry-Award-Found-to-Cover-Highly-Qualified-Swim-Coach_Social-Image-1200x630px.jpg"
                            alt="new fashion summer sale" class="banner-img">

                        <div class="banner-content">

                            <p class="banner-subtitle">Summer Time</p>

                            <h2 class="banner-title">suitable for filling free time</h2>

                            <p class="banner-text">
                                starting at &dollar; <b>29</b>.99
                            </p>

                            <a href="#" class="banner-btn">Shop now</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>





        <!--
      - CATEGORY
    -->

        <div class="category">

            <div class="container">

                <div class="category-item-container has-scrollbar">

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/pngimg.com - billiard_PNG85058.png" alt="dress & frock"
                                width="45">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Billiard Coach</h3>

                                <p class="category-item-amount">(40)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/golf-sports-symbol-illustration-png.jpg" alt="winter wear"
                                width="20">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Golf Coach</h3>

                                <p class="category-item-amount">(28)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/tennis-player-graphic-clipart-design-free-png.jpg"
                                alt="glasses & lens" width="30">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Tennis Coach</h3>

                                <p class="category-item-amount">(31)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/f1424f6d3d551b4724e5c146dc099aeb-basketball-player-dribble-cut-out.jpg"
                                alt="shorts & jeans" width="30">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Basketball Coach</h3>

                                <p class="category-item-amount">(34)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/pngtree-archery-vector-illustration-png-image_7264660.png"
                                alt="t-shirts" width="35">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Archery Coach</h3>

                                <p class="category-item-amount">(15)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/young-beautiful-yoga-woman-is-posing-png.jpg" alt="jacket"
                                width="50">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Yoga Coach</h3>

                                <p class="category-item-amount">(36)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/icon-player-badminton-doing-smash-technique-png.jpg"
                                alt="watch" width="35">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Badminton Coach</h3>

                                <p class="category-item-amount">(27)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                    <div class="category-item">

                        <div class="category-img-box">
                            <img src="./assets/images/87c0fb09ba89fa5c8050c8e059273ba9-parkour-jumping-silhouette-8.jpg"
                                alt="hat & caps" width="35">
                        </div>

                        <div class="category-content-box">

                            <div class="category-content-flex">
                                <h3 class="category-item-title">Parkour Coach</h3>

                                <p class="category-item-amount">(19)</p>
                            </div>

                            <a href="#" class="category-btn">Show all</a>

                        </div>

                    </div>

                </div>

            </div>

        </div>





        <!--
      - PRODUCT
    -->

        <div class="product-container">

            <div class="container">


                <!--
          - SIDEBAR
        -->

                <div class="sidebar  has-scrollbar" data-mobile-menu>

                    <div class="sidebar-category">

                        <div class="sidebar-top">
                            <h2 class="sidebar-title">Category</h2>

                            <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                                <ion-icon name="close-outline"></ion-icon>
                            </button>
                        </div>

                        <ul class="sidebar-menu-category-list">

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/c35f5cb3e23083d44a66edced956b78b-skateboard-performance-silhouette.jpg"
                                            alt="clothes" width="30" height="30" class="menu-title-img">

                                        <p class="menu-title">Skateboarding</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Street Skateboarding</p>
                                            <data value="300" class="stock" title="Available Stock">20</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Vert Skateboarding</p>
                                            <data value="60" class="stock" title="Available Stock">18</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Park Skateboarding</p>
                                            <data value="50" class="stock" title="Available Stock">23</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Longboarding</p>
                                            <data value="87" class="stock" title="Available Stock">14</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/bali-surfing-graphic-element-illustration-png.jpg"
                                            alt="footwear" class="menu-title-img" width="30" height="25">

                                        <p class="menu-title">Surfing

                                        </p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Shortboard Surfing</p>
                                            <data value="45" class="stock" title="Available Stock">15</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Longboard Surfing</p>
                                            <data value="75" class="stock" title="Available Stock">32</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Bodyboarding</p>
                                            <data value="35" class="stock" title="Available Stock">26</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Stand-Up Paddleboarding</p>
                                            <data value="26" class="stock" title="Available Stock">7</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/muaythai-illustration-icon-free-png.jpg"
                                            alt="clothes" class="menu-title-img" width="30" height="20">

                                        <p class="menu-title">Muay Thai</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Traditional Muay Thai</p>
                                            <data value="46" class="stock" title="Available Stock">26</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Muay Boran</p>
                                            <data value="73" class="stock" title="Available Stock">13</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Kickboxing</p>
                                            <data value="61" class="stock" title="Available Stock">21</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/illustration-of-karate-free-png.jpg" alt="perfume"
                                            class="menu-title-img" width="30" height="20">

                                        <p class="menu-title">Karate</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Shotokan Karate</p>
                                            <data value="12" class="stock" title="Available Stock">22</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Goju-Ryu Karate</p>
                                            <data value="60" class="stock" title="Available Stock">10</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Kyokushin Karate</p>
                                            <data value="50" class="stock" title="Available Stock">18</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Shito-Ryu Karate</p>
                                            <data value="87" class="stock" title="Available Stock">12</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/5776440.png" alt="cosmetics" class="menu-title-img"
                                            width="30" height="20">

                                        <p class="menu-title">Zumba</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Zumba Fitness</p>
                                            <data value="68" class="stock" title="Available Stock">68</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Zumba Toning</p>
                                            <data value="46" class="stock" title="Available Stock">26</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Aqua Zumba</p>
                                            <data value="79" class="stock" title="Available Stock">39</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Zumba Kids</p>
                                            <data value="23" class="stock" title="Available Stock">48</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/pngtree-hiking-cartoon-figure-illustration-png-image_7243713.png"
                                            alt="glasses" class="menu-title-img" width="30" height="20">

                                        <p class="menu-title">Hiking</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Day Hiking</p>
                                            <data value="50" class="stock" title="Available Stock">50</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Backpacking</p>
                                            <data value="48" class="stock" title="Available Stock">38</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Mountain Hiking</p>
                                            <data value="48" class="stock" title="Available Stock">68</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Urban Hiking</p>
                                            <data value="48" class="stock" title="Available Stock">53</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                            <li class="sidebar-menu-category">

                                <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                        <img src="./assets/images/lovepik-sea-fishing-png-image_401776270_wh1200.png"
                                            alt="bags" class="menu-title-img" width="30" height="30">

                                        <p class="menu-title">Fishing</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>

                                </button>

                                <ul class="sidebar-submenu-category-list" data-accordion>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Fly Fishing</p>
                                            <data value="62" class="stock" title="Available Stock">12</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Saltwater Fishing</p>
                                            <data value="35" class="stock" title="Available Stock">25</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Freshwater Fishing</p>
                                            <data value="80" class="stock" title="Available Stock">10</data>
                                        </a>
                                    </li>

                                    <li class="sidebar-submenu-category">
                                        <a href="#" class="sidebar-submenu-title">
                                            <p class="product-name">Spearfishing</p>
                                            <data value="75" class="stock" title="Available Stock">5</data>
                                        </a>
                                    </li>

                                </ul>

                            </li>

                        </ul>

                    </div>

                    <div class="product-showcase">

                        <h3 class="showcase-heading">best coaching</h3>

                        <div class="showcase-wrapper">

                            <div class="showcase-container">

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/tennis-6649831_1280.png" alt="baby fabric shoes"
                                            width="75" height="75" class="showcase-img">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Tennis Coaching</h4>
                                        </a>

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>$35.00</del>
                                            <p class="price">$24.00</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/2c78c05d-5999-4193-880f-e13dda66467b.png"
                                            alt="men's hoodies t-shirt" class="showcase-img" width="75"
                                            height="75">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">Soccer Coaching</h4>
                                        </a>
                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-half-outline"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>$37.00</del>
                                            <p class="price">$27.00</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/321-3210923_vector-illustration-of-game-of-pocket-billiards-pool.png"
                                            alt="girls t-shirt" class="showcase-img" width="75" height="80">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">billiard coaching</h4>
                                        </a>
                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-half-outline"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>$25.00</del>
                                            <p class="price">$19.00</p>
                                        </div>

                                    </div>

                                </div>

                                <div class="showcase">

                                    <a href="#" class="showcase-img-box">
                                        <img src="./assets/images/167-1673081_golf-coach-clip-art-hd-png-download.png"
                                            alt="woolen hat for men" class="showcase-img" width="75"
                                            height="85">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="#">
                                            <h4 class="showcase-title">golf coaching</h4>
                                        </a>
                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>$45.00</del>
                                            <p class="price">$32.00</p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <div class="product-box">

                    <!--
            - PRODUCT MINIMAL
          -->

                    <div class="product-minimal">

                        <div class="product-showcase">

                            <h2 class="title">New Arrivals</h2>

                            <div class="showcase-wrapper has-scrollbar">

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/Pickleball-PNG-HD.png"
                                                alt="relaxed short full sleeve t-shirt" width="70"
                                                class="showcase-img">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Pickleball</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Racket and Paddle </a>

                                            <div class="price-box">
                                                <p class="price">$32.00</p>
                                                <del>$45.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/pngtree-frisbee-sports-outdoor-png-image_6142878.png"
                                                alt="girls pink embro design top" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Ultimate Frisbee</h4>

                                                <a href="#" class="showcase-category">Cardio and Endurance</a>

                                                <div class="price-box">
                                                    <p class="price">$21.00</p>
                                                    <del>$39.00</del>
                                                </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/1200px-Footgolf_pictogram.svg.png"
                                                alt="black floral wrap midi skirt" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Footgolf</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Cardio and Endurance</a>

                                            <div class="price-box">
                                                <p class="price">$26.00</p>
                                                <del>$35.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/teqball.png"
                                                alt="pure garment dyed cotton shirt" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Teqball</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Ball Sports</a>

                                            <div class="price-box">
                                                <p class="price">$38.00</p>
                                                <del>$41.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/pngtree-padel-player-with-racquet-retro-mascot-racquet-team-mascot-forehand-vector-png-image_32777320.png"
                                                alt="men yarn fleece full-zip jacket" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Padel Tennis</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Racket and Paddle</a>

                                            <div class="price-box">
                                                <p class="price">$21.00</p>
                                                <del>$29.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/283c8d388abe8d0a89df59e36c98c04b.png"
                                                alt="mens winter leathers jackets" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Calisthenics</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Strength and Fitness</a>

                                            <div class="price-box">
                                                <p class="price">$22.00</p>
                                                <del>$30.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/e937432cbec4df7c9f70405058932cfc-spikeball-net-and-ball-cut-out.jpg"
                                                alt="mens winter leathers jackets" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Spikeball </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Cardio and Endurance</a>

                                            <div class="price-box">
                                                <p class="price">$20.00</p>
                                                <del>$35.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/1028842583,width=178,height=178.jpg"
                                                alt="better basics french terry sweatshorts" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Bossaball</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Extreme and Adventure</a>

                                            <div class="price-box">
                                                <p class="price">$23.00</p>
                                                <del>$37.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="product-showcase">

                            <h2 class="title">Trending</h2>

                            <div class="showcase-wrapper  has-scrollbar">

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/32daeef3d530e95e1b638fc28726996f-overhead-squat-crossfit-silhouette.jpg"
                                                alt="running & trekking shoes - white" class="showcase-img"
                                                width="78">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">CrossFit</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Functional Fitness</a>

                                            <div class="price-box">
                                                <p class="price">$29.00</p>
                                                <del>$35.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/yoga-postures-exercises-png.jpg"
                                                alt="trekking & running shoes - black" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Yoga</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Mind and Body Fitness</a>

                                            <div class="price-box">
                                                <p class="price">$38.00</p>
                                                <del>$46.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/5affb50b6482973b1f5e6c900a857733.png"
                                                alt="womens party wear shoes" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Cycling</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Cardio and Endurance</a>

                                            <div class="price-box">
                                                <p class="price">$34.00</p>
                                                <del>$42.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/purepng.com-running-manrunning-manrunnerjoggingjumpingman-1421526963900xvj8j.png"
                                                alt="sports claw women's shoes" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Running</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Cardio and Endurance</a>

                                            <div class="price-box">
                                                <p class="price">$24.00</p>
                                                <del>$28.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/illustration-of-karate-free-png.jpg"
                                                alt="air tekking shoes - white" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Martial Arts</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Martial Arts and
                                                Self-Defense</a>

                                            <div class="price-box">
                                                <p class="price">$22.00</p>
                                                <del>$35.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/9d164ce64c69efd9bddc58a00b2bbfd5-surfer-on-a-board-character.jpg"
                                                alt="Boot With Suede Detail" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Surfing</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Water Sports</a>

                                            <div class="price-box">
                                                <p class="price">$20.00</p>
                                                <del>$30.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/silhouette-of-a-skateboarder-player-skateboard-png.jpg"
                                                alt="men's leather formal wear shoes" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Skateboarding</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Extreme and Adventure</a>

                                            <div class="price-box">
                                                <p class="price">$26.00</p>
                                                <del>$28.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/8c14fdf2cec70f4be69e7f2f336d70f1-male-stand-up-paddleboarding-silhouette.jpg"
                                                alt="casual men's brown shoes" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Paddleboarding</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Water Sports</a>

                                            <div class="price-box">
                                                <p class="price">$30.00</p>
                                                <del>$35.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="product-showcase">

                            <h2 class="title">Top Rated</h2>

                            <div class="showcase-wrapper  has-scrollbar">

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/football-player-play-football-download-clip-art-clip-art-24.png"
                                                alt="pocket watch leather pouch" class="showcase-img"
                                                width="60">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Football</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Team and Ball</a>

                                            <div class="price-box">
                                                <p class="price">$20.00</p>
                                                <del>$24.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/pngimg.com - cricket_PNG112.png"
                                                alt="silver deer heart necklace" class="showcase-img"
                                                width="60">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Cricket</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Bat-and-Ball</a>

                                            <div class="price-box">
                                                <p class="price">$34.00</p>
                                                <del>$39.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/ice-hockey-player-sport-team-png.jpg"
                                                alt="titan 100 ml womens perfume" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Hockey </h4>
                                            </a>

                                            <a href="#" class="showcase-category">Stick and Ball</a>

                                            <div class="price-box">
                                                <p class="price">$32.00</p>
                                                <del>$40.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/tennis-player-graphic-clipart-design-free-png (1).jpg"
                                                alt="men's leather reversible belt" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Tennis</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Racket Sports</a>

                                            <div class="price-box">
                                                <p class="price">$34.00</p>
                                                <del>$40.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="showcase-container">

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/pngtree-volleyball-player-blue-costume-png-image_6526191.png"
                                                alt="platinum zircon classic ring" class="showcase-img"
                                                width="75">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Volleyball</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Team and Ball</a>

                                            <div class="price-box">
                                                <p class="price">$22.00</p>
                                                <del>$25.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/pngtree-table-tennis-player-png-image_7218870.png"
                                                alt="smart watche vital plus" class="showcase-img" width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Table Tennis</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Racket Sports</a>

                                            <div class="price-box">
                                                <p class="price">$16.00</p>
                                                <del>$18.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/pngtree-basketball-players-png-image_7218794.png"
                                                alt="shampoo conditioner packs" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Basketball</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Team and Ball</a>

                                            <div class="price-box">
                                                <p class="price">$20.00</p>
                                                <del>$30.00</del>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="showcase">

                                        <a href="#" class="showcase-img-box">
                                            <img src="./assets/images/4aa90302b699f9364809112947266fce-rugby-player-flat.jpg"
                                                alt="rose gold peacock earrings" class="showcase-img"
                                                width="70">
                                        </a>

                                        <div class="showcase-content">

                                            <a href="#">
                                                <h4 class="showcase-title">Rugby</h4>
                                            </a>

                                            <a href="#" class="showcase-category">Team and Ball</a>

                                            <div class="price-box">
                                                <p class="price">$20.00</p>
                                                <del>$30.00</del>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!--
            - PRODUCT FEATURED
          -->

                    <div class="product-featured">

                        <h2 class="title">Deal of the day</h2>

                        <div class="showcase-wrapper has-scrollbar">

                            <div class="showcase-container">

                                <div class="showcase">

                                    <div class="showcase-banner">
                                        <img src="./assets/images/pngtree-man-character-training-at-the-gym-vector-illustration-png-image_10160360.png"
                                            alt="shampoo, conditioner & facewash packs" class="showcase-img">
                                    </div>

                                    <div class="showcase-content">

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star-outline"></ion-icon>
                                        </div>

                                        <a href="#">
                                            <h3 class="showcase-title">Personal Trainer GYM</h3>
                                        </a>

                                        <p class="showcase-desc">
                                            Guiding people who use gym facilities, both newcomers and regulars with
                                            certain programs. They guide people so they can do the technique correctly,
                                            including the equipment used.
                                        </p>

                                        <div class="price-box">
                                            <p class="price">$15.00</p>

                                            <del>$35.00</del>
                                        </div>

                                        <button class="add-cart-btn">add to cart</button>

                                        <div class="showcase-status">
                                            <div class="wrapper">
                                                <p>
                                                    already book: <b>25</b>
                                                </p>

                                                <p>
                                                    available: <b>40</b>
                                                </p>
                                            </div>

                                            <div class="showcase-status-bar"></div>
                                        </div>

                                        <div class="countdown-box">

                                            <p class="countdown-desc">
                                                Hurry Up! Offer ends in:
                                            </p>

                                            <div class="countdown">

                                                <div class="countdown-content">

                                                    <p class="display-number">10</p>

                                                    <p class="display-text">Days</p>

                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">06</p>
                                                    <p class="display-text">Hours</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">20</p>
                                                    <p class="display-text">Min</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">00</p>
                                                    <p class="display-text">Sec</p>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="showcase-container">

                                <div class="showcase">

                                    <div class="showcase-banner">
                                        <img src="./assets/images/pngtree-boxing-girl-and-coach-png-image_7183425.png"
                                            alt="Rose Gold diamonds Earring" class="showcase-img">
                                    </div>

                                    <div class="showcase-content">

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <h3 class="showcase-title">
                                            <a href="#" class="showcase-title">Boxing Coach</a>
                                        </h3>

                                        <p class="showcase-desc">
                                            Not only does it train body coordination, boxing is also useful for helping
                                            improve balance. Boxing involves a series of movements that are carried out
                                            quickly and on target, so good body balance is needed to control the
                                            movements.
                                        </p>

                                        <div class="price-box">
                                            <p class="price">$23.00</p>
                                            <del>$43.00</del>
                                        </div>

                                        <button class="add-cart-btn">add to cart</button>

                                        <div class="showcase-status">
                                            <div class="wrapper">
                                                <p> already sold: <b>37</b> </p>

                                                <p> available: <b>50</b> </p>
                                            </div>

                                            <div class="showcase-status-bar"></div>
                                        </div>

                                        <div class="countdown-box">

                                            <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                                            <div class="countdown">
                                                <div class="countdown-content">
                                                    <p class="display-number">6</p>
                                                    <p class="display-text">Days</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">13</p>
                                                    <p class="display-text">Hours</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">09</p>
                                                    <p class="display-text">Min</p>
                                                </div>

                                                <div class="countdown-content">
                                                    <p class="display-number">00</p>
                                                    <p class="display-text">Sec</p>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!--
            - PRODUCT GRID
          -->

                    <div class="product-main">

                        <h2 class="title">New Products</h2>

                        <div class="product-grid" id="product-grid">

                            <div class="showcase">

                                <div class="showcase-banner">

                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="Mens Winter Leathers Jackets" width="300"
                                        class="product-img default">
                                    <img src="./assets/images/Tennis Coach.jpg" alt="Mens Winter Leathers Jackets"
                                        width="300" class="product-img hover">

                                    <p class="showcase-badge">15%</p>

                                    <div class="showcase-actions">

                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>

                                    </div>

                                </div>

                                <div class="showcase-content">

                                    <a href="#" class="showcase-category">Tennis</a>

                                    <a href="#">
                                        <h3 class="showcase-title">Rafael Nadal</h3>
                                    </a>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$29.00</p>
                                        <del>$35.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="Pure Garment Dyed Cotton Shirt" class="product-img default"
                                        width="300">
                                    <img src="./assets/images/Man_Coach_Align.png"
                                        alt="Pure Garment Dyed Cotton Shirt" class="product-img hover"
                                        width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Golf</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Tiger Woods</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$45.00</p>
                                        <del>$56.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default"
                                        width="300">
                                    <img src="./assets/images/pngtree-coach-teaches-children-to-learn-to-swim-original-hand-drawn-cartoon-png-image_5767114.jpg"
                                        alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover"
                                        width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Swimming</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Michael Phelps</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$21.00</p>
                                        <del>$25.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="Black Floral Wrap Midi Skirt" class="product-img default"
                                        width="300">
                                    <img src="./assets/images/pngtree-boxing-coach-with-his-fighter-leisure-photo-png-image_14033807.png"
                                        alt="Black Floral Wrap Midi Skirt" class="product-img hover"
                                        width="300">

                                    <p class="showcase-badge angle pink">new</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Boxing/Martial Arts</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Manny Pacquiao</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$25.00</p>
                                        <del>$35.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="Casual Men's Brown shoes" class="product-img default" width="300">
                                    <img src="./assets/images/day-8-of-drawing-a-random-just-dance-coach-today-got-that-v0-4tr90wvthfga1.png"
                                        alt="Casual Men's Brown shoes" class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Dance</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Misty Copeland</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$19.00</p>
                                        <del>$25.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="Pocket Watch Leather Pouch" class="product-img default"
                                        width="300">
                                    <img src="./assets/images/lovepik-sports-fitness-instructor-guidance-png-image_400768053_wh1200.png"
                                        alt="Pocket Watch Leather Pouch" class="product-img hover" width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Personal Training GYM</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Jillian Michaels</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$20.00</p>
                                        <del>$30.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="Smart watche Vital Plus" class="product-img default" width="300">
                                    <img src="./assets/images/hero-image-pedding-coaching.jpg"
                                        alt="Smart watche Vital Plus" class="product-img hover" width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Road Bike</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Eddy Merckx</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$14.00</p>
                                        <del>$25.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="Womens Party Wear Shoes" class="product-img default" width="300">
                                    <img src="./assets/images/pngtree-fitness-coach-instructing-students-to-lift-weights-original-hand-drawn-cartoon-png-image_5758378.jpg"
                                        alt="Womens Party Wear Shoes" class="product-img hover" width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Fitness</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Jillian Michaels</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$25.00</p>
                                        <del>$30.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="Mens Winter Leathers Jackets" class="product-img default"
                                        width="300">
                                    <img src="./assets/images/3.png.crdownload" alt="Mens Winter Leathers Jackets"
                                        class="product-img hover" width="300">

                                    <p class="showcase-badge">35%</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Mountain Bike</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Carlo Froome</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$30.00</p>
                                        <del>$45.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="Trekking & Running Shoes - black" class="product-img default"
                                        width="300">
                                    <img src="./assets/images/long-jump-trajectory-vector-10629107.jpg"
                                        alt="Trekking & Running Shoes - black" class="product-img hover"
                                        width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">long jump</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Usain Bolt</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$18.00</p>
                                        <del>$24.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="Men's Leather Formal Wear shoes" class="product-img default"
                                        width="300">
                                    <img src="./assets/images/football-coach-clipart-md.png"
                                        alt="Men's Leather Formal Wear shoes" class="product-img hover"
                                        width="300">

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Football</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Pep Guardiola</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$20.00</p>
                                        <del>$25.00</del>
                                    </div>

                                </div>

                            </div>

                            <div class="showcase">

                                <div class="showcase-banner">
                                    <img src="./assets/images/User-Profile-PNG-Image.png"
                                        alt="Better Basics French Terry Sweatshorts" class="product-img default"
                                        width="300">
                                    <img src="./assets/images/coach_large.jpg"
                                        alt="Better Basics French Terry Sweatshorts" class="product-img hover"
                                        width="300">

                                    <p class="showcase-badge angle black">sale</p>

                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>

                                        <button class="btn-action">
                                            <ion-icon name="bag-add-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">American Football</a>

                                    <h3>
                                        <a href="#" class="showcase-title">Nick Saban</a>
                                    </h3>

                                    <div class="showcase-rating">
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                        <ion-icon name="star-outline"></ion-icon>
                                    </div>

                                    <div class="price-box">
                                        <p class="price">$28.00</p>
                                        <del>$35.00</del>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div id="cart">
            <h2>Shopping Cart</h2>
            <p id="cartItem">Your cart is empty</p>
            <p>Total Items: <span id="count">0</span></p>
            <p>Total Price: <span id="total">$0.00</span></p>
        </div>

        <script src="./add to cart1/addtocart.js"></script>



        <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

        <div>

            <div class="container">

                <div class="testimonials-box">

                    <!--
            - TESTIMONIALS
          -->

                    <div class="testimonial">

                        <h2 class="title">testimonial</h2>

                        <div class="testimonial-card">

                            <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner"
                                width="80" height="80">

                            <p class="testimonial-name">Alan Doe</p>

                            <p class="testimonial-title">Tennis Fan</p>

                            <img src="./assets/images/icons/quotes.svg" alt="quotation" class="quotation-img"
                                width="26">

                            <p class="testimonial-desc">
                                Playing tennis can help improve cardiovascular condition, muscle strength and body
                                speed. Additionally, it can help reduce the risk of chronic disease.
                            </p>

                        </div>

                    </div>



                    <!--
            - CTA
          -->

                    <div class="cta-container">

                        <img src="./assets/images/summer-time-sport-activities-set-sports-exercises_93633-576.avif"
                            alt="summer collection" class="cta-banner">

                        <a href="#" class="cta-content">

                            <p class="discount">25% Discount</p>

                            <h2 class="cta-title">Summer Time</h2>

                            <p class="cta-text">Starting @ $13</p>

                            <button class="cta-btn">Book now</button>

                        </a>

                    </div>



                    <!--
            - SERVICE
          -->

                    <div class="service">

                        <h2 class="title">Our Services</h2>

                        <div class="service-container">

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="boat-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">All Over The World</h3>
                                    <p class="service-desc">Book anything you want</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="rocket-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">On time coach</h3>
                                    <p class="service-desc">More Efficient</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="call-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Best Online Support</h3>
                                    <p class="service-desc">Hours: 8AM - 11PM</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="arrow-undo-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">Return Policy</h3>
                                    <p class="service-desc">Easy & Free Return</p>

                                </div>

                            </a>

                            <a href="#" class="service-item">

                                <div class="service-icon">
                                    <ion-icon name="ticket-outline"></ion-icon>
                                </div>

                                <div class="service-content">

                                    <h3 class="service-title">30% money back</h3>
                                    <p class="service-desc">For Order Over $100</p>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--
      - BLOG
    -->

    </main>





    <!--
    - FOOTER
  -->

    <footer>


        <div class="footer-nav">

            <div class="container">

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Popular Categories</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Fashion</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Electronic</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Cosmetic</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Health</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Watches</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Products</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Our Company</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Delivery</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Legal Notice</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Terms and conditions</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">About us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Secure payment</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Services</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New products</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Contact</h2>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="content">
                            419 State 414 Rte
                            Beaver Dams, New York(NY), 14812, USA
                        </address>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Follow Us</h2>
                    </li>

                    <li>
                        <ul class="social-link">

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <div class="container">

                <img src="/assets/images/payment.png" alt="payment method" class="payment-img">

                <p class="copyright">
                    Copyright &copy; <a href="#">Anon</a> all rights reserved.
                </p>

            </div>

        </div>

    </footer>

    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
