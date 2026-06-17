<?php
// Start session only if headers haven't been sent
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    session_start();
}

// =============================================
// BASE URL DETECTION - Works for both Live & Local
// =============================================

// Function to get base URL dynamically
function getBaseUrl() {
    // Check if running on localhost
    $isLocalhost = (in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1']) || 
                    strpos($_SERVER['HTTP_HOST'], '.test') !== false ||
                    strpos($_SERVER['HTTP_HOST'], ':8888') !== false);
    
    // Get protocol (HTTP or HTTPS)
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    
    // Get host
    $host = $_SERVER['HTTP_HOST'];
    
    if ($isLocalhost) {
        // For localhost, get the project folder name from the current script
        $scriptName = $_SERVER['SCRIPT_NAME'];
        
        // Extract the project root folder (e.g., /vintage-flow-hdyro-system)
        if (preg_match('/(\/[^\/]+)\//', $scriptName, $matches)) {
            $basePath = $matches[1];
        } else {
            $basePath = '';
        }
        
        $baseUrl = $protocol . '://' . $host . rtrim($basePath, '/');
    } else {
        // For live server
        $baseUrl = $protocol . '://' . $host;
    }
    
    return rtrim($baseUrl, '/');
}

// Define constants
define('BASE_URL', getBaseUrl());
define('ASSETS_URL', BASE_URL . '/assets');
define('IS_LOCALHOST', (in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1']) || 
                        strpos($_SERVER['HTTP_HOST'], '.test') !== false ||
                        strpos($_SERVER['HTTP_HOST'], ':8888') !== false));

// Determine current page for active menu highlighting
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$page = $current_page; // For backward compatibility

// For subdirectory pages like products/surge-vessel.php
if (strpos($_SERVER['PHP_SELF'], '/products/') !== false) {
    $page = 'product';
}

// Set default page title if not set
if (!isset($page_title)) {
    $page_title = 'Vintage Flow Hydro System - Water Treatment Solutions';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Vintage Flow Hydro System">
    
    <!-- Page Title - Dynamic -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Vintage Flow Hydro System - Leading manufacturer of water treatment plants, RO systems, surge vessels, and industrial filtration solutions.">
    <meta name="keywords" content="Water Treatment, RO Plant, Surge Vessel, Pressure Vessel, Effluent Treatment, Sewage Treatment">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL - Important for SEO -->
    <link rel="canonical" href="<?php echo BASE_URL . $_SERVER['REQUEST_URI']; ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo ASSETS_URL; ?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ASSETS_URL; ?>/images/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo ASSETS_URL; ?>/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?php echo ASSETS_URL; ?>/images/favicon.ico">
    
    <!-- Theme Color -->
    <meta name="theme-color" content="#1093ff">
    <meta name="msapplication-TileColor" content="#1093ff">

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="Vintage Flow Hydro System - Leading manufacturer of water treatment plants, RO systems, surge vessels, and industrial filtration solutions.">
    <meta property="og:image" content="<?php echo ASSETS_URL; ?>/images/og-image.jpg">
    <meta property="og:url" content="<?php echo BASE_URL . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vintage Flow Hydro System">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="Vintage Flow Hydro System - Leading manufacturer of water treatment plants, RO systems, surge vessels, and industrial filtration solutions.">
    <meta name="twitter:image" content="<?php echo ASSETS_URL; ?>/images/twitter-image.jpg">

    <!-- Icon fonts -->
    <link href="<?php echo ASSETS_URL; ?>/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo ASSETS_URL; ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="<?php echo ASSETS_URL; ?>/css/animate.css" rel="stylesheet">
    <link href="<?php echo ASSETS_URL; ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo ASSETS_URL; ?>/css/owl.theme.css" rel="stylesheet">
    <link href="<?php echo ASSETS_URL; ?>/css/slick.css" rel="stylesheet">
    <link href="<?php echo ASSETS_URL; ?>/css/slick-theme.css" rel="stylesheet">
    <link href="<?php echo ASSETS_URL; ?>/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php echo ASSETS_URL; ?>/css/jquery.fancybox.css" rel="stylesheet">
    <link href="<?php echo ASSETS_URL; ?>/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo ASSETS_URL; ?>/css/style.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
        }

        /* Header Styles */
        .site-header {
            position: relative;
            width: 100%;
            z-index: 1000;
            background: #fff;
        }

        .site-header #navbar ul li a.active {
            color: #1093ff !important;
        }

        /* Navigation Menu Styles */
        .nav.navbar-nav > li > a {
            font-size: 15px !important;
            font-weight: 700 !important;
        }

        .nav.navbar-nav .sub-menu li a {
            font-size: 15px !important;
        }

        .request-quote a p {
            font-size: 16px !important;
        }

        .site-header #navbar ul li a.active {
            color: #5aa1cd !important;
        }

        .site-header #navbar ul li a.active::before {
            width: 100%;
        }

        /* Topbar Styles */
        .topbar {
            background: #1a1a1a;
            color: #fff;
            padding: 10px 0;
            font-size: 14px;
        }

        .topbar .office-hour ul,
        .topbar .contact-info ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .topbar .office-hour ul li,
        .topbar .contact-info ul li {
            display: inline-block;
            margin-right: 20px;
        }

        .topbar .office-hour ul li i,
        .topbar .contact-info ul li i {
            margin-right: 8px;
            color: #1093ff;
        }

        /* Contact Icons */
        .whatsapp-icon:hover {
            background: #128C7E;
            transform: scale(1.05);
        }

        .phone-icon {
            background: #1093ff;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .phone-icon i {
            font-size: 28px;
            color: #fff;
        }

        .phone-icon:hover {
            transform: scale(1.1);
            background: #0d7ae0;
        }

        /* Sticky Contact Bar for Mobile */
        .sticky-contact-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            display: none;
            justify-content: center;
            gap: 20px;
            padding: 12px 20px;
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 -2px 15px rgba(0, 0, 0, 0.1);
            z-index: 9999;
            border-top: 1px solid #eee;
            margin: 0 10px 10px 10px;
            border-radius: 60px;
        }

        .contact-bar-item {
            flex: 1;
            max-width: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            margin: 0 5px;
        }

        .contact-bar-item i {
            font-size: 20px;
        }

        .contact-bar-item.phone {
            background: #1093ff;
            color: #fff;
        }

        .contact-bar-item.phone:hover {
            background: #0d7ae0;
            color: #fff;
        }

        .contact-bar-item.whatsapp {
            background: #25D366;
            color: #fff;
        }

        .contact-bar-item.whatsapp:hover {
            background: #128C7E;
            color: #fff;
        }

        /* WhatsApp Float - Right Side */
        .whatsapp-float-right {
            position: fixed;
            right: 20px;
            bottom: 30px;
            width: 55px;
            height: 55px;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .whatsapp-float-right:hover {
            background-color: #128C7E;
            transform: scale(1.1);
            color: #fff;
        }

        /* Floating Contact Icons - Left Side */
        .floating-contact-icons {
            position: fixed;
            left: 20px;
            bottom: 30px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            z-index: 1000;
        }

        .floating-contact-icons a {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: #1093ff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .floating-contact-icons a i {
            font-size: 22px;
        }

        .floating-contact-icons a:hover {
            transform: scale(1.05);
            background: #0d7ae0;
            color: #fff;
        }

        /* Navigation Responsive */
        @media (max-width: 768px) {
            .whatsapp-float-right {
                display: none;
            }
        }

        @media (min-width: 769px) {
            .sticky-contact-bar {
                display: none;
            }
            .floating-contact-icons {
                display: flex;
            }
        }

        @media (max-width: 768px) {
            .sticky-contact-bar {
                display: flex;
            }
            .floating-contact-icons {
                display: none;
            }
        }

        /* Responsive Styles */
        @media (min-width: 769px) and (max-width: 1024px) {
            .floating-contact-icons {
                left: 15px;
                bottom: 25px;
                gap: 12px;
            }
            
            .floating-contact-icons a {
                padding: 8px 15px;
                font-size: 13px;
            }
            
            .floating-contact-icons a i {
                font-size: 20px;
                color: #fff;
            }
            
            .phone-icon {
                width: 50px;
                height: 50px;
                color: #fff;
            }
            
            .phone-icon i {
                font-size: 24px;
            }
            
            .whatsapp-float-right {
                width: 50px;
                height: 50px;
                font-size: 24px;
                right: 15px;
                bottom: 25px;
            }
        }

        @media (min-width: 481px) and (max-width: 768px) {
            .sticky-contact-bar {
                gap: 15px;
                padding: 10px 15px;
                margin: 0 8px 10px 8px;
            }
            
            .contact-bar-item {
                max-width: 180px;
                padding: 8px 15px;
                font-size: 14px;
                margin: 0 4px;
            }
            
            .contact-bar-item i {
                font-size: 18px;
            }
        }

        @media (min-width: 320px) and (max-width: 480px) {
            .sticky-contact-bar {
                gap: 10px;
                padding: 8px 12px;
                margin: 0 5px 10px 5px;
            }
            
            .contact-bar-item {
                max-width: 150px;
                padding: 8px 12px;
                font-size: 12px;
                margin: 0 3px;
            }
            
            .contact-bar-item i {
                font-size: 16px;
            }
            
            .contact-bar-item span {
                font-size: 11px;
            }
        }

        @media (max-width: 767px) {
            .floating-contact-icons {
                display: flex !important;
                flex-direction: row;
                left: 12px;
                bottom: 20px;
                gap: 10px;
            }
            
            .sticky-contact-bar {
                display: none !important;
            }
            
            .whatsapp-float-right {
                display: flex !important;
                right: 12px;
                bottom: 20px;
                width: 45px;
                height: 45px;
                font-size: 22px;
            }
            
            .phone-icon {
                width: 45px;
                height: 45px;
            }
            
            .phone-icon i {
                font-size: 22px;
            }
            
            .floating-contact-icons a span {
                display: none;
            }
            
            .floating-contact-icons a {
                padding: 0;
                width: 45px;
                height: 45px;
                border-radius: 50%;
                justify-content: center;
                margin: 0;
            }
            
            .floating-contact-icons a i {
                font-size: 22px;
                margin: 0;
                color: #fff;
            }
            
            .floating-contact-icons {
                gap: 8px;
            }
        }

        @media (max-width: 767px) and (orientation: landscape) {
            .floating-contact-icons {
                left: 15px;
                bottom: 10px;
                gap: 8px;
            }
            
            .whatsapp-float-right {
                right: 15px;
                bottom: 10px;
            }
            
            .phone-icon,
            .whatsapp-float-right,
            .floating-contact-icons a {
                width: 40px;
                height: 40px;
            }
            
            .phone-icon i,
            .whatsapp-float-right i,
            .floating-contact-icons a i {
                font-size: 20px;
            }
        }

        @supports (padding: max(0px)) {
            @media (max-width: 767px) {
                .floating-contact-icons {
                    left: max(12px, env(safe-area-inset-left));
                    bottom: max(20px, env(safe-area-inset-bottom));
                }
                
                .whatsapp-float-right {
                    right: max(12px, env(safe-area-inset-right));
                    bottom: max(20px, env(safe-area-inset-bottom));
                }
            }
        }

        /* Logo Styles */
        .navbar-brand img {
            max-height: 60px;
            width: auto;
        }

        @media (max-width: 991px) {
            .navbar-brand img {
                max-height: 50px;
            }
        }

        /* Dropdown Menu */
        .sub-menu {
            min-width: 220px;
            background: #fff;
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .menu-item-has-children {
            position: relative;
        }

        @media (min-width: 992px) {
            .sub-menu .sub-menu {
                left: 100%;
                top: 0;
            }
        }

        /* Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .preloader-inner img {
            max-width: 200px;
        }

        /* Responsive Topbar */
        @media (max-width: 768px) {
            .topbar .col-sm-5,
            .topbar .col-sm-7 {
                text-align: center;
                margin-bottom: 5px;
            }
            
            .topbar .office-hour ul li,
            .topbar .contact-info ul li {
                font-size: 11px;
                margin-right: 10px;
            }
            .navigation-holder {
    position: fixed;
    top: 0;
    right: 0;
    width: 280px;
    height: 100vh;
    background: #fff;
    z-index: 99999;
    transform: translateX(100%);
    transition: all 0.3s ease;
    overflow-y: auto;
}

/* When menu is open */
.navigation-holder.in {
    transform: translateX(0);
}

/* Close button fix */
.close-navbar {
    position: absolute;
    top: 15px;
    right: 15px;
    z-index: 100000;
    background: #5aa1cd;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

        }
        /* Fix mobile navbar overlay + close button visibility */

/* Prevent clipping */
.navbar-collapse {
    overflow: visible !important;
}

/* Profile Button Style - Simple Navbar Addition */
       /* ============================================= */
/* YOUR ORIGINAL CSS - NOT CHANGED */
/* ============================================= */

   
.btn-primary {
    margin-top: 25px;
    margin-left: 25px;
    color: #eee;
}

/* Tablet (768px - 1024px) */
@media screen and (max-width: 1024px) {
    .btn-primary {
        margin-top: 20px;
    }
}

/* Mobile Landscape (480px - 767px) */
@media screen and (max-width: 767px) {
    .btn-primary {
        margin-top: 18px;
    }
}

/* Mobile Portrait (320px - 479px) */
@media screen and (max-width: 479px) {
    .btn-primary {
        margin-top: 15px;
    }
}

/* Small Mobile (below 320px) */
@media screen and (max-width: 320px) {
    .btn-primary {
        margin-top: 12px;
    }
}
/* Laptop (1024px - 1199px) */
@media screen and (min-width: 1024px) and (max-width: 1199px) {
    .btn-primary {
        margin-top: 0px;
        margin-left: 20px;
    }
}



    </style>

    <!-- HTML5 shim and Respond.js for IE8 support -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <img src="<?php echo ASSETS_URL; ?>/images/preloader.gif" alt="Loading...">
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <header id="header" class="site-header header-style-1">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-5">
                            <div class="office-hour">
                                <ul>
                                    <li>
                                        <i class="fa fa-clock-o"></i> Monday - Saturday : 9:00 AM to 7:00 PM
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-sm-7">
                            <div class="contact-info">
                                <ul>
                                    <li><i class="fa fa-phone"></i> +91 8605060625</li>
                                    <li><i class="fa fa-envelope"></i> vintagehydrosystem@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo BASE_URL; ?>/">
                            <img src="<?php echo ASSETS_URL; ?>/images/logo-new.png" alt="Vintage Flow Hydro System Logo">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo BASE_URL; ?>/" class="<?php echo ($page == 'home' || $current_page == 'index') ? 'active' : ''; ?>">Home</a>
                            </li>
                            <li><a href="<?php echo BASE_URL; ?>/about.php" class="<?php echo ($page == 'about') ? 'active' : ''; ?>">About</a></li>

                            <li class="menu-item-has-children">
                                <a href="#" class="<?php echo ($page == 'product') ? 'active' : ''; ?>">Product</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Manufacturing</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo BASE_URL; ?>/products/surge-vessel.php">Surge Vessel</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/products/asme-vessels.php">ASME Vessels U & R Stamp</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/products/pressure-vessel.php">Pressure Vessel</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/products/electrical-control-panels.php">Electrical Control Panels</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/products/ultra-filtration-plant.php">Ultra Filtration Plant</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/products/reverse-osmosis-plant.php">Reverse Osmosis Plant</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/products/effluent-treatment-plant.php">Effluent Treatment Plant</a></li>



                                        </ul>
                                    </li>
                            
                                    <li class="menu-item-has-children">
                                        <a href="#">Water Treatment Plant</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo BASE_URL; ?>/products/clarifier-system.php">Clarifier System</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/products/water-filtration-plant.php">Water Filtration Plant</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/products/water-softener-plant.php">Water Softener Plant</a></li>
                                            <!-- <li><a href="<?php echo BASE_URL; ?>/products/ultra-filtration-plant.php">Ultra Filtration Plant</a></li> -->
                                            <!-- <li><a href="<?php echo BASE_URL; ?>/products/reverse-osmosis-plant.php">Reverse Osmosis Plant</a></li> -->
                                            <li><a href="<?php echo BASE_URL; ?>/products/seawater-desalination-plant.php">Seawater Desalination Plant</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/products/demineralization-plant.php">Demineralization Plant</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Waste Water Treatment</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo BASE_URL; ?>/products/sewage-treatment-plant.php">Sewage Treatment Plant</a></li>
                                            <!-- <li><a href="<?php echo BASE_URL; ?>/products/effluent-treatment-plant.php">Effluent Treatment Plant</a></li> -->
                                            <li><a href="<?php echo BASE_URL; ?>/products/condensate-polishing-unit.php">Condensate Polishing Unit</a></li>
                                            <li><a href="<?php echo BASE_URL; ?>/products/zero-liquid-discharge-system.php">Zero Liquid Discharge System</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo BASE_URL; ?>/services.php" class="<?php echo ($page == 'services') ? 'active' : ''; ?>">Services</a>
                            </li>

                            <li>
                                <a href="<?php echo BASE_URL; ?>/gallery.php" class="<?php echo ($page == 'gallery') ? 'active' : ''; ?>">Gallery</a>
                            </li>

                            <li><a href="<?php echo BASE_URL; ?>/contact.php" class="<?php echo ($page == 'contact') ? 'active' : ''; ?>">Contact</a></li>
                             <li>
                                 <li><a href="<?php echo BASE_URL; ?>/client.php" class="<?php echo ($page == 'client') ? 'active' : ''; ?>">Client</a></li>
                             <li>
                                



                            

                         <li>
                                 <button class="btn btn-primary"  type="button">
                                     <a href="  "style="color: #fff; ">
                                    Profile</a>
                                </button>
    <!-- <a href="  " 
       target="_blank" 
       class="profile-nav-btn">
        <i class="fa fa-user-circle-o"></i> Profile
    </a> -->
</li>

                          


                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Floating Contact Icons - Left Side (Desktop & Tablet) -->
       
       

        <!-- Sticky Contact Bar for Mobile (Hidden by default) -->
        
        
        <script>
            // JavaScript to handle dynamic base URL if needed
            window.baseUrl = '<?php echo BASE_URL; ?>';
            window.isLocalhost = <?php echo IS_LOCALHOST ? 'true' : 'false'; ?>;
            
            // Debug info (remove in production)
            console.log('BASE_URL:', window.baseUrl);
            console.log('Is Localhost:', window.isLocalhost);
            
            // Hide preloader when page loads
            window.addEventListener('load', function() {
                const preloader = document.querySelector('.preloader');
                if (preloader) {
                    setTimeout(function() {
                        preloader.style.display = 'none';
                    }, 500);
                }
            });
            
            // Handle active menu highlighting for dropdown items
            document.addEventListener('DOMContentLoaded', function() {
                var currentPath = window.location.pathname;
                var currentPage = currentPath.split('/').pop();
                var menuLinks = document.querySelectorAll('.nav.navbar-nav a');
                
                menuLinks.forEach(function(link) {
                    var href = link.getAttribute('href');
                    if (href && href !== '#' && href !== '/') {
                        var hrefPage = href.split('/').pop();
                        if (currentPage === hrefPage) {
                            link.classList.add('active');
                        }
                    }
                });
                
                // Handle Home page active state
                if (currentPath === window.baseUrl + '/' || currentPath === window.baseUrl + '/index.php') {
                    var homeLink = document.querySelector('.nav.navbar-nav a[href="' + window.baseUrl + '/"]');
                    if (homeLink) {
                        homeLink.classList.add('active');
                    }
                }
            });
            
            // Mobile menu toggle
            const openBtn = document.querySelector('.open-btn');
            const closeBtn = document.querySelector('.close-navbar');
            const navbar = document.getElementById('navbar');
            
            if (openBtn) {
                openBtn.addEventListener('click', function() {
                    navbar.classList.add('in');
                });
            }
            
            if (closeBtn) {
                closeBtn.addEventListener('click', function() {
                    navbar.classList.remove('in');
                });
            }


            function showPDF() {
    var pdfViewer = document.getElementById('pdfViewer');
    if (pdfViewer.style.display === 'none') {
        pdfViewer.style.display = 'block';
    } else {
        pdfViewer.style.display = 'none';
    }
}
        </script>