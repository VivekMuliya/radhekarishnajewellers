<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Website</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #8b2d2d;
            --primary-light: #a23a3a;
            --secondary-color: #f9f3f1;
            --text-color: #333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
        font-family: 'Poppins', sans-serif;
        overflow-x: hidden;
        margin: 0;
        padding: 0;
        }

        /* Header Styles */
        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .top-bar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background: var(--secondary-color);
        }

        .logo {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--primary-color);
            padding: 5px 0;
        }

        .search-bar {
            flex: 1;
            margin: 0 40px;
            max-width: 600px;
        }

        .search-bar form {
            display: flex;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            border: 1px solid #ddd;
        }

        .search-bar input {
            flex: 1;
            padding: 8px 15px;
            border: none;
            outline: none;
            font-size: 14px;
        }

        .search-bar button {
            padding: 8px 15px;
            background: none;
            border: none;
            color: var(--primary-color);
            cursor: pointer;
        }

        .icons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .icons a {
            color: var(--primary-color);
            text-decoration: none;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 12px;
        }

        .icons a i {
            font-size: 20px;
            margin-bottom: 3px;
        }

        .logo img:hover {
            transform: scale(1.1) rotate(5deg);
        }


        /* Submenu Styles */
        .submenu {
            display: flex;
            overflow-x: auto;
            padding: 8px 15px;
            background: white;
            white-space: nowrap;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 100; /* Lower z-index than the dropdown menu */
        }

        .submenu::-webkit-scrollbar {
            display: none;
        }

        .submenu a {
            color: var(--text-color);
            text-decoration: none;
            padding: 4px 12px;
            font-size: 13px;
            transition: color 0.3s ease;
            display: block;
        }

        .submenu a:hover {
            color: var(--primary-color);
        }


        .submenu a:hover {
        color: var(--primary-color);
        }
        
        /* Dropdown Styles */
        .account-dropdown {
            position: relative;
        }

        /* Enhanced Dropdown Menu */
        .account-dropdown .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(20px);
            transition: all 0.3s ease;
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(0,0,0,0.1);
            position: absolute;
            top: 100%;
            right: 0;
            width: 200px;
            z-index: 1001; /* Higher z-index than the submenu */
        }

        .account-dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 200px;
        }

        .account-dropdown .dropdown-menu h3 {
            margin: 0 0 10px;
            font-size: 18px;
            color: #8b2d2d;
        }

        .account-dropdown .dropdown-menu p {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        .account-dropdown .dropdown-menu button {
            margin: 5px 0;
            padding: 4px 10px;
            background-color: #8b2d2d;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        
        .account-dropdown .dropdown-menu button:hover {
            background-color: #a23a3a;
        }

        .account-dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .account-dropdown .dropdown-menu {
                right: auto; /* Reset right positioning */
                left: 50%; /* Center the dropdown */
                transform: translateX(-50%) translateY(20px); /* Center horizontally */
            }

            .account-dropdown:hover .dropdown-menu {
                transform: translateX(-50%) translateY(0); /* Center horizontally */
            }
        }

        @media (max-width: 480px) {
            .account-dropdown .dropdown-menu {
                width: 180px; /* Adjust width for smaller screens */
            }
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 80vh;
            background: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero-images {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
        }

        .hero-images img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .hero-images img.active {
            opacity: 1;
        }

        .hero-content {
            position: absolute;
            text-align: center;
            color: #fff;
            z-index: 2;
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }

        .hero-content h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .hero-content h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 300;
        }

        .shop-now {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: #fff;
            color: #333;
            text-decoration: none;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .shop-now:hover {
            background: #333;
            color: #fff;
        }

        /* Dots Indicator */
        .hero-dots {
            position: absolute;
            bottom: 20px;
            display: flex;
            justify-content: center;
            width: 100%;
            z-index: 3;
        }

        .hero-dots span {
            width: 12px;
            height: 12px;
            margin: 0 5px;
            background: #ddd;
            border-radius: 50%;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .hero-dots span.active {
            background: #333;
        }

        /* Features Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
            background: white;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
        }

        .feature i {
            font-size: 24px;
            color: var(--primary-color);
        }

        /* Mobile Optimizations */
        @media (max-width: 768px) {
            .top-bar {
                justify-content: center;
            }

            .search-bar {
                order: 1;
                width: 100%;
                margin: 10px 0;
            }

            .logo {
                width: 100%;
                text-align: center;
                order: 0;
            }

            .icons {
                width: 100%;
                justify-content: center;
                order: 2;
            }

            .hero-content h1 {
                font-size: 24px;
            }

            .hero-content h2 {
                font-size: 18px;
            }

            .features {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 480px) {
            .icons a span {
                display: none;
            }

            .features {
                grid-template-columns: 1fr;
            }

            .hero {
                height: 50vh;
            }
        }

        .featured-collection {
            padding: 40px 20px;
            background: var(--secondary-color);
        }

        .collection-title {
            text-align: center;
            margin-bottom: 30px;
            color: var(--text-color);
            font-size: 2rem;
            font-weight: 500;
            position: relative;
        }

        .collection-title::after {
            content: '';
            display: block;
            width: 60px;
            height: 3px;
            background: var(--primary-color);
            margin: 10px auto;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-image {
            position: relative;
            padding-top: 100%;
            background: #f9f9f9;
        }

        .product-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .sale-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #ff4444;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 12px;
        }

        .product-info {
            padding: 15px;
        }

        .product-name {
            font-size: 1rem;
            color: var(--text-color);
            margin-bottom: 5px;
            font-weight: 500;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .current-price {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 1.1rem;
        }

        .original-price {
            color: #999;
            text-decoration: line-through;
            font-size: 0.9rem;
        }

        .product-colors {
            display: flex;
            gap: 5px;
            margin-top: 10px;
        }

        .color-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            border: 1px solid #ddd;
        }

        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Mega Menu Styles */

        .mega-menu {
            display: none;
            position: fixed; /* Position the menu outside the header */
            background: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            padding: 15px;
            border-radius: 4px;
            border-top: 3px solid #8B4513;
            width: 300px; /* Default width for the menu */
            max-width: 90%; /* Ensure it doesn't overflow smaller screens */
        }

        .mega-menu::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 20px;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #8B4513;
        }

        .mega-menu-content {
            max-height: calc(100vh - 180px); /* Prevent overflow */
    overflow-y: auto;
    display: flex;
    flex-direction: column;
    gap: 15px;
        }

        .mega-menu-column h3 {
            color: #8B4513;
            font-size: 14px;
            margin-bottom: 10px;
            font-weight: 600;
            padding-bottom: 5px;
            border-bottom: 1px solid #eee;
        }

        .mega-menu-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mega-menu-list li {
            margin: 5px 0;
        }

        .mega-menu-list a {
            color: #333;
            text-decoration: none;
            font-size: 12px;
            transition: color 0.3s ease;
            padding: 2px 0;
        }

        .mega-menu-list a:hover {
            color: #8B4513;
        }


        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .submenu {
                justify-content: flex-start;
                padding: 5px 10px;
                height: 35px;
            }

            .submenu a {
                font-size: 12px;
                padding: 3px 10px;
            }

            .mega-menu {
                width: 90%; /* Adjust menu width for smaller screens */

            }
        }
        
        /* that is footer content */
        .footer {
            background-color: #2d2418;
            color: #fff;
            padding: 40px 20px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #8b2d2d;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .footer-section ul li a:hover {
            opacity: 1;
        }

        .footer-bottom {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .payment-methods img {
            height: 30px;
            margin-left: 10px;
        }

        .social-links a {
            color: #fff;
            margin-left: 15px;
            font-size: 20px;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        /* Desktop View */
        @media (min-width: 481px) {
            .footer-content {
                max-width: 1200px;
                margin: 0 auto;
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 30px;
            }
        }

        /* Mobile View */
        @media (max-width: 480px) {
            .footer {
                padding: 0;
            }

            .footer-content {
                display: block;
            }

            .footer-section {
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                position: relative;
            }

            .footer-section h3 {
                margin: 0;
                padding: 15px 40px 15px 15px; /* Changed padding for right icon */
                position: relative;
                cursor: pointer;
                background-color: #2d2418;
            }

            /* Icon styles */
            .footer-section h3::before {
                content: '+';
                position: absolute;
                right: 15px;
                color: #8b2d2d;
                font-size: 20px;
                transition: all 0.3s ease;
            }

            /* Change icon to minus and color to black when active */
            .footer-section.active h3::before {
                content: '−'; /* Using minus sign instead of hyphen */
                color: #8b2d2d;
            }

            .footer-section ul {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
                padding: 0 15px;
                background-color:#2d2418;
                /* #2d2418 */
            }

            .footer-section.active ul {
                max-height: 300px;
                padding: 0 15px 15px;
            }

            .footer-bottom {
                margin-top: 0;
                padding: 15px;
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }

            .payment-methods {
                display: flex;
                justify-content: center;
                gap: 10px;
            }

            .payment-methods img {
                margin: 0;
                height: 25px;
            }

            .social-links {
                display: flex;
                justify-content: center;
                gap: 20px;
            }

            .social-links a {
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="top-bar">
            <div class="logo">Radhe Krishna Jewellers</div>
            <div class="search-bar">
                <form action="search.php" method="get">
                    <input type="text" name="query" placeholder="Search for Gold Jewellery, Sliver Jewellery, and more...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="icons">
                <a href="products.php?type=silver">
                    <i class="fas fa-ring"></i>
                    <span>Silver</span>
                </a>
                <!-- Account Icon -->
                <div class="account-dropdown">
                    <a href="#" id="account-icon">
                        <i class="fas fa-user"></i>
                        <span>Account</span>
                    </a>
                    <div class="dropdown-menu">
                        <center>
                        <h2>My Account</h2>
                        <p>Login to access your account</p>
                        <button onclick="window.location.href='login.php'">Log In</button>
                        <button onclick="window.location.href='register.php'">Sign Up</button>
                        <a href="contact.php">Click here to Contact Us</a>
                        </center>
                    </div>
                </div>
                <a href="wishlist.php">
                    <i class="fas fa-heart"></i>
                    <span>Wishlist</span>
                </a>
                <a href="cart.php">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Cart</span>
                </a>
            </div>
        </div>
        <div class="submenu">
        <div>
            <a href="#">All Jewellery</a>
            <div class="mega-menu">
                <div class="mega-menu-content">
                    <div class="mega-menu-column">
                        <h3>CATEGORY</h3>
                        <ul class="mega-menu-list">
                                <li><a href="#">EARRINGS</a></li>
                                <li><a href="#">PENDANTS</a></li>
                                <li><a href="#">FINGER RINGS</a></li>
                                <li><a href="#">MANGALSUTRA</a></li>
                                <li><a href="#">CHAINS</a></li>
                                <li><a href="#">NOSE PIN</a></li>
                                <li><a href="#">NECKLACES</a></li>
                                <li><a href="#">NECKLACE SET</a></li>
                                <li><a href="#">BANGLES</a></li>
                                <li><a href="#">BRACELETS</a></li>
                                <li><a href="#">PRENDANTS & EARRING SET</a></li>
                                <li><a href="#">GOLD COINS</a></li>
                                <li><a class="gift-card" href="#">GIFT CARD</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <a href="#">Gold</a>
                <div class="mega-menu">
                    <div class="mega-menu-content">
                        <div class="mega-menu-column">
                            <h3>CATEGORY</h3>
                            <ul class="mega-menu-list">
                                <li><a href="#">BANGLES</a></li>
                                <li><a href="#">BRACELETS</a></li>
                                <li><a href="#">EARRINGS</a></li>
                                <li><a href="#">GOLD CHAINS</a></li>
                                <li><a href="#">PENDANTS</a></li>
                                <li><a href="#">RINGS</a></li>
                                <li><a href="#">ENGAGEMENT RINGS</a></li>
                                <li><a href="#">NECKLACES</a></li>
                                <li><a href="#">NOSE PINS</a></li>
                                <li><a href="#">KADAS</a></li>
                                <li><a href="#">MANGALSUTRAS</a></li>
                                <li><a href="#">JHUMKAS</a></li>
                                <li><a href="#">HOOP EARRINGS</a></li>
                                <li><a href="#">STUD EARRINGS</a></li>
                                <li><a href="#">DROP EARRINGS</a></li>
                                <li><a href="#">MAANG TIKKS</a></li>
                                <li><a href="#">NECKLACE SET</a></li>
                                <li><a href="#">PENDANTS & EARRINGS SETS</a></li>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>
                <a href="#">Earrings</a>
                <div class="mega-menu">
                    <div class="mega-menu-content">
                        <div class="mega-menu-column">
                            <h3>Style</h3>
                            <ul class="mega-menu-list">
                                <li><a href="#">All EARRINGS</a></li>
                                <li><a href="#">DROP & DANGLERS</a></li>
                                <li><a href="#">HOOP & HUGGIES</a></li>
                                <li><a href="#">JHUMKAS</a></li>
                                <li><a href="#">STUDS & TOPS</a></li>
                                <li><a href="#">EAR CUFFS</a></li>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <a href="#">Rings</a>
                <div class="mega-menu">
                    <div class="mega-menu-content">
                        <div class="mega-menu-column">
                            <h3>ALL RINGS</h3>
                            <ul class="mega-menu-list">
                                <li><a href="#">CASUAL RINGS</a></li>
                                <li><a href="#">COUPLE RINGS</a></li>
                                <li><a href="#">ENGAGEMENT RINGS</a></li>
                                <li><a href="#">GOLD ENGAGEMENT RINGS</a></li>
                                <li><a href="#">MEN'S RINGS</a></li>
                                <li><a href="#">PLATINUM ENGAGEMENT RINGS</a></li>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#">Bangles</a>
            <a href="#">Digital Gold</a>
            <div>
            <a href="#">More</a>
            <div class="mega-menu">
                    <div class="mega-menu-content">
                        <div class="mega-menu-column">
                            <ul class="mega-menu-list">
                                <li><a href="#">EXCHANGE PROGRAM</a></li>
                                <li><a href="#">BESTSELLERS</a></li>
                                <li><a href="#">GOLD RATE</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-images">
                <img src="images/img1.jpg" alt="Image 1" class="active">
                <img src="images/img2.jpg" alt="Image 2">
                <img src="images/img3.jpg" alt="Image 3">
                <img src="images/img4.jpg" alt="Image 4">
            </div>
            <div class="hero-content">
                <h1>Adorning Your Fingers With Timeless</h1>
                <h2>Designs for Contemporary Elegance</h2>
                <button class="shop-now" onclick="window.location.href='shop.php'">
                    <i class="fas fa-shopping-bag"></i> Shop Now
                </button>
            </div>
        </section>

        <section class="featured-collection">

            <h2 class="collection-title">Featured Collection</h2>
            <div class="product-grid">
                <!-- Snake Necklace -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/s1.jpg" alt="Snake Necklace">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Ethereal Infusion Diamond Pendant</h3>
                        <div class="product-price">
                            <span class="current-price">₹ 28930</span>
                            <span class="original-price">₹ 29672</span>
                        </div>
                        <div class="product-colors">
                            <span class="color-dot" style="background: #FFD700"></span>
                            <span class="color-dot" style="background: #C0C0C0"></span>
                        </div>
                    </div>
                </div>

                <!-- Mini Magma Hoops -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/b1.jpg" alt="Mini Magma Hoops">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Sparkling Boxes Tennis Bracelet</h3>
                        <div class="product-price">
                            <span class="current-price">₹ 253249</span>
                            <span class="original-price">₹ 281388</span>
                        </div>
                        <div class="product-colors">
                            <span class="color-dot" style="background: #FFD700"></span>
                            <span class="color-dot" style="background: #C0C0C0"></span>
                        </div>
                    </div>
                </div>

                <!-- Chicago Hoops -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/c1.jpg" alt="Chicago Hoops">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Shimmering Gold Foxtail Chain</h3>
                        <div class="product-price">
                            <span class="current-price">₹ 34746</span>
                            <span class="original-price">₹ 38746</span>
                        </div>
                        <div class="product-colors">
                            <span class="color-dot" style="background: #FFD700"></span>
                            <span class="color-dot" style="background: #C0C0C0"></span>
                        </div>
                    </div>
                </div>

                <!-- Gold Mini Hoops -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/r1.jpg" alt="Gold Mini Hoops">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Fancy Traditional Gold and Diamond Finger Ring for Woman</h3>
                        <div class="product-price">
                            <span class="current-price">₹ 35336</span>
                            <span class="original-price">₹ 38336</span>
                        </div>
                        <div class="product-colors">
                            <span class="color-dot" style="background: #FFD700"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-collection">

            <h2 class="collection-title">Sliver Collection</h2>
            <div class="product-grid">
                <!-- Snake Necklace -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/sb1.jpg" alt="Snake Necklace">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Organic Swirl Bangle</h3>
                        <div class="product-price">
                            <span class="current-price">₹ 8930</span>
                            <span class="original-price">₹ 9672</span>
                        </div>
                        <div class="product-colors">
                            <span class="color-dot" style="background:rgba(192, 192, 192, 0.76)"></span>
                        </div>
                    </div>
                </div>

                <!-- Mini Magma Hoops -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/sch1.jpg" alt="Mini Magma Hoops">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Blue Topaz Sennen Necklace </h3>
                        <div class="product-price">
                            <span class="current-price">₹ 5249</span>
                            <span class="original-price">₹ 6388</span>
                        </div>
                        <div class="product-colors">
                            <span class="color-dot" style="background:rgba(192, 192, 192, 0.76)"></span>
                        </div>
                    </div>
                </div>

                <!-- Chicago Hoops -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/sb2.jpg" alt="Chicago Hoops">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Sea Siren Blue Topaz Hoops</h3>
                        <div class="product-price">
                            <span class="current-price">₹ 4746</span>
                            <span class="original-price">₹ 8746</span>
                        </div>
                        <div class="product-colors">
                            <span class="color-dot" style="background:rgba(192, 192, 192, 0.76)"></span>
                        </div>
                    </div>
                </div>

                <!-- Gold Mini Hoops -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="images/sch2.jpg" alt="Gold Mini Hoops">
                        <span class="sale-badge">SALE</span>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Cornish Sea Star Pendant</h3>
                        <div class="product-price">
                            <span class="current-price">₹ 4336</span>
                            <span class="original-price">₹ 5336</span>
                        </div>
                        <div class="product-colors">
                            <span class="color-dot" style="background:rgba(192, 192, 192, 0.76)"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="feature">
                <i class="fas fa-truck"></i>
                <div class="feature-text">
                    <h3>Free Shipping</h3>
                    <p>For orders from ₹ 10000</p>
                </div>
            </div>
            <div class="feature">
                <i class="fas fa-undo"></i>
                <div class="feature-text">
                    <h3>Easy Returns</h3>
                    <p>Return within 14 days</p>
                </div>
            </div>
            <div class="feature">
                <i class="fas fa-lock"></i>
                <div class="feature-text">
                    <h3>Secure Payment</h3>
                    <p>Payment information is safe</p>
                </div>
            </div>
            <div class="feature">
                <i class="fas fa-comments"></i>
                <div class="feature-text">
                    <h3>Customer Care</h3>
                    <p>Outstanding support</p>
                </div>
            </div>
        </section>

        <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>CONTACT US</h3>
                <ul>
                    <li>Derasar Chowk, Jawahar Road,</li>
                    <li>Surendranagar</li>
                    <li><a href="tel:+7874709053">(+91) 7874709053</a></li>
                    <li><a href="mailto:ecomsupport@radhekrishna.co.in">ecomsupport@radhekrishna.co.in</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>CUSTOMER SERVICE</h3>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Size guide</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Order status</a></li>
                    <li><a href="#">Exchanges</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>ABOUT US</h3>
                <ul>
                    <li><a href="https://www.google.com/maps/place/RadheKrishna+Jewellers/@22.7269929,71.6334711,16.54z/data=!4m15!1m8!3m7!1s0x395941719c0b1a69:0x225c5bdfeee0ac6d!2sRadheKrishna+Jewellers!8m2!3d22.7262433!4d71.6327901!10e5!16s%2Fg%2F11hymg791s!3m5!1s0x395941719c0b1a69:0x225c5bdfeee0ac6d!8m2!3d22.7262433!4d71.6327901!16s%2Fg%2F11hymg791s?entry=ttu&g_ep=EgoyMDI1MDIxMS4wIKXMDSoASAFQAw%3D%3D">Our Shops</a></li>
                    <li><a href="tel:+7874709053">Contact</a></li>
                    <li><a href="#">Local Giving</a></li>
                    <li><a href="#">Press</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>CATEGORIES</h3>
                <ul>
                    <li><a href="#">Gold</a></li>
                    <li><a href="#">Earrings</a></li>
                    <li><a href="#">Rings</a></li>
                    <li><a href="#">Necklace</a></li>
                    <li><a href="#">Bracelets</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="copyright">
                Copyright © 2024. All Right Reserved
            </div>
            <div class="payment-methods">
                <img src="images/visa.png" alt="visa">
                <img src="images/hdfc.png" alt="HDFC">
                <img src="images/rupay.png" alt="rupay">
                <img src="images/icici.png" alt="icici">
            </div>
            <div class="social-links">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </footer>
    </main>

    <script>
        const images = document.querySelectorAll('.hero-images img');
        let currentIndex = 0;

        function switchImage() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
        }

        setInterval(switchImage, 5000);

        document.addEventListener('DOMContentLoaded', function () {
        const menuItems = document.querySelectorAll('.submenu > div');

        menuItems.forEach((item) => {
            const megaMenu = item.querySelector('.mega-menu');

            if (megaMenu) {
                item.addEventListener('mouseenter', function () {
                    const rect = item.getBoundingClientRect();
                    megaMenu.style.display = 'block';
                    megaMenu.style.top = rect.bottom + 'px'; // Position below the submenu
                    megaMenu.style.left = rect.left + 'px'; // Align with the submenu item
                });

                item.addEventListener('mouseleave', function () {
                    megaMenu.style.display = 'none';
                });
            }
        });
    });

        document.addEventListener('DOMContentLoaded', function () {
        const accountDropdown = document.querySelector('.account-dropdown');
        const dropdownMenu = accountDropdown.querySelector('.dropdown-menu');

        accountDropdown.addEventListener('mouseenter', function () {
            dropdownMenu.style.display = 'block';
        });

        accountDropdown.addEventListener('mouseleave', function () {
            dropdownMenu.style.display = 'none';
        });
    });

    // Mobile accordion functionality
    if (window.innerWidth <= 480) {
            const footerSections = document.querySelectorAll('.footer-section');
            
            footerSections.forEach(section => {
                const heading = section.querySelector('h3');
                
                heading.addEventListener('click', () => {
                    // Toggle current section without affecting others
                    section.classList.toggle('active');
                });
            });
        }
    </script>

     <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</body>
</html>