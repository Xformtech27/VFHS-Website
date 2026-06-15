<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Vintage Flow Hydro System">
    <meta name="description" content="Image Gallery - ASME Certified Pressure Vessels and Industrial Equipment">
    <meta name="keywords" content="gallery, pressure vessels, ASME, industrial equipment">

    <!-- Page Title -->
    <title>Image Gallery | Vintage Flow Hydro System</title>

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <style>
        /* Gallery Page Custom Styles */
        .gallery-hero {
            background: linear-gradient(135deg, #002c57 0%, #004a8f 100%);
            padding: 80px 0;
            color: white;
            text-align: center;
        }
        
        .gallery-hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 15px;
        }
        
        .gallery-hero p {
            font-size: 18px;
            opacity: 0.9;
        }
        
        /* Clients Main Section Styles */
        .clients-section {
            padding: 60px 0;
            background: #f8f9fa;
        }

        /* Client Count Badge */
        .client-count {
            text-align: center;
            margin-bottom: 40px;
            font-size: 14px;
            color: #666;
        }

        .client-count span {
            background: #5aa1cd;
            color: white;
            padding: 6px 20px;
            border-radius: 30px;
            font-weight: 600;
        }

        /* Clients Grid - 4 boxes per row */
        .clients-wrapper {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            padding: 20px 0 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Client Card - Rectangle Format */
        .client-card {
            position: relative;
            width: 100%;
            height: 180px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .client-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
        }

        .client-logo {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            background: white;
        }

        .client-logo img {
            max-width: 70%;
            max-height: 70%;
            object-fit: contain;
        }

        .client-overlay {
            position: absolute;
            bottom: -100%;
            left: 0;
            right: 0;
            background: linear-gradient(135deg, #1093ff, #0d7ae0);
            color: white;
            text-align: center;
            padding: 15px 10px;
            transition: all 0.4s ease;
            border-radius: 0 0 15px 15px;
        }

        .client-card:hover .client-overlay {
            bottom: 0;
        }

        .client-overlay h4 {
            margin: 0;
            font-size: 14px;
            font-weight: 700;
        }

        .client-overlay p {
            margin: 5px 0 0;
            font-size: 11px;
            opacity: 0.9;
        }

        /* Client Detail Modal */
        .client-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.9);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }

        .client-modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            border-radius: 20px;
            max-width: 500px;
            width: 90%;
            padding: 30px;
            text-align: center;
            position: relative;
            animation: modalFadeIn 0.3s ease;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .close-modal {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 30px;
            cursor: pointer;
            color: #999;
            transition: 0.3s;
        }

        .close-modal:hover {
            color: #1093ff;
        }

        .modal-logo {
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            background: #f0f4f8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-logo img {
            max-width: 70%;
            max-height: 70%;
        }

        .modal-content h3 {
            font-size: 24px;
            color: #002c57;
            margin-bottom: 10px;
        }

        .modal-content .since {
            color: #5aa1cd;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .modal-content p {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .modal-content .project-count {
            background: #f0f4f8;
            padding: 10px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .no-results {
            text-align: center;
            padding: 60px;
            background: #f9f9f9;
            border-radius: 20px;
            margin: 40px 0;
        }

        .no-results i {
            font-size: 64px;
            color: #ccc;
            margin-bottom: 20px;
        }

        .no-results h3 {
            font-size: 24px;
            color: #666;
        }

        /* Happy Client Section - Rectangle Cards 4 per row */
        .client-happy-section {
            padding: 60px 0;
            background: #ffffff;
        }

        .client-happy-section .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .client-happy-section .section-header h6 {
            color: #5aa1cd;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .client-happy-section .section-header h1 {
            font-size: 36px;
            font-weight: 700;
            color: #002c57;
            margin-bottom: 0;
        }

        /* Happy Client Grid */
        .happy-clients-wrapper {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Happy Client Card - Rectangle Format with Hover Overlay */
        .happy-client-card {
            position: relative;
            width: 100%;
            height: 180px;
            background: white;
            border: 2px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            overflow: hidden;
            padding: 20px;
            cursor: pointer;
        }

        .happy-client-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            border-color: #5aa1cd;
        }

        .happy-client-card img {
            max-width: 85%;
            max-height: 85%;
            width: auto;
            height: auto;
            object-fit: contain;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        /* Hover Overlay for Happy Client Cards */
        .happy-client-overlay {
            position: absolute;
            bottom: -100%;
            left: 0;
            right: 0;
            background: linear-gradient(135deg, #1093ff, #0d7ae0);
            color: white;
            text-align: center;
            padding: 15px 10px;
            transition: all 0.4s ease;
            border-radius: 0 0 10px 10px;
        }

        .happy-client-card:hover .happy-client-overlay {
            bottom: 0;
        }

        .happy-client-overlay h4 {
            margin: 0;
            font-size: 14px;
            font-weight: 700;
        }

        .happy-client-overlay p {
            margin: 5px 0 0;
            font-size: 11px;
            opacity: 0.9;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .clients-wrapper {
                grid-template-columns: repeat(3, 1fr);
                gap: 25px;
            }
            .client-card {
                height: 170px;
            }
            .happy-clients-wrapper {
                grid-template-columns: repeat(3, 1fr);
                gap: 25px;
            }
            .happy-client-card {
                height: 170px;
            }
        }

        @media (max-width: 768px) {
            .clients-wrapper {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            .client-card {
                height: 160px;
            }
            .happy-clients-wrapper {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
            .happy-client-card {
                height: 160px;
            }
            .gallery-hero h1 {
                font-size: 32px;
            }
            .gallery-hero {
                padding: 50px 0;
            }
            .client-happy-section .section-header h1 {
                font-size: 28px;
            }
        }

        @media (max-width: 480px) {
            .clients-wrapper {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
            .client-card {
                height: 140px;
            }
            .client-overlay h4 {
                font-size: 11px;
            }
            .client-overlay p {
                font-size: 9px;
            }
            .happy-clients-wrapper {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
            .happy-client-card {
                height: 140px;
                padding: 15px;
            }
            .happy-client-overlay h4 {
                font-size: 11px;
            }
            .happy-client-overlay p {
                font-size: 9px;
            }
            .client-happy-section .section-header h1 {
                font-size: 24px;
            }
        }

        @media (max-width: 380px) {
            .clients-wrapper {
                grid-template-columns: repeat(1, 1fr);
                gap: 20px;
            }
            .client-card {
                height: 150px;
                max-width: 280px;
                margin: 0 auto;
            }
            .happy-clients-wrapper {
                grid-template-columns: repeat(1, 1fr);
                gap: 20px;
            }
            .happy-client-card {
                height: 150px;
                max-width: 280px;
                margin: 0 auto;
            }
        }
    </style>
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <?php $page = 'client'; ?>
        <?php include 'header.php'; ?>
        <!-- end of header -->

        <!-- Gallery Hero Section -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="title-breadcrumb">
                            <h2>Clients</h2>
                            <ol class="breadcrumb">
                                <li><a href="..index.php">Home</a></li>
                                <li class="active">Clients</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Happy Client Section - Rectangle Format with Hover Name -->
        <div class="client-happy-section">
            <div class="container">
                <div class="section-header">
                    <h6 class="text-secondary text-uppercase">Our Client</h6>
                    <h1>Our Happy Client</h1>
                </div>
                <div class="happy-clients-wrapper">
                    <!-- Client 1 -->
                    <div class="happy-client-card">
                        <img src="img/client/client1.png" alt="Client 1">
                        <div class="happy-client-overlay">
                            <h4>Client 1</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 2 -->
                    <div class="happy-client-card">
                        <img src="img/client/client2.png" alt="Client 2">
                        <div class="happy-client-overlay">
                            <h4>Client 2</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 3 -->
                    <div class="happy-client-card">
                        <img src="img/client/client3.png" alt="Client 3">
                        <div class="happy-client-overlay">
                            <h4>Client 3</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 4 -->
                    <div class="happy-client-card">
                        <img src="img/client/client4.png" alt="Client 4">
                        <div class="happy-client-overlay">
                            <h4>Client 4</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 5 -->
                    <div class="happy-client-card">
                        <img src="img/client/client5.png" alt="Client 5">
                        <div class="happy-client-overlay">
                            <h4>Client 5</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 6 -->
                    <div class="happy-client-card">
                        <img src="img/client/client6.png" alt="Client 6">
                        <div class="happy-client-overlay">
                            <h4>Client 6</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 7 -->
                    <div class="happy-client-card">
                        <img src="img/client/client7.png" alt="Client 7">
                        <div class="happy-client-overlay">
                            <h4>Client 7</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 8 -->
                    <div class="happy-client-card">
                        <img src="img/client/client8.png" alt="Client 8">
                        <div class="happy-client-overlay">
                            <h4>Client 8</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 9 -->
                    <div class="happy-client-card">
                        <img src="img/client/client9.png" alt="Client 9">
                        <div class="happy-client-overlay">
                            <h4>Client 9</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 10 -->
                    <div class="happy-client-card">
                        <img src="img/client/client10.png" alt="Client 10">
                        <div class="happy-client-overlay">
                            <h4>Client 10</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 11 -->
                    <div class="happy-client-card">
                        <img src="img/client/client11.png" alt="Client 11">
                        <div class="happy-client-overlay">
                            <h4>Client 11</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 12 -->
                    <div class="happy-client-card">
                        <img src="img/client/client12.png" alt="Client 12">
                        <div class="happy-client-overlay">
                            <h4>Client 12</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 13 -->
                    <div class="happy-client-card">
                        <img src="img/client/client13.png" alt="Client 13">
                        <div class="happy-client-overlay">
                            <h4>Client 13</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 14 -->
                    <div class="happy-client-card">
                        <img src="img/client/client14.png" alt="Client 14">
                        <div class="happy-client-overlay">
                            <h4>Client 14</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 15 -->
                    <div class="happy-client-card">
                        <img src="img/client/client15.png" alt="Client 15">
                        <div class="happy-client-overlay">
                            <h4>Client 15</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 16 -->
                    <div class="happy-client-card">
                        <img src="img/client/client16.png" alt="Client 16">
                        <div class="happy-client-overlay">
                            <h4>Client 16</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 17 -->
                    <div class="happy-client-card">
                        <img src="img/client/client17.png" alt="Client 17">
                        <div class="happy-client-overlay">
                            <h4>Client 17</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 18 -->
                    <div class="happy-client-card">
                        <img src="img/client/client18.png" alt="Client 18">
                        <div class="happy-client-overlay">
                            <h4>Client 18</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 19 -->
                    <div class="happy-client-card">
                        <img src="img/client/client19.png" alt="Client 19">
                        <div class="happy-client-overlay">
                            <h4>Client 19</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 20 -->
                    <div class="happy-client-card">
                        <img src="img/client/client20.png" alt="Client 20">
                        <div class="happy-client-overlay">
                            <h4>Client 20</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 21 -->
                    <div class="happy-client-card">
                        <img src="img/client/client21.png" alt="Client 21">
                        <div class="happy-client-overlay">
                            <h4>Client 21</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 22 -->
                    <div class="happy-client-card">
                        <img src="img/client/client22.png" alt="Client 22">
                        <div class="happy-client-overlay">
                            <h4>Client 22</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 23 -->
                    <div class="happy-client-card">
                        <img src="img/client/client23.png" alt="Client 23">
                        <div class="happy-client-overlay">
                            <h4>Client 23</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 24 -->
                    <div class="happy-client-card">
                        <img src="img/client/client24.png" alt="Client 24">
                        <div class="happy-client-overlay">
                            <h4>Client 24</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 25 -->
                    <div class="happy-client-card">
                        <img src="img/client/client25.png" alt="Client 25">
                        <div class="happy-client-overlay">
                            <h4>Client 25</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                    <!-- Client 26 -->
                    <div class="happy-client-card">
                        <img src="img/client/client26.png" alt="Client 26">
                        <div class="happy-client-overlay">
                            <h4>Client 26</h4>
                            <p>Trusted Partner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- start site-footer -->
        <?php include 'footer.php'; ?>
        <!-- end site-footer -->

    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>

</body>

</html>