<!doctype html>
<html lang="en">
  <head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="themexriver" />

    <!-- Page Title -->
    <title>Vintage Flow Hydro System - Home</title>

    <!-- Icon fonts -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Plugins for this template -->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.css" rel="stylesheet" />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/slick-theme.css" rel="stylesheet" />
    <link href="assets/css/owl.transitions.css" rel="stylesheet" />
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- INTERNAL CSS FOR "WHY CHOOSE US" SECTION (normal curve corners) -->
    <style>
      /* ---------- WHY CHOOSE US SECTION (Internal CSS) ---------- */
      .why-choose-wrapper {
        background:  #ffffff;
        padding: 80px 0;
        font-family: 'Poppins', 'Segoe UI', Roboto, system-ui, sans-serif;
      }

      .why-choose-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 24px;
      }

      .why-section-header {
        text-align: center;
        margin-bottom: 64px;
      }

      /* Section title "Why Choose Us" - single line */
      .why-section-header h2 {
        font-size: 2.6rem;
        font-weight: 700;
        margin: 0 0 16px 0;
        color: #14212b;
        letter-spacing: -0.02em;
        position: relative;
        display: inline-block;
        padding-bottom: 0;
      }

      .section-divider {
        width: 70px;
        height: 4px;
        background: #5aa1cd;
        border-radius: 4px;
        margin: 16px auto 20px auto;
      }

      .why-section-header p {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #4a5b6e;
        max-width: 700px;
        margin: 0 auto;
      }

      .why-cards-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 32px;
        margin-top: 20px;
      }

      /* Normal curve corners (12px border-radius) */
      .why-card {
        background: #edf5f8;
        border-radius: 12px;
        padding: 32px 24px 32px 24px;
        text-align: center;
        box-shadow: 0 15px 35px -12px rgba(0, 0, 0, 0.08);
        transition: all 0.35s cubic-bezier(0.2, 0, 0, 1);
        border: 1px solid rgba(174, 43, 43, 0.08);
        position: relative;
        z-index: 1;
        animation: fadeUp 0.5s ease-out forwards;
        opacity: 0;
      }

      .why-card:nth-child(1) { animation-delay: 0.05s; }
      .why-card:nth-child(2) { animation-delay: 0.15s; }
      .why-card:nth-child(3) { animation-delay: 0.25s; }
      .why-card:nth-child(4) { animation-delay: 0.35s; }

      .why-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 45px -18px rgba(29, 126, 140, 0.25);
        border-color: rgba(43, 156, 174, 0.2);
      }

      /* Icon remains circular (border-radius: 50%) */
      .why-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 84px;
        height: 84px;
        background: linear-gradient(145deg, #eef7fa, #e2f0f4);
        border-radius: 50%;
        margin-bottom: 28px;
        transition: all 0.3s ease;
      }

      .why-icon i {
        font-size: 44px;
        color: #5aa1cd;
        transition: transform 0.2s ease;
      }

      .why-card:hover .why-icon {
        background: linear-gradient(135deg, #5aa1cd, #5aa1cd);
        box-shadow: 0 12px 20px -10px rgba(29, 126, 140, 0.4);
      }

      .why-card:hover .why-icon i {
        color: white;
        transform: scale(1.02);
      }

      .why-card h3 {
        font-size: 1.65rem;
        font-weight: 700;
        color: #1e2f3c;
        margin-bottom: 18px;
        letter-spacing: -0.3px;
      }

      .why-card p {
        font-size: 0.98rem;
        line-height: 1.55;
        color: #5a6e7e;
        margin-bottom: 0;
      }

      /* Bottom accent line */
      .why-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0px;
        height: 3px;
        background: #5aa1cd;
        border-radius: 4px;
        transition: width 0.3s ease;
      }

      .why-card:hover::after {
        width: 64px;
      }

      @keyframes fadeUp {
        from {
          opacity: 0;
          transform: translateY(18px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      /* Responsive */
      @media (max-width: 1100px) {
        .why-cards-grid { gap: 24px; }
        .why-card h3 { font-size: 1.45rem; }
      }
      @media (max-width: 992px) {
        .why-cards-grid { grid-template-columns: repeat(2, 1fr); gap: 28px; }
        .why-choose-wrapper { padding: 60px 0; }
        .why-section-header h2 { font-size: 2.2rem; }
      }
      @media (max-width: 576px) {
        .why-cards-grid { grid-template-columns: 1fr; gap: 24px; }
        .why-choose-wrapper { padding: 48px 0; }
        .why-section-header h2 { font-size: 1.9rem; }
        .why-card { padding: 28px 20px; }
        .why-icon { width: 70px; height: 70px; }
        .why-icon i { font-size: 36px; }
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
          <img src="assets/images/preloader.gif" alt />
        </div>
      </div>
      <!-- end preloader -->

      <!-- Start header -->
      <?php $page = 'home'; ?>
      <?php include 'header.php'; ?>
      <!-- end of header -->

      <!-- start of hero -->
      <section class="hero hero-slider-wrapper hero-style-1">
        <div class="hero-slider">
          <div class="slide">
            <img src="assets/images/slider/slide-8.jpg" alt class="slider-bg" />
            <div class="container">
              <div class="row">
                <div class="col col-lg-6 col-md-8 col-sm-10 slide-caption">
                  <h2><span>Advanced</span>Water Treatment Plants</h2>
                  <p>
                    Providing efficient RO plants, filtration systems, and wastewater
                     management solutions with expert support.
                  </p>
                  <!-- <div class="btns">
                    <a href="#" class="theme-btn">Our Industries</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

          <div class="slide">
            <img src="assets/images/slider/slide-third.jpg" alt class="slider-bg" />
            <div class="container">
              <div class="row">
                <div class="col col-lg-6 col-md-8 col-sm-10  slide-caption">
                  <h2><span>Complete</span>Water & Wastewater Solutions</h2>
                  <p>
                    Reliable water treatment systems for industrial and commercial 
                    applications with advanced purification technology.
                  </p>
                  <!-- <div class="btns">
                    <a href="#" class="theme-btn">Our Industries</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

          <div class="slide">
            <img src="assets/images/slider/slide-5.jpg" alt class="slider-bg" />
            <div class="container">
              <div class="row">
                <div class="col col-lg-6 col-md-8 col-sm-10 slide-caption">
                  <h2><span>Trusted</span>Industrial Water Solutions</h2>
                  <p>
                    Delivering sustainable and high-performance water treatment 
                    services for various industrial sectors.
                  </p>
                  <!-- <div class="btns">
                    <a href="#" class="theme-btn">Our Industries</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end of hero slider -->

      <!-- start cta-section -->
      <section class="cta-section">
        <div class="container">
          <div class="row">
            <div class="col col-xs-12">
              <div class="cta-text">
                <h3>
                  We provide innovative Product Solutions for sustainable
                  progress.
                </h3>
                <a href="contact.php" class="theme-btn-s2">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
        <!-- end container -->
      </section>
      <!-- end cta-section -->

      <!-- start services-section -->
      <section class="services-section section-padding">
        <div class="container">
          <div class="row">
            <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
              <div class="section-title">
                <h2>Our Services</h2>
                <p>
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa
                  qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-xs-12">
              <div class="services-grids services-slider">
                <div class="grid">
                  <div class="img-overlay">
                    <img src="assets/images/services/operation-&-maintenance.jpg" alt />
                    <div class="overlay">
                      <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                  <div class="details">
                    <h3>Operation & Maintenance</h3>
                    <p>
                      Efficient operation and maintenance for all industrial
                      equipment and systems..
                    </p>
                    <div class="read-more">
                      <a href="operation-&-maintenance.php">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="img-overlay">
                    <img src="assets/images/services/revamping-&-refurbishing.jpg" alt />
                    <div class="overlay">
                      <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                  <div class="details">
                    <h3>Revamping & Refurbishing</h3>
                    <p>
                     Expert revamping and refurbishing to extend equipment life
                      and performance..
                    </p>
                    <div class="read-more">
                      <a href="revamping-&-refurbishing.php">Read More</a>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <div class="img-overlay">
                    <img src="assets/images/services/environmental-consultancy.jpg" alt />
                    <div class="overlay">
                      <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                  <div class="details">
                    <h3>Environmental Consultancy</h3>
                    <p>
                      Professional environmental consultancy for compliance and
                      sustainable practices..
                    </p>
                    <div class="read-more">
                      <a href="environmental-consultancy.php">Read More</a>
                    </div>v
                  </div>
                </div>
                <div class="grid">
                  <div class="img-overlay">
                    <img src="assets/images/services/online-monitoring-system.jpg" alt />
                    <div class="overlay">
                      <a href="#"><i class="fa fa-link"></i></a>
                    </div>
                  </div>
                  <div class="details">
                    <h3>Online Monitoring System</h3>
                    <p>
                      Advanced online monitoring systems for real-time data and
                      predictive maintenance..
                    </p>
                    <div class="read-more">
                      <a href="online-monitoring-system.php">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-xs-12">
              <p class="view-all-services">
                Click here to view
                <a href="services.php"
                  >All Services <i class="fa fa-long-arrow-right"></i
                ></a>
              </p>
            </div>
          </div>
        </div>
        <!-- end container -->
      </section>
      <!-- end services-section -->

      <!-- start about-section -->
      <section class="about-section">
        <div class="content">
          <div class="left-col">
            <div class="inner">
              <h3>
                We Provide Advanced Water Treatment Solutions
              </h3>
              <p>
                Vintage Hydro Systems delivers reliable water purification,
                filtration, reverse osmosis, and wastewater treatment solutions
                for industrial and commercial applications with quality service support.
              </p>
              <div class="social">
                <span>Get Connected With Us:</span>
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-facebook-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-twitter-square"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#"><i class="fa fa-linkedin-square"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="right-col">
            <!-- <div class="video-holder">
              <a
                href="https://www.youtube.com/embed/7e90gBu4pas?autoplay=1"
                class="video-btn"
                data-type="iframe"
              >
                <i class="fa fa-play"></i> Play Video
              </a>
            </div> -->
          </div>
        </div>
        <!-- end content -->
      </section>
      <!-- end about-section -->

      <!-- start services-section-s2 (Industries Served) -->
      <section class="services-section-s2 section-padding">
        <div class="container">
          <div class="row">
            <div class="col col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1">
              <div class="section-title">
                <h2>Industries Served</h2>
                <p>
                  We provide tailored water treatment and wastewater management solutions across diverse industrial sectors. Our expertise ensures compliance, efficiency, and sustainability for each industry's unique requirements.
                </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col col-xs-12">
              <div class="services-grids">
                <div class="grid">
                  <div class="box">
                    <div class="service-title">
                      <div class="icon"><img src="assets/images/services/hospital.png" alt /></div>
                      <h3>Hospital Industry</h3>
                    </div>
                    <p>Sewage treatment plants, water softening, and infection‑control water systems for healthcare facilities.</p>
                    <div class="more"><a href="/vintage-flow-hdyro-system/served/hospital-industry.php">Read More</a></div>
                  </div>
                  <div class="box">
                    <div class="service-title">
                      <div class="icon"><img src="assets/images/services/construction.png" alt /></div>
                      <h3>Construction Industry</h3>
                    </div>
                    <p>Water treatment for ready-mix concrete, dust suppression, and construction site runoff management.</p>
                    <div class="more"><a href="/vintage-flow-hdyro-system/served/construction-industry.php">Read More</a></div>
                  </div>
                  <div class="box">
                    <div class="service-title">
                      <div class="icon"><img src="assets/images/services/chemical.png" alt /></div>
                      <h3>Chemical Industry</h3>
                    </div>
                    <p>Effluent treatment, ZLD, and corrosion-resistant water purification for chemical processing.</p>
                    <div class="more"><a href="/vintage-flow-hdyro-system/served/chemical-industry.php">Read More</a></div>
                  </div>
                  <div class="box">
                    <div class="service-title">
                      <div class="icon"><img src="assets/images/services/power-plant.png" alt /></div>
                      <h3>Power Plant Industry</h3>
                    </div>
                    <p>DM water, condensate polishing, cooling water treatment, and boiler feed water solutions.</p>
                    <div class="more"><a href="/vintage-flow-hdyro-system/served/power-plant-industry.php">Read More</a></div>
                  </div>
                  <div class="box">
                    <div class="service-title">
                      <div class="icon"><img src="assets/images/services/manufacturing.png" alt /></div>
                      <h3>Manufacturing Industry</h3>
                    </div>
                    <p>Process water, wastewater recycling, and cost‑efficient treatment for automotive, steel, and general manufacturing.</p>
                    <div class="more"><a href="/vintage-flow-hdyro-system/served/manufacturing-industry.php">Read More</a></div>
                  </div>
                  <div class="box">
                    <div class="service-title">
                      <div class="icon"><img src="assets/images/services/healthcare.png" alt /></div>
                      <h3>Pharmaceuticals & Healthcare</h3>
                    </div>
                    <p>Pure water solutions for pharmaceutical manufacturing and healthcare applications.</p>
                    <div class="more"><a href="/vintage-flow-hdyro-system/served/pharmaceuticals-healthcare.php">Read More</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="row">
            <div class="col col-xs-12">
              <p class="view-all-services">
                Click here to view
                <a href="services.php">All Services <i class="fa fa-long-arrow-right"></i></a>
              </p>
            </div>
          </div> -->
        </div>
      </section>
      <!-- end services-section-s2 -->

      <!-- ============================================= -->
      <!-- "WHY CHOOSE US" SECTION - NORMAL CURVE CORNERS -->
      <!-- ============================================= -->
      <div class="why-choose-wrapper">
        <div class="why-choose-container">
          <div class="why-section-header">
            <h2>Why Choose Us</h2>
            <div class="section-divider"></div>
            <p>We combine technical expertise with a customer-centric approach to deliver superior water treatment solutions.</p>
          </div>

          <div class="why-cards-grid">
            <div class="why-card">
              <div class="why-icon">
                <i class="fa fa-flask"></i>
              </div>
              <h3>Technical Expertise</h3>
              <p>Deep domain expertise in RO, DM, ETP, ZLD & advanced filtration. Our engineers solve complex water challenges with proven methodologies.</p>
            </div>
            <div class="why-card">
              <div class="why-icon">
                <i class="fa fa-cogs"></i>
              </div>
              <h3>Tailored Engineering</h3>
              <p>Every facility is unique. We custom-design systems to match your water chemistry, site constraints, and operational targets perfectly.</p>
            </div>
            <div class="why-card">
              <div class="why-icon">
                <i class="fa fa-life-ring"></i>
              </div>
              <h3>End-to-End Support</h3>
              <p>From installation & commissioning to AMC, remote monitoring, and rapid troubleshooting — we're your lifelong service partner.</p>
            </div>
            <div class="why-card">
              <div class="why-icon">
                <i class="fa fa-leaf"></i>
              </div>
              <h3>Sustainability First</h3>
              <p>Energy-efficient designs, water recovery up to 95%, and eco-friendly chemistries. Lower your carbon & water footprint.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- ========== END WHY CHOOSE US SECTION ========== -->

      <!-- start site-footer -->
      <?php include 'footer.php'; ?>
      <!-- end site-footer -->
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>