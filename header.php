<?php

?>
<!DOCTYPE php>
<php lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">
    
    <!-- Page Title - Dynamic -->
    <title><?php echo isset($page_title) ? $page_title : 'Vintage Flow Hydro System - Water Treatment Solutions'; ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Vintage Flow Hydro System - Leading manufacturer of water treatment plants, RO systems, surge vessels, and industrial filtration solutions.">
    <meta name="keywords" content="Water Treatment, RO Plant, Surge Vessel, Pressure Vessel, Effluent Treatment, Sewage Treatment">

    <!-- Icon fonts -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="../assets/css/animate.css" rel="stylesheet">
    <link href="../assets/css/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/owl.theme.css" rel="stylesheet">
    <link href="../assets/css/slick.css" rel="stylesheet">
    <link href="../assets/css/slick-theme.css" rel="stylesheet">
    <link href="../assets/css/owl.transitions.css" rel="stylesheet">
    <link href="../assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="../assets/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Header Styles -->
    <style>
        

/* Increase font size for all navbar menu items */
.nav.navbar-nav > li > a {
    font-size: 18px !important;
    font-weight: 700 !important;
}

/* Dropdown menu items font size */
.nav.navbar-nav .sub-menu li a {
    font-size: 15px !important;
}

/* Request quote button */
.request-quote a p {
    font-size: 16px !important;
}

.site-header #navbar ul li a.active {
    color: #ff5e14 !important;
}

.site-header #navbar ul li a.active::before {
    width: 100%;
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
    box-shadow: 0 -2px 15px rgba(0, 0, 0, 0.1);
    z-index: 9999;
    border-top: 1px solid #eee;
    margin: 0 10px 10px 10px;
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
    background: #ff5e14;
    color: #fff;
}

.contact-bar-item.phone:hover {
    background: #e04e0e;
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

/* WhatsApp Icon - Right Side */
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

.whatsapp-float-left:hover,
.whatsapp-float-right:hover {
    background-color: #128C7E;
    transform: scale(1.1);
}

/* Hide on mobile if needed */
@media (max-width: 768px) {
    .whatsapp-float-left,
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

/* ========== RESPONSIVE CSS ========== */

/* Tablet Devices (769px - 1024px) */
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

/* Large Mobile Devices (481px - 768px) */
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

/* Small Mobile Devices (320px - 480px) */
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

/* Extra Small Devices (Below 320px) */
@media (max-width: 319px) {
    .sticky-contact-bar {
        gap: 8px;
        padding: 6px 10px;
        margin: 0 3px 10px 3px;
    }
    
    .contact-bar-item {
        max-width: 130px;
        padding: 6px 10px;
        font-size: 10px;
        margin: 0 2px;
    }
    
    .contact-bar-item i {
        font-size: 14px;
    }
    
    .contact-bar-item span {
        font-size: 9px;
    }
}

/* Landscape Mode for Mobile */
@media (max-width: 768px) and (orientation: landscape) {
    .sticky-contact-bar {
        padding: 6px 15px;
        margin: 0 10px 8px 10px;
    }
    
    .contact-bar-item {
        padding: 6px 15px;
        font-size: 13px;
    }
    
    .contact-bar-item i {
        font-size: 16px;
    }
}

/* High Resolution Screens (Above 1440px) */
@media (min-width: 1440px) {
    .floating-contact-icons {
        left: 30px;
        bottom: 40px;
        gap: 20px;
    }
    
    .floating-contact-icons a {
        padding: 12px 22px;
        font-size: 16px;
    }
    
    .floating-contact-icons a i {
        font-size: 26px;
    }
    
    .phone-icon {
        width: 65px;
        height: 65px;
        color: #fff;
    }
    
    .phone-icon i {
        font-size: 32px;
    }
    
    .whatsapp-float-right {
        width: 65px;
        height: 65px;
        font-size: 32px;
        right: 30px;
        bottom: 40px;
    }
}

/* 4K Screens (Above 2560px) */
@media (min-width: 2560px) {
    .floating-contact-icons {
        left: 50px;
        bottom: 60px;
        gap: 25px;
    }
    
    .floating-contact-icons a {
        padding: 15px 28px;
        font-size: 18px;
    }
    
    .floating-contact-icons a i {
        font-size: 32px;
    }
    
    .phone-icon {
        width: 80px;
        height: 80px;
        color: #fff;
    }
    
    .phone-icon i {
        font-size: 38px;
    }
    
    .whatsapp-float-right {
        width: 80px;
        height: 80px;
        font-size: 38px;
        right: 50px;
        bottom: 60px;
    }
}

/* Reduced Motion for Users Who Prefer Less Animation */
@media (prefers-reduced-motion: reduce) {
    .floating-contact-icons a,
    .phone-icon,
    .whatsapp-float-right,
    .contact-bar-item {
        transition: none;
    }
    
    .floating-contact-icons a:hover,
    .phone-icon:hover,
    .whatsapp-float-right:hover,
    .contact-bar-item:hover {
        transform: none;
    }
}

/* Print Styles - Hide Contact Elements When Printing */
@media print {
    .floating-contact-icons,
    .sticky-contact-bar,
    .whatsapp-float-right {
        display: none !important;
    }
}    

/* Tablet (768px to 1024px) - Show both floating icons */
@media (min-width: 768px) and (max-width: 1024px) {
    .floating-contact-icons {
        display: flex;
    }
    
    .whatsapp-float-right {
        display: flex;
    }
    
    .sticky-contact-bar {
        display: none;
    }
    
    .floating-contact-icons a {
        padding: 8px 15px;
        font-size: 13px;
    }
    
    .phone-icon,
    .whatsapp-float-right {
        width: 48px;
        height: 48px;
        font-size: 24px;
    }
}

/* Mobile Portrait Mode */
@media (max-width: 767px) {
    .floating-contact-icons {
        display: flex !important;
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

/* Mobile Landscape Mode */
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

/* Mobile with notch/hole-punch display */
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

/* ========== FIXED NAVBAR ========== */

/* Keep header fixed at top while scrolling */
.site-header {
    position: fixed !important;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
    background: #fff;
    box-shadow: 0 2px 15px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

/* Keep navigation background */
.navigation {
    background: #fff;
}

/* Dropdown menu above all content */
.navbar-nav .sub-menu {
    z-index: 10000;
    position: absolute;
    background: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Prevent page content from hiding behind fixed header */
body {
    padding-top: 140px;
}

/* Tablet */
@media (max-width: 991px) {
    body {
        padding-top: 120px;
    }
}

/* Mobile */
@media (max-width: 767px) {
    body {
        padding-top: 10px;
    }
}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
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
                <img src="../assets/images/preloader.gif" alt>
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
                                        <i class="fa fa-clock-o"></i> Monday - Friday : 8:00 AM to 7:00 PM
                                    </li>
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
                        <a class="navbar-brand" href="/vintage-flow-hdyro-system/index-2.php"><img src="/vintage-flow-hdyro-system/assets/images/logo.png" alt="Vintage Flow Hydro System Logo"></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="/vintage-flow-hdyro-system/index-2.php" class="<?php if ($page == 'home') { echo 'active'; } ?>">Home</a>
                            </li>
                            <li><a href="/vintage-flow-hdyro-system/about.php" class="<?php if ($page == 'about') { echo 'active'; } ?>">About</a></li>

                            <li class="menu-item-has-children">
                                <a href="#" class="<?php if ($page == 'product') { echo 'active'; } ?>">Product</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">Manufacturing</a>
                                        <ul class="sub-menu">
                                            <li><a href="/vintage-flow-hdyro-system/Products/surge-vessel.php">Surge Vessel</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/asme-vessels.php">ASME Vessels U & R Stamp</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/pressure-vessel.php">Pressure Vessel</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/electrical-control-panels.php">Electrical Control Panels</a></li>
                                        </ul>
                                    </li>
                            
                                    <li class="menu-item-has-children">
                                        <a href="#">Water Treatment Plant</a>
                                        <ul class="sub-menu">
                                            <li><a href="/vintage-flow-hdyro-system/Products/clarifier-system.php">Clarifier System</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/water-filtration-plant.php">Water Filtration Plant</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/water-softener-plant.php">Water Softener Plant</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/ultra-filtration-plant.php">Ultra Filtration Plant</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/reverse-osmosis-plant.php">Reverse Osmosis Plant</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/seawater-desalination-plant.php">Seawater Desalination Plant</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/demineralization-plant.php">Demineralization Plant</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children">
                                        <a href="#">Waste Water Treatment</a>
                                        <ul class="sub-menu">
                                            <li><a href="/vintage-flow-hdyro-system/Products/sewage-treatment-plant.php">Sewage Treatment Plant</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/effluent-treatment-plant.php">Effluent Treatment Plant</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/condensate-polishing-unit.php">Condensate Polishing Unit</a></li>
                                            <li><a href="/vintage-flow-hdyro-system/Products/zero-liquid-discharge-system.php">Zero Liquid Discharge System</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="/vintage-flow-hdyro-system/services.php" class="<?php if ($page == 'services') { echo 'active'; } ?>">Services</a>
                            </li>

                            <li>
                                <a href="/vintage-flow-hdyro-system/gallery.php" class="<?php if ($page == 'gallery') { echo 'active'; } ?>">Gallery</a>
                            </li>

                            <li><a href="/vintage-flow-hdyro-system/contact.php" class="<?php if ($page == 'contact') { echo 'active'; } ?>">Contact</a></li>
                        </ul>
                    </div>
                    
                </div>
                <!-- message icon -->
                <?php include 'msg.php' ?>
                <!-- message icon -->
            </nav>
        </header>       