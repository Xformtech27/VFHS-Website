<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title> Clinkers - Industry, Factory and Engineering Template </title>

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
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
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <?php include 'header.php'; ?>
        <!-- end of header -->


        <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="title-breadcrumb">
                            <h2>Contact</h2>
                            <ol class="breadcrumb">
                                <li><a href="index-2.php">Home</a></li>
                                <li>Contact</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>        
        <!-- end page-title -->    


        <!-- start contact-pg-contact-section -->  
        <section class="contact-pg-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-sm-8">
                        <div class="contact-form">
                            <form class="row contact-validation-active"  id="contact-form-s2">
                                <div class="col col-sm-6">
                                    <label for="f-name">First Name</label>
                                    <input type="text" class="form-control" id="f-name" name="f_name">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="l-name">Last Name</label>
                                    <input type="text" class="form-control" id="l-name" name="l_name">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="col col-sm-6">
                                    <label for="phone">Phone No.</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col col-xs-12">
                                    <label for="message">Message</label>
                                    <textarea id="message" name="note" class="form-control"></textarea>
                                </div>
                                <div class="col col-xs-12">
                                    <div class="submit-btn">
                                        <button type="submit" class="theme-btn-s2">Submit</button>
                                        <div id="loader">
                                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xs-12">
                                    <div class="error-handling-messages">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col col-lg-3 col-sm-4">
                        <div class="contact-info">
                            <h3>Drop us a line</h3>
                            <p>For any kind of query, contact us with the details below.</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> +123 (569) 254 78</li>
                                <li><i class="fa fa-envelope"></i> info-desk@clinkers.com</li>
                                <li><i class="fa fa-home"></i> #59, East Madison Ave, Melbourne, Australia</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-contact-section -->


        <!-- start news-letter-section -->
        <section class="news-letter-section">
            <div class="container">
                <div class="row">
                    <div class="col col-md-7">
                        <h3>Subscribe your E-mail for our <span>Newsletter &amp; Business Tips</span></h3>
                    </div>
                    <div class="col col-md-5">
                        <div class="newsletter-form">
                            <form>
                                <div>
                                    <input type="text" class="form-control" placeholder="email address..">
                                    <button type="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end news-letter-section -->


        <!-- start site-footer -->
        <?php include 'footer.php'; ?>
        <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->



    <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>
