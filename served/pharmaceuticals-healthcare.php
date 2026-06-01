<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">
    <meta name="description" content="High-purity water treatment for pharmaceutical and healthcare: USP purified water, WFI, RO/EDI systems, compliance with cGMP, and water for injection.">
    <meta name="keywords" content="Pharmaceutical Water Treatment, USP Purified Water, WFI, RO Plant, EDI, cGMP Compliance, Healthcare Water, Water for Injection">

    <!-- Page Title -->
    <title>Pharmaceuticals & Healthcare | Water Treatment for Purified Water & Compliance</title>

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
        /* ===== PHARMA & HEALTHCARE SPECIFIC STYLES (Maintains same design language) ===== */
        :root {
            --primary: #ff5e14;
            --primary-dark: #e04e0a;
            --secondary: #0b3550;
            --gray-bg: #f8fafc;
            --card-shadow: 0 15px 35px -10px rgba(0,0,0,0.08);
        }

        /* Hero Section */
        .pharma-hero {
            background: linear-gradient(105deg, #0a2e42 0%, #1a577a 100%);
            padding: 70px 0 60px;
            position: relative;
            overflow: hidden;
        }
        .pharma-hero .hero-badge {
            background: rgba(255,94,20,0.2);
            display: inline-block;
            padding: 6px 18px;
            border-radius: 40px;
            color: #ffb347;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .pharma-hero h1 {
            font-size: 48px;
            font-weight: 800;
            color: #fff;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        .pharma-hero h1 span {
            color: #ffb347;
        }
        .pharma-hero p {
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

        /* Process Timeline (used for Water Quality Requirements) */
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

        /* Why Choose Us (unchanged structure) */
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

        @media (max-width: 992px) {
            .pharma-hero h1 { font-size: 38px; }
        }
        @media (max-width: 768px) {
            .pharma-hero h1 { font-size: 32px; }
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
        <section class="pharma-hero">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-badge"><i class="fa fa-medkit"></i> Pharma & Healthcare Focus</div>
                        <h1>High-Purity Water for <span>Pharmaceutical & Healthcare</span></h1>
                        <p>USP purified water, Water for Injection (WFI), and cGMP-compliant systems – engineered for quality, safety, and regulatory success.</p>
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="hero-image">
                            <img src="../assets/images/industry-served/construction-industry.jpg" alt="Pharmaceutical water treatment" class="img-fluid" style="width:100%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Row (commented out but can be enabled) -->
        <!-- <div class="container stats-row-modern">
            <div class="row">
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="stat-card-modern">
                        <div class="stat-number-modern">USP</div>
                        <div class="stat-label-modern">Purified Water</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="stat-card-modern">
                        <div class="stat-number-modern">WFI</div>
                        <div class="stat-label-modern">Water for Injection</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="stat-card-modern">
                        <div class="stat-number-modern">cGMP</div>
                        <div class="stat-label-modern">Compliant Design</div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="stat-card-modern">
                        <div class="stat-number-modern">≤0.2 CFU/mL</div>
                        <div class="stat-label-modern">Bacterial Control</div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- ===== INDUSTRY OVERVIEW ===== -->
        <section class="pillar-section">
            <div class="container">
                <div class="section-header">
                    <h2>Critical <span>Water Systems</span> for Pharma & Healthcare</h2>
                    <p>Ensuring patient safety and product quality through reliable, compliant water treatment.</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="pillar-card">
                            <div class="pillar-icon"><i class="fa fa-flask"></i></div>
                            <h3>USP Purified Water</h3>
                            <p>RO + EDI systems producing water that meets USP <645> conductivity, TOC, and microbial limits for drug formulation and cleaning.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-card">
                            <div class="pillar-icon"><i class="fa fa-syringe"></i></div>
                            <h3>Water for Injection (WFI)</h3>
                            <p>Multi-effect distillation or membrane-based WFI systems complying with USP <1231> for parenteral and ophthalmic applications.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pillar-card">
                            <div class="pillar-icon"><i class="fa fa-hospital-o"></i></div>
                            <h3>Healthcare Water</h3>
                            <p>On-site purified water for dialysis, laboratory, CSSD sterilization, and clinical analyzers in hospitals and clinics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WATER QUALITY REQUIREMENTS ===== -->
        <section class="process-timeline">
            <div class="container">
                <div class="section-header">
                    <h2>Regulatory <span>Water Quality</span> Requirements</h2>
                    <p>Meeting global pharmacopoeia standards and cGMP guidelines.</p>
                </div>
                <div class="row">
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-file-text"></i></div>
                        <h4>USP <645></h4>
                        <p>Conductivity ≤1.3 µS/cm at 25°C, TOC ≤500 ppb, and action limits for bioburden.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-euro"></i></div>
                        <h4>EP (Ph. Eur.)</h4>
                        <p>Similar stringent parameters for purified water and WFI used in European markets.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-check-circle"></i></div>
                        <h4>cGMP Compliance</h4>
                        <p>21 CFR Part 211, validation, change control, and sanitary design of distribution loops.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-tint"></i></div>
                        <h4>Biofilm Prevention</h4>
                        <p>Hot water sanitization, ozone, or UV systems to maintain microbial control in storage and distribution.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== SOLUTIONS ===== -->
        <section class="applications-section" style="background: #ffffff;">
            <div class="container">
                <div class="section-header">
                    <h2>Engineered <span>Water Purification</span> Solutions</h2>
                    <p>Proven technologies validated for pharmaceutical and healthcare applications.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="app-card">
                            <div class="app-icon"><i class="fa fa-tachometer"></i></div>
                            <h4>Reverse Osmosis (RO)</h4>
                            <p>High-rejection membranes remove >99% of ions, organics, and endotoxins as primary purification step.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="app-card">
                            <div class="app-icon"><i class="fa fa-bolt"></i></div>
                            <h4>Electrodeionization (EDI)</h4>
                            <p>Continuous deionization without chemical regeneration, achieving resistivity >10 MΩ·cm.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="app-card">
                            <div class="app-icon"><i class="fa fa-thermometer"></i></div>
                            <h4>Multi-Effect Distillation</h4>
                            <p>Pyrogen-free WFI production meeting USP specifications for parenteral use.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="app-card">
                            <div class="app-icon"><i class="fa fa-umbrella"></i></div>
                            <h4>Sanitary Distribution</h4>
                            <p>316L stainless steel loops with 3D pigging, continuous recirculation, and hot water sanitization.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== APPLICATIONS ===== -->
        <section class="project-snapshots">
            <div class="container">
                <div class="section-header">
                    <h2>Proven <span>Applications</span> in Pharma & Healthcare</h2>
                    <p>Where our systems deliver critical water quality daily.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="snapshot-card">
                            <div class="snapshot-icon"><i class="fa fa-pills"></i></div>
                            <h4>Tablet Manufacturing</h4>
                            <span class="snapshot-location"><i class="fa fa-map-marker"></i> New Jersey, USA</span>
                            <p>RO/EDI purified water system for wet granulation, coating, and equipment CIP – passed FDA audit.</p>
                            <span class="snapshot-metric">FDA approved</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="snapshot-card">
                            <div class="snapshot-icon"><i class="fa fa-syringe"></i></div>
                            <h4>Injectable Manufacturing</h4>
                            <span class="snapshot-location"><i class="fa fa-map-marker"></i> Switzerland</span>
                            <p>Multi-effect WFI still with storage and distribution, validated to EP and USP standards.</p>
                            <span class="snapshot-metric">EP/USP compliant</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="snapshot-card">
                            <div class="snapshot-icon"><i class="fa fa-tint"></i></div>
                            <h4>Hospital Dialysis</h4>
                            <span class="snapshot-location"><i class="fa fa-map-marker"></i> Texas, USA</span>
                            <p>Hemodialysis water system with AAMI/ISO 23500 compliance, including endotoxin control.</p>
                            <span class="snapshot-metric">AAMI compliant</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="snapshot-card">
                            <div class="snapshot-icon"><i class="fa fa-flask"></i></div>
                            <h4>Biopharma R&D</h4>
                            <span class="snapshot-location"><i class="fa fa-map-marker"></i> Massachusetts, USA</span>
                            <p>Lab-scale ultrapure water (18.2 MΩ·cm) for cell culture and analytical testing.</p>
                            <span class="snapshot-metric">18.2 MΩ·cm</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== BENEFITS ===== -->
        <section class="process-timeline" style="background: #ffffff;">
            <div class="container">
                <div class="section-header">
                    <h2>Key <span>Benefits</span> for Pharma & Healthcare</h2>
                    <p>Quality, compliance, and operational excellence.</p>
                </div>
                <div class="row">
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-check"></i></div>
                        <h4>Regulatory Confidence</h4>
                        <p>Validated systems with full documentation, IQ/OQ/PQ protocols, and audit trail.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-shield"></i></div>
                        <h4>Patient Safety</h4>
                        <p>Endotoxin-free, bacteria-controlled water for injectable and implantable products.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-leaf"></i></div>
                        <h4>Reduced Downtime</h4>
                        <p>Sanitizable loops and real-time monitoring minimize risk of contamination events.</p>
                    </div>
                    <div class="col-md-3 timeline-step">
                        <div class="timeline-icon"><i class="fa fa-cogs"></i></div>
                        <h4>Energy Efficiency</h4>
                        <p>High-recovery RO and heat recovery from distillation reduce operating costs.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== WHY CHOOSE US (Adapted for pharma) ===== -->
        <section style="padding: 60px 0 80px;">
            <div class="container">
                <div class="section-title-new">
                    <h2>Why <span>Pharma & Healthcare</span> Professionals Choose Us</h2>
                    <p>Deep regulatory expertise and industry‑specific engineering.</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div style="display: flex; gap: 18px; margin-bottom: 38px;">
                            <div><i class="fa fa-cogs" style="font-size: 38px; color: #ff5e14;"></i></div>
                            <div><h4 style="font-weight: 700;">cGMP Validation</h4><p>Full documentation, FAT/SAT, and validation support for regulatory submissions.</p></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="display: flex; gap: 18px; margin-bottom: 38px;">
                            <div><i class="fa fa-file-pdf-o" style="font-size: 38px; color: #ff5e14;"></i></div>
                            <div><h4 style="font-weight: 700;">Qualification Packages</h4><p>DQ, IQ, OQ, PQ protocols executed by experienced pharma engineers.</p></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div style="display: flex; gap: 18px; margin-bottom: 38px;">
                            <div><i class="fa fa-wrench" style="font-size: 38px; color: #ff5e14;"></i></div>
                            <div><h4 style="font-weight: 700;">Lifecycle Service</h4><p>24/7 support, spare parts, requalification, and operator training.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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