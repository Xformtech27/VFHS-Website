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
<style>
.section-padding {
    padding: 60px 0;
    background: rgb(184, 216, 249);
}

.section-title {
    text-align: center;
    margin-bottom: 50px;
}

.section-title h2 {
    font-size: 36px;
    font-weight: 700;
    color: #0f172a;
    margin: 0 0 15px;
}

.section-title h2 span {
    color: #686665;
    position: relative;
}

.section-title p {
    font-size: 16px;
    color: #64748b;
    max-width: 600px;
    margin: 0 auto;
}

/* Category Header */
.faq-category {
    margin-bottom: 40px;
}

.category-header {
    background: linear-gradient(135deg, #222121, #f97316);
    padding: 15px 25px;
    border-radius: 12px;
    margin-bottom: 25px;
    display: flex;
    align-items: center;
    gap: 15px;
}

.category-header i {
    font-size: 28px;
    color: #fff;
}

.category-header h3 {
    font-size: 20px;
    font-weight: 700;
    color: #fff;
    margin: 0;
}

/* FAQ Accordion */
.faq-accordion .panel {
    border: none;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    border-radius: 12px !important;
    margin-bottom: 15px;
    background: #fff;
    transition: all 0.3s ease;
}

.faq-accordion .panel:hover {
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transform: translateY(-2px);
}

.faq-accordion .panel-heading {
    background: #fff;
    padding: 0;
    border-radius: 12px !important;
}

.faq-accordion .panel-title a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 22px;
    font-size: 16px;
    font-weight: 600;
    color: #1e293b;
    text-decoration: none;
    transition: all 0.3s ease;
}

.faq-accordion .panel-title a i:first-child {
    color: #ff5e14;
    margin-right: 12px;
    font-size: 18px;
}

.faq-accordion .panel-title .expand-icon i {
    font-size: 14px;
    color: #94a3b8;
    transition: transform 0.3s ease;
}

.faq-accordion .panel-title a.collapsed .expand-icon i {
    transform: rotate(0deg);
}

.faq-accordion .panel-title a:not(.collapsed) .expand-icon i {
    transform: rotate(45deg);
    color: #ff5e14;
}

.faq-accordion .panel-body {
    padding: 0 22px 22px 22px;
    color: #475569;
    line-height: 1.7;
    border-top: 1px solid #f1f5f9;
}

.faq-accordion .panel-body ul {
    margin-top: 10px;
    padding-left: 20px;
}

.faq-accordion .panel-body ul li {
    margin-bottom: 8px;
    color: #475569;
}

/* Responsive */
@media (max-width: 767px) {
    .section-padding {
        padding: 40px 0;
    }
    
    .section-title h2 {
        font-size: 28px;
    }
    
    .category-header {
        padding: 12px 20px;
    }
    
    .category-header i {
        font-size: 22px;
    }
    
    .category-header h3 {
        font-size: 18px;
    }
    
    .faq-accordion .panel-title a {
        padding: 15px 18px;
        font-size: 14px;
    }
    
    .faq-accordion .panel-body {
        padding: 0 18px 18px 18px;
        font-size: 14px;
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
       <?php $page = 'pages'; ?>
        <?php include 'header.php'; ?>
        <!-- end of header -->


        <!-- start page-title -->
        <!-- <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="title-breadcrumb">
                            
</h2>
                            <ol class="breadcrumb">
                                <li><a href="index-2.php">Home</a></li>
                                <li>FAQ</li>
                            </ol>
                        </div>
                    </div>
                </div> 
            </div> 
        </section>         -->
        <!-- end page-title -->


        
        <!-- Start FAQ Questions Section Only -->
<section class="faq-section section-padding">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="col col-xs-12">
                <div class="section-title text-center">
                    <h2>Frequently Asked <span>Questions</span></h2>
                    <p>Find answers about our products, manufacturing, and services</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-10 col-md-offset-1">

               
                    
                    
                        <!-- Surge Vessel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#manufacturingAccordion" href="#surgeVessel">
                                        What is a Surge Vessel and why is it needed?
                                        <span class="expand-icon"><i class="fa fa-angle-up"></i></span>
                                        
                                    </a>
                                </h4>
                            </div>
                            <div id="surgeVessel" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>A <strong>Surge Vessel</strong> (also called a surge tank or hydropneumatic tank) is designed to absorb pressure surges and water hammer in pumping systems. It protects pipelines, pumps, and other equipment from sudden pressure changes.</p>
                                    <ul>
                                        <li><strong>Key Benefits:</strong> Prevents pipe bursts, reduces pump wear, maintains system pressure stability</li>
                                        <li><strong>Applications:</strong> Water supply networks, booster systems, industrial pumping stations</li>
                                        <li><strong>Capacities:</strong> Available from 50L to 10,000L and custom sizes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- ASME Vessels -->
                       
                        <!-- Pressure Vessel -->
                        
                        <!-- Electrical Control Panels -->
                        

                <!-- ==================== WATER TREATMENT PLANT SECTION ==================== -->
                
                        

                        
                        <!-- Reverse Osmosis Plant -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#waterTreatmentAccordion" href="#roPlant">
                                 What is the difference between UF and RO?
                                                                                <span class="expand-icon"><i class="fa fa-angle-up"></i></span>

                                    </a>
                                </h4>
                            </div>
                            <div id="roPlant" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Key differences between <strong>Ultra Filtration (UF)</strong> and <strong>Reverse Osmosis (RO)</strong>:</p>
                                    <ul>
                                        <li><strong>Pore Size:</strong> UF (0.01-0.1µ) vs RO (0.0001µ)</li>
                                        <li><strong>Removes:</strong> UF removes bacteria/viruses; RO removes dissolved salts/TDS</li>
                                        <li><strong>Minerals:</strong> UF retains minerals; RO removes most minerals</li>
                                        <li><strong>Water Quality:</strong> UF produces potable water; RO produces purified water</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Seawater Desalination -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#waterTreatmentAccordion" href="#desalination">
                                         How does Seawater Desalination work?
                                                                                 <span class="expand-icon"><i class="fa fa-angle-up"></i></span>

                                        
                                    </a>
                                </h4>
                            </div>
                            <div id="desalination" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Our <strong>Seawater Desalination Plants</strong> use reverse osmosis technology:</p>
                                    <ul>
                                        <li>Pretreatment removes suspended solids</li>
                                        <li>High-pressure pumps force seawater through special RO membranes</li>
                                        <li>Membranes reject salt (99.5%+ rejection rate)</li>
                                        <li>Produces fresh water from seawater (35,000 ppm TDS to <500 ppm)</li>
                                        <li>Energy recovery systems reduce power consumption</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Demineralization Plant -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#waterTreatmentAccordion" href="#dmPlant">
                                         What is a Demineralization Plant used for?
                                                                                <span class="expand-icon"><i class="fa fa-angle-up"></i></span>

                                    </a>
                                </h4>
                            </div>
                            <div id="dmPlant" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>A <strong>Demineralization (DM) Plant</strong> removes dissolved salts and minerals:</p>
                                    <ul>
                                        <li>Uses cation and anion exchange resins</li>
                                        <li>Produces high-purity water (conductivity <5 µS/cm)</li>
                                        <li><strong>Applications:</strong> Boiler feed water, pharmaceutical, electronics, laboratories</li>
                                        <li>Can be two-bed or mixed-bed configurations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#servicesAccordion" href="#om">
                             What does your Operation & Maintenance service include?
                                                                     <span class="expand-icon"><i class="fa fa-angle-up"></i></span>

                                        
                                    </a>
                                </h4>
                            </div>
                            <div id="om" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Our comprehensive O&M services include:</p>
                                    <ul>
                                        <li>24/7 plant operation by trained professionals</li>
                                        <li>Regular preventive maintenance schedules</li>
                                        <li>Chemical dosing management</li>
                                        <li>Water quality monitoring & reporting</li>
                                        <li>Consumables supply & management</li>
                                        <li>Troubleshooting & breakdown support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

<div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#servicesAccordion" href="#amc">
                                 What are the benefits of an Annual Maintenance Contract?
                                                                                <span class="expand-icon"><i class="fa fa-angle-up"></i></span>

                                    </a>
                                </h4>
                            </div>
                            <div id="amc" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p><strong>AMC Benefits:</strong></p>
                                    <ul>
                                        <li>Priority service response (4-24 hours)</li>
                                        <li>Reduced breakdown costs</li>
                                        <li>Free replacement of wear & tear parts</li>
                                        <li>Quarterly performance audits</li>
                                        <li>10-20% discount on spare parts</li>
                                        <li>Extended equipment life</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
             </div>
                </div>

                

                        
                        
                                                                     

                                        
                                    
                        


                       


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End FAQ Questions Section -->

        <!-- start news-letter-section -->
        <!-- <section class="news-letter-section">
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
            </div> 
        </section> -->
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
