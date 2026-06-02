<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">
    <meta name="description" content="Advanced water and wastewater treatment for hospitals: STP, water softening, RO systems, infection control, and healthcare compliance. Sustainable water management for medical facilities.">
    <meta name="keywords" content="Hospital Water Treatment, Sewage Treatment Plant STP, Water Softening, RO Systems, Infection Control, Healthcare Compliance, Sustainable Water Management">

    <!-- Page Title -->
    <title>Vintage Flow Hdyro System - Hospital Industry</title>

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

    <style>
        /* ===== HOSPITAL INDUSTRY SPECIFIC STYLES (Same design language) ===== */
        :root {
            --primary: #ff5e14;
            --primary-dark: #e04e0a;
            --secondary: #0b3550;
            --gray-bg: #f8fafc;
            --card-shadow: 0 15px 35px -10px rgba(0,0,0,0.08);
        }

        /* Hero Section */
        .hospital-hero {
            background: linear-gradient(105deg, #0a2e42 0%, #1a577a 100%);
            padding: 70px 0 60px;
            position: relative;
            overflow: hidden;
        }
        .hospital-hero .hero-badge {
            background: rgba(255,94,20,0.2);
            display: inline-block;
            padding: 6px 18px;
            border-radius: 40px;
            color: #ffb347;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .hospital-hero h1 {
            font-size: 48px;
            font-weight: 800;
            color: #fff;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        .hospital-hero h1 span {
            color: #ffb347;
        }
        .hospital-hero p {
            color: rgba(255,255,255,0.9);
            font-size: 18px;
            margin-bottom: 30px;
            max-width: 550px;
        }
        .hero-image {
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 25px 40px -15px rgba(0,0,0,0.3);
        }

        /* Stats Cards Row */
        .stats-row-modern {
            margin-top: -35px;
            position: relative;
            z-index: 5;
        }
        .stat-card-modern {
            background: white;
            border-radius: 20px;
            padding: 25px 15px;
            text-align: center;
            box-shadow: var(--card-shadow);
            transition: 0.2s;
            height: 100%;
        }
        .stat-number-modern {
            font-size: 42px;
            font-weight: 800;
            color: var(--primary);
            line-height: 1;
        }
        .stat-label-modern {
            font-size: 15px;
            color: #4a627a;
            font-weight: 500;
        }

        /* Pillar Solutions (3-column) */
        .pillar-section {
            padding: 80px 0;
            background: white;
        }
        .pillar-card {
            background: var(--gray-bg);
            border-radius: 28px;
            padding: 40px 30px;
            transition: all 0.25s;
            height: 100%;
            border: 1px solid #eef2f8;
        }
        .pillar-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--card-shadow);
            border-color: var(--primary);
        }
        .pillar-icon {
            width: 75px;
            height: 75px;
            background: rgba(255,94,20,0.12);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 28px;
        }
        .pillar-icon i {
            font-size: 40px;
            color: var(--primary);
        }
        .pillar-card h3 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .pillar-card p {
            color: #5a6e7c;
            line-height: 1.5;
        }

        /* Process Timeline (used for Challenges / Solutions) */
        .process-timeline {
            background: var(--gray-bg);
            padding: 80px 0;
        }
        .timeline-step {
            text-align: center;
            position: relative;
        }
        .timeline-icon {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            border: 2px solid var(--primary);
        }
        .timeline-icon i {
            font-size: 36px;
            color: var(--primary);
        }
        .timeline-step h4 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .timeline-step p {
            color: #5a6e7c;
        }

        /* Applications Section (similar to project snapshots) */
        .applications-section {
            padding: 80px 0;
            background: #ffffff;
        }
        .app-card {
            background: var(--gray-bg);
            border-radius: 24px;
            padding: 28px 24px;
            transition: all 0.25s ease;
            border: 1px solid #eef2f8;
            height: 100%;
        }
        .app-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px -8px rgba(0,0,0,0.08);
            border-color: var(--primary);
        }
        .app-icon {
            font-size: 32px;
            color: var(--primary);
            margin-bottom: 18px;
        }
        .app-card h4 {
            font-size: 20px;
            font-weight: 800;
            margin-bottom: 12px;
        }
        .app-card p {
            color: #5a6e7c;
            font-size: 14px;
            line-height: 1.5;
        }

        /* Section Headers */
        .section-header {
            text-align: center;
            margin-bottom: 55px;
        }
        .section-header h2 {
            font-size: 38px;
            font-weight: 800;
            color: #1a2c3e;
        }
        .section-header h2 span {
            color: var(--primary);
        }
        .section-header p {
            font-size: 17px;
            color: #5a6e7c;
            max-width: 700px;
            margin: 12px auto 0;
        }

        /* Why Choose Us & CTA */
        .section-title-new {
            text-align: center;
            margin-bottom: 55px;
        }
        .section-title-new h2 {
            font-size: 38px;
            font-weight: 800;
            color: #1a2c3e;
        }
        .section-title-new h2 span {
            color: var(--primary);
        }
        .section-title-new p {
            font-size: 17px;
            color: #5a6e7c;
            max-width: 700px;
            margin: 12px auto 0;
        }
        .cta-button {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 14px 38px;
            border-radius: 40px;
            font-weight: 700;
            text-decoration: none;
            transition: 0.2s;
            margin-top: 20px;
        }
        .cta-button:hover {
            background: var(--primary-dark);
            color: white;
        }

        @media (max-width: 992px) {
            .hospital-hero h1 { font-size: 38px; }
        }
        @media (max-width: 768px) {
            .hospital-hero h1 { font-size: 32px; }
            .stats-row-modern { margin-top: 0; }
            .timeline-step { margin-bottom: 40px; }
            .section-header h2 { font-size: 32px; }
            .section-title-new h2 { font-size: 32px; }
            .app-card { margin-bottom: 20px; }
        }
    </style>
</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <img src="../assets/images/preloader.gif" alt>
            </div>
        </div>

        <!-- Start header (unchanged) -->
        <?php include '../header.php'; ?>

        <!-- ===== HERO BANNER ===== -->
        <section class="hospital-hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-badge"><i class="fa fa-hospital-o"></i> Healthcare Facility Focus</div>
                        <h1>Complete Water Solutions for <span>Hospitals & Healthcare</span></h1>
                        <p>From sewage treatment plants (STP) and water softening to RO systems and infection control – ensuring compliance, safety, and sustainable water management.</p>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="hero-image">
                            <img src="../assets/images/industry-served/hospital-industry.jpg" alt="Hospital water treatment" class="img-fluid" style="width:100%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== INDUSTRY OVERVIEW ===== -->
        <section class="pillar-section">
            <div class="container">
                <div class="section-header">
                    <h2>Critical <span>Water Systems</span> for Hospitals</h2>
                    <p>Ensuring patient safety, regulatory compliance, and operational efficiency.</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="pillar-card">
                            <div class="pillar-icon"><i class="fa fa-tint"></i></div>
                            <h3>Sewage Treatment Plant (STP)</h3>
                            <p>On-site STP for treating hospital wastewater – removes pathogens, pharmaceutical residues, and organic load before discharge or reuse.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-card">
                            <div class="pillar-icon"><i class="fa fa-filter"></i></div>
                            <h3>Water Softening & RO</h3>
                            <p>Hardness removal and reverse osmosis for boiler feed, laundry, and medical equipment – preventing scale and ensuring consistent quality.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-card">
                            <div class="pillar-icon"><i class="fa fa-shield"></i></div>
                            <h3>Infection Control Water</h3>
                            <p>UV, ultrafiltration, and chlorination systems for Legionella control and sterile water in high‑risk areas (ICUs, operating theaters).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WATER TREATMENT CHALLENGES IN HOSPITALS ===== -->
        <section class="process-timeline">
            <div class="container">
                <div class="section-header">
                    <h2>Key <span>Water Treatment Challenges</span> in Hospitals</h2>
                    <p>Addressing critical issues that affect patient health and facility operations.</p>
                </div>
                <div class="row">
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-bug"></i></div>
                        <h4>Legionella & Biofilm</h4>
                        <p>Waterborne pathogens in cooling towers, hot water systems, and pipes pose serious infection risks.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-flask"></i></div>
                        <h4>Pharmaceutical Waste</h4>
                        <p>Antibiotics, hormones, and chemicals in hospital wastewater require advanced treatment before discharge.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-cogs"></i></div>
                        <h4>High Water Consumption</h4>
                        <p>Laundry, dialysis, sterilization, and HVAC systems drive significant water usage and costs.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-gavel"></i></div>
                        <h4>Regulatory Compliance</h4>
                        <p>Strict local and international standards (EPA, WHO, JCI) for discharge and potable water quality.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== OUR SOLUTIONS ===== -->
        <section class="applications-section" style="background: #ffffff;">
            <div class="container">
                <div class="section-header">
                    <h2>Integrated <span>Hospital Water</span> Solutions</h2>
                    <p>Proven technologies for safe, compliant, and sustainable water management.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="app-card">
                            <div class="app-icon"><i class="fa fa-recycle"></i></div>
                            <h4>Sewage Treatment Plant (STP)</h4>
                            <p>MBR or MBBR-based STP with tertiary treatment – reduces BOD/COD to <10 mg/L for reuse in gardening or flushing.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="app-card">
                            <div class="app-icon"><i class="fa fa-dashboard"></i></div>
                            <h4>Water Softening Systems</h4>
                            <p>Ion exchange softeners for boiler feed, laundry, and kitchen – prevents scaling and extends equipment life.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="app-card">
                            <div class="app-icon"><i class="fa fa-tint"></i></div>
                            <h4>Reverse Osmosis (RO)</h4>
                            <p>High-efficiency RO plants for dialysis, laboratory, and sterilization – producing ultrapure water meeting AAMI standards.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="app-card">
                            <div class="app-icon"><i class="fa fa-shield"></i></div>
                            <h4>Infection Control Systems</h4>
                            <p>UV disinfection, chlorination, and point‑of‑use filtration to eliminate Legionella and other pathogens.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== KEY APPLICATIONS (Project Snapshots style) ===== -->
        <!-- <section class="project-snapshots">
            <div class="container">
                <div class="section-header">
                    <h2>Trusted <span>Applications</span> Across Hospitals</h2>
                    <p>Where our systems deliver critical water quality and operational savings.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="snapshot-card">
                            <div class="snapshot-icon"><i class="fa fa-dialysis"></i></div>
                            <h4>Dialysis Water Treatment</h4>
                            <span class="snapshot-location"><i class="fa fa-map-marker"></i> California, USA</span>
                            <p>RO + EDI system with endotoxin filters – meets AAMI RD52 for patient safety.</p>
                            <span class="snapshot-metric">AAMI compliant</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="snapshot-card">
                            <div class="snapshot-icon"><i class="fa fa-hotel"></i></div>
                            <h4>Laundry & Kitchen</h4>
                            <span class="snapshot-location"><i class="fa fa-map-marker"></i> London, UK</span>
                            <p>Softened water system reduced detergent use by 30% and extended fabric life.</p>
                            <span class="snapshot-metric">30% cost saving</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="snapshot-card">
                            <div class="snapshot-icon"><i class="fa fa-flask"></i></div>
                            <h4>Laboratory & Sterilization</h4>
                            <span class="snapshot-location"><i class="fa fa-map-marker"></i> Singapore</span>
                            <p>RO system for autoclaves and lab analyzers – consistent Type II water quality.</p>
                            <span class="snapshot-metric">100% uptime</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="snapshot-card">
                            <div class="snapshot-icon"><i class="fa fa-tree"></i></div>
                            <h4>STP & Water Recycling</h4>
                            <span class="snapshot-location"><i class="fa fa-map-marker"></i> Mumbai, India</span>
                            <p>MBR-based STP with 90% water reuse for landscaping and cooling towers.</p>
                            <span class="snapshot-metric">90% reuse rate</span>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- ===== BENEFITS ===== -->
        <section class="process-timeline" style="background: #ffffff;">
            <div class="container">
                <div class="section-header">
                    <h2>Key <span>Benefits</span> for Hospitals</h2>
                    <p>Safety, compliance, and financial savings.</p>
                </div>
                <div class="row">
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-check-circle"></i></div>
                        <h4>Infection Prevention</h4>
                        <p>Eliminate Legionella, Pseudomonas, and other waterborne pathogens.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-leaf"></i></div>
                        <h4>Sustainability</h4>
                        <p>Recycle up to 90% of wastewater, reduce environmental footprint.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-line-chart"></i></div>
                        <h4>Cost Reduction</h4>
                        <p>Lower water bills, chemical use, and energy consumption.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-shield"></i></div>
                        <h4>Regulatory Peace</h4>
                        <p>Meet JCI, EPA, and local health department standards.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHY CHOOSE US (Adapted for hospitals) ===== -->
        <section style="padding: 60px 0 80px;">
            <div class="container">
                <div class="section-title-new">
                    <h2>Why <span>Hospital Administrators</span> Choose Us</h2>
                    <p>Specialized expertise in healthcare water and wastewater management.</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div style="display: flex; gap: 18px; margin-bottom: 38px;">
                            <div><i class="fa fa-medkit" style="font-size: 38px; color: #ff5e14;"></i></div>
                            <div><h4 style="font-weight: 700;">Healthcare Focus</h4><p>Systems designed for infection control, pathogen removal, and patient safety.</p></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="display: flex; gap: 18px; margin-bottom: 38px;">
                            <div><i class="fa fa-file-text" style="font-size: 38px; color: #ff5e14;"></i></div>
                            <div><h4 style="font-weight: 700;">Compliance Documentation</h4><p>Validation reports, monitoring logs, and audit-ready records.</p></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="display: flex; gap: 18px; margin-bottom: 38px;">
                            <div><i class="fa fa-wrench" style="font-size: 38px; color: #ff5e14;"></i></div>
                            <div><h4 style="font-weight: 700;">24/7 Service Support</h4><p>Emergency response and preventive maintenance for uninterrupted operation.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== CONTACT CTA SECTION ===== -->
        <!-- <section class="hospital-hero" style="padding: 50px 0; background: linear-gradient(105deg, #1a577a 0%, #0a2e42 100%);">
            <div class="container text-center">
                <h2 style="color: white; font-size: 36px; font-weight: 800;">Ready to Optimize Your Hospital's Water Systems?</h2>
                <p style="color: rgba(255,255,255,0.9); font-size: 18px; max-width: 700px; margin: 20px auto;">Get a customized water treatment plan – from STP to infection control and water recycling.</p>
                <a href="#" class="cta-button"><i class="fa fa-phone"></i> Contact Our Healthcare Team</a>
            </div>
        </section> -->

        <!-- start site-footer (unchanged) -->
        <?php include '../footer.php'; ?>

    </div>
    <!-- end page-wrapper -->

    <!-- JavaScript files -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-plugin-collection.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>