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

        .submenu > div {
            position: relative;
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
            display: flex;
            flex-wrap: wrap; /* Ensures content wraps flexibly */
            gap: 10px;
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

        /* Hamburger Menu Styles */
        .hamburger-menu {
            display: none;
            cursor: pointer;
            z-index: 9999;
        }

        .hamburger-icon {
            width: 30px;
            height: 20px;
            position: relative;
            margin: 0px;
            transform: rotate(0deg);
            transition: 0.5s ease-in-out;
            cursor: pointer;
        }

        .hamburger-icon span {
            display: block;
            position: absolute;
            height: 3px;
            width: 100%;
            background: var(--primary-color);
            border-radius: 9px;
            opacity: 1;
            left: 0;
            transform: rotate(0deg);
            transition: 0.25s ease-in-out;
        }

        .hamburger-icon span:nth-child(1) {
            top: 0px;
        }

        .hamburger-icon span:nth-child(2), .hamburger-icon span:nth-child(3) {
            top: 8px;
        }

        .hamburger-icon span:nth-child(4) {
            top: 16px;
        }

        .hamburger-icon.open span:nth-child(1) {
            top: 8px;
            width: 0%;
            left: 50%;
        }

        .hamburger-icon.open span:nth-child(2) {
            transform: rotate(45deg);
        }

        .hamburger-icon.open span:nth-child(3) {
            transform: rotate(-45deg);
        }

        .hamburger-icon.open span:nth-child(4) {
            top: 8px;
            width: 0%;
            left: 50%;
        }

        /* Mobile Menu */
        .mobile-menu {
            display: block;
            position: fixed;
            top: 0;
            left: -100%;
            width: 85%;
            max-width: 300px;
            height: 100%;
            background: white;
            z-index: 9998;
            overflow-y: auto;
            transition: left 0.3s ease-in-out;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }

        .mobile-menu.open {
            left: 0;
        }

        .mobile-menu-header {
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--secondary-color);
        }

        .mobile-logo {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--primary-color);
        }

        .mobile-menu-close {
            background: none;
            border: none;
            font-size: 24px;
            color: var(--primary-color);
            cursor: pointer;
            padding: 5px;
        }

        .mobile-menu-auth {
            padding: 15px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }

        .mobile-auth-link {
            color: var(--primary-color);
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
        }

        .auth-divider {
            margin: 0 10px;
            color: #999;
        }

        .mobile-menu-footer {
            margin-top: 20px;
            padding: 15px;
            border-top: 1px solid #eee;
        }

        .mobile-footer-link {
            display: flex;
            align-items: center;
            padding: 10px 0;
            color: var(--text-color);
            text-decoration: none;
            font-size: 16px;
        }

        .mobile-footer-link i {
            margin-right: 10px;
            color: var(--primary-color);
        }

        .mobile-menu-content {
            padding: 15px;
        }

        .mobile-menu-content h3 {
            color: var(--primary-color);
            font-size: 18px;
            margin-bottom: 15px;
        }

        .mobile-menu-nav ul {
            list-style: none;
            padding: 0;
        }

        .mobile-menu-nav li {
            margin-bottom: 15px;
        }

        .mobile-menu-nav a {
            color: var(--text-color);
            text-decoration: none;
            font-size: 16px;
            display: block;
            padding: 5px 0;
        }

        .mobile-menu-nav a:hover {
            color: var(--primary-color);
        }

        .mobile-menu-account {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .mobile-menu-account button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .mobile-menu-account button:hover {
            background: var(--primary-light);
        }

        /* Overlay for mobile menu */
        .mobile-menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 9997;
        }

        /* Mobile submenu styles */
        .mobile-submenu {
            display: none;
            margin-left: 15px;
            margin-top: 10px;
        }

        .mobile-submenu.open {
            display: block; /* Use !important to ensure it stays open */
        }

        .has-submenu:hover .mobile-submenu {
            display: block;
        }

        .has-submenu:hover .submenu-toggle i {
            transform: rotate(180deg);
        }

        /* Show arrow on hover */
        .has-submenu:hover .submenu-toggle {
            display: block; /* Show on hover */
        }

        /* Style for the arrow icon */
        .submenu-toggle i {
            transition: transform 0.3s ease;
        }

        /* Mobile Optimizations */
        @media (max-width: 768px) {
            .top-bar {
                justify-content: space-between;
                padding: 10px 15px;
            }

            .logo {
                order: 0;
                width: auto;
                text-align: center;
            }

            .hamburger-menu {
                display: block;
                order: -1;
            }

            .search-bar {
                order: 1;
                width: 100%;
                margin: 10px 0 0;
                max-width: none;
            }

            .account-dropdown {
                display: none;
            }

            .submenu {
                display: none;
            }

            .icons {
                gap: 10px;
            }

            .icons a span {
                display: none;
            }
        }

        /* Additional mobile adjustments */
        @media (max-width: 480px) {
            .search-bar input {
                font-size: 12px;
            }

            .icons a i {
                font-size: 18px;
            }
        }

        /* Submenu toggle for mobile */
        .mobile-menu-nav .has-submenu {
            position: relative;
        }

        .submenu-toggle {
            display: none; /* Change from opacity: 0 to display: none */
            background: none;
            border: none;
            color: var(--text-color);
            font-size: 16px;
            position: absolute;
            right: 0;
            top: 5px;
        }
        
        .has-submenu {
            position: relative;
        }
    </style>
</head>
<body>
    <header>
        <div class="top-bar">
            <!-- Hamburger Menu Button -->
            <div class="hamburger-menu" id="hamburger-button">
                <div class="hamburger-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            
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
                <!-- Account Icon (hidden on mobile) -->
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
                            </ul>
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
                            </ul>
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
                            </ul>
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay" id="mobile-overlay"></div>
    <div class="mobile-menu" id="mobile-menu">
        <div class="mobile-menu-header">
            <div class="mobile-logo">Radhe Krishna Jewellers</div>
            <button class="mobile-menu-close" id="mobile-close">&times;</button>
        </div>
        
        <div class="mobile-menu-auth">
            <a href="login.php" class="mobile-auth-link">Login</a>
            <span class="auth-divider">|</span>
            <a href="register.php" class="mobile-auth-link">Sign Up</a>
        </div>

        <div class="mobile-menu-content">
            <div class="mobile-menu-nav">
                <ul>
                    <li class="has-submenu">
                        <a href="#">All Jewellery</a>
                        <button class="submenu-toggle"><i class="fas fa-chevron-down"></i></button>
                        <div class="mobile-submenu">
                            <ul>
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
                                <li><a href="#">PENDANTS & EARRING SET</a></li>
                                <li><a href="#">GOLD COINS</a></li>
                                <li><a href="#">GIFT CARD</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Gold</a>
                        <button class="submenu-toggle"><i class="fas fa-chevron-down"></i></button>
                        <div class="mobile-submenu">
                            <ul>
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
                            </ul>
                        </div>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Earrings</a>
                        <button class="submenu-toggle"><i class="fas fa-chevron-down"></i></button>
                        <div class="mobile-submenu">
                            <ul>
                                <li><a href="#">All EARRINGS</a></li>
                                <li><a href="#">DROP & DANGLERS</a></li>
                                <li><a href="#">HOOP & HUGGIES</a></li>
                                <li><a href="#">JHUMKAS</a></li>
                                <li><a href="#">STUDS & TOPS</a></li>
                                <li><a href="#">EAR CUFFS</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Rings</a>
                        <button class="submenu-toggle"><i class="fas fa-chevron-down"></i></button>
                        <div class="mobile-submenu">
                            <ul>
                                <li><a href="#">CASUAL RINGS</a></li>
                                <li><a href="#">COUPLE RINGS</a></li>
                                <li><a href="#">ENGAGEMENT RINGS</a></li>
                                <li><a href="#">GOLD ENGAGEMENT RINGS</a></li>
                                <li><a href="#">MEN'S RINGS</a></li>
                                <li><a href="#">PLATINUM ENGAGEMENT RINGS</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="#">Bangles</a></li>
                    <li><a href="#">Digital Gold</a></li>
                    <li class="has-submenu">
                        <a href="#">More</a>
                        <button class="submenu-toggle"><i class="fas fa-chevron-down"></i></button>
                        <div class="mobile-submenu">
                            <ul>
                                <li><a href="#">EXCHANGE PROGRAM</a></li>
                                <li><a href="#">BESTSELLERS</a></li>
                                <li><a href="#">GOLD RATE</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mobile-menu-footer">
                <a href="orders.php" class="mobile-footer-link">
                    My Orders
                </a>
                <a href="faqs.php" class="mobile-footer-link">
                    FAQs
                </a>
            </div>
        </div>
    </div>

    <main>
        <!-- Your main content here -->
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const hamburgerButton = document.getElementById('hamburger-button');
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileOverlay = document.getElementById('mobile-overlay');
    const mobileClose = document.getElementById('mobile-close');

    // Function to close the mobile menu
    function closeMobileMenu() {
        hamburgerIcon.classList.remove('open');
        mobileMenu.classList.remove('open');
        mobileOverlay.style.display = 'none';
        document.body.style.overflow = '';
    }

    // Function to toggle the mobile menu
    function toggleMobileMenu() {
        hamburgerIcon.classList.toggle('open');
        mobileMenu.classList.toggle('open');
        if (mobileMenu.classList.contains('open')) {
            mobileOverlay.style.display = 'block';
            document.body.style.overflow = 'hidden';
        } else {
            closeMobileMenu();
        }
    }

    // Event listeners for mobile menu
    hamburgerButton.addEventListener('click', toggleMobileMenu);
    mobileClose.addEventListener('click', closeMobileMenu);
    mobileOverlay.addEventListener('click', closeMobileMenu);

    // Handle click events for mobile submenus
    const submenuItems = document.querySelectorAll('.has-submenu');

    submenuItems.forEach(item => {
        const submenu = item.querySelector('.mobile-submenu');
        const toggle = item.querySelector('.submenu-toggle i');

        item.addEventListener('click', function (e) {
            e.preventDefault(); // Prevent default link behavior

            // Close all other submenus
            submenuItems.forEach(otherItem => {
                if (otherItem !== item) {
                    const otherSubmenu = otherItem.querySelector('.mobile-submenu');
                    const otherToggle = otherItem.querySelector('.submenu-toggle i');
                    if (otherSubmenu) {
                        otherSubmenu.classList.remove('open');
                    }
                    if (otherToggle) {
                        otherToggle.classList.remove('fa-chevron-up');
                        otherToggle.classList.add('fa-chevron-down');
                    }
                }
            });

            // Toggle the current submenu
            if (submenu) {
                submenu.classList.toggle('open');
                if (toggle) {
                    if (submenu.classList.contains('open')) {
                        toggle.classList.remove('fa-chevron-down');
                        toggle.classList.add('fa-chevron-up');
                    } else {
                        toggle.classList.remove('fa-chevron-up');
                        toggle.classList.add('fa-chevron-down');
                    }
                }
            }
        });
    });

    // Close submenu when clicking outside
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.has-submenu')) {
            submenuItems.forEach(item => {
                const submenu = item.querySelector('.mobile-submenu');
                const toggle = item.querySelector('.submenu-toggle i');
                if (submenu) {
                    submenu.classList.remove('open');
                }
                if (toggle) {
                    toggle.classList.remove('fa-chevron-up');
                    toggle.classList.add('fa-chevron-down');
                }
            });
        }
    });
});

// Add this JavaScript at the end of your existing script section
document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('.submenu > div');

    menuItems.forEach((item) => {
        const megaMenu = item.querySelector('.mega-menu');

        if (megaMenu) {
            item.addEventListener('mouseenter', function () {
                megaMenu.style.display = 'block';
            });

            item.addEventListener('mouseleave', function () {
                megaMenu.style.display = 'none';
            });
        }
    });
});
    </script>
</body>
</html>