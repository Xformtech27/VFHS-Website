<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Clinkers Inc.">

    <!-- Page Title -->
    <title>Vintage Flow Hydro System - Request a Quote</title>

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
    
    <!-- Attractive Responsive Styles for Quote Form -->
    <style>
        /* Variables */
        :root {
            --primary: #ff5e14;
            --primary-dark: #e04e0e;
            --dark: #0f172a;
            --dark-light: #1e293b;
            --gray: #64748b;
            --light-gray: #f8fafc;
            --border: #e2e8f0;
            --white: #ffffff;
        }
        
        /* Quote Form Container */
        .quote-wrapper {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .quote-card {
            background: var(--white);
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.15);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .quote-card:hover {
            transform: translateY(-5px);
        }
        
        /* Header Section */
        .quote-header {
            background: linear-gradient(135deg, var(--dark) 0%, var(--dark-light) 100%);
            padding: 50px 40px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .quote-header::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255,94,20,0.1), transparent);
            border-radius: 50%;
        }
        
        .quote-header::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 250px;
            height: 250px;
            background: radial-gradient(circle, rgba(255,94,20,0.08), transparent);
            border-radius: 50%;
        }
        
        .quote-icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            position: relative;
            z-index: 1;
            box-shadow: 0 10px 25px -5px rgba(255,94,20,0.4);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .quote-icon i {
            font-size: 45px;
            color: var(--white);
        }
        
        .quote-header h2 {
            font-size: 42px;
            font-weight: 800;
            color: var(--white);
            margin: 0 0 12px;
            position: relative;
            z-index: 1;
        }
        
        .quote-header h2 span {
            color: var(--primary);
            position: relative;
        }
        
        .quote-header h2 span::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--primary);
            border-radius: 2px;
        }
        
        .quote-header p {
            font-size: 17px;
            color: #cbd5e1;
            margin: 0;
            position: relative;
            z-index: 1;
        }
        
        /* Body Section */
        .quote-body {
            padding: 45px;
        }
        
        /* Form Sections */
        .form-section {
            margin-bottom: 40px;
            padding-bottom: 30px;
            border-bottom: 1px solid var(--border);
        }
        
        .form-section:last-child {
            border-bottom: none;
            padding-bottom: 0;
            margin-bottom: 0;
        }
        
        .section-title {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .section-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 10px rgba(255,94,20,0.2);
        }
        
        .section-icon i {
            font-size: 24px;
            color: var(--white);
        }
        
        .section-title h3 {
            font-size: 22px;
            font-weight: 700;
            color: var(--dark);
            margin: 0;
        }
        
        .section-title p {
            font-size: 13px;
            color: var(--gray);
            margin: 5px 0 0;
        }
        
        /* Form Controls */
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            font-weight: 600;
            font-size: 13px;
            color: var(--dark);
            margin-bottom: 8px;
            display: block;
        }
        
        .form-group .required {
            color: var(--primary);
        }
        
        .form-control {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid var(--border);
            border-radius: 12px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: var(--white);
        }
        
        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(255,94,20,0.1);
        }
        
        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }
        
        select.form-control {
            appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="%2364748b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>');
            background-repeat: no-repeat;
            background-position: right 16px center;
            cursor: pointer;
        }
        
        /* Checkbox Group */
        .checkbox-group {
            background: var(--light-gray);
            padding: 25px;
            border-radius: 16px;
        }
        
        .sub-label {
            font-size: 15px;
            font-weight: 700;
            color: var(--dark);
            margin: 0 0 15px;
            padding-left: 12px;
            border-left: 4px solid var(--primary);
        }
        
        .checkbox-custom {
            display: block;
            margin-bottom: 12px;
            cursor: pointer;
            font-weight: normal;
            color: var(--dark);
            font-size: 14px;
            transition: all 0.2s ease;
        }
        
        .checkbox-custom:hover {
            color: var(--primary);
            transform: translateX(3px);
        }
        
        .checkbox-custom input {
            margin-right: 10px;
            width: 17px;
            height: 17px;
            cursor: pointer;
            accent-color: var(--primary);
        }
        
        /* Submit Button */
        .submit-btn {
            text-align: center;
            margin-top: 35px;
            position: relative;
        }
        
        .theme-btn-s2 {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            border: none;
            padding: 16px 50px;
            border-radius: 50px;
            font-size: 17px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px -5px rgba(255,94,20,0.4);
            position: relative;
            overflow: hidden;
        }
        
        .theme-btn-s2::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }
        
        .theme-btn-s2:hover::before {
            width: 300px;
            height: 300px;
        }
        
        .theme-btn-s2:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px -5px rgba(255,94,20,0.5);
        }
        
        .theme-btn-s2 i {
            margin-left: 10px;
            transition: transform 0.3s ease;
        }
        
        .theme-btn-s2:hover i {
            transform: translateX(5px);
        }
        
        .theme-btn-s2:disabled {
            opacity: 0.6;
            transform: none;
        }
        
        #loader {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        /* Alert Messages */
        #success, #error {
            display: none;
            margin-top: 25px;
            padding: 15px 20px;
            border-radius: 12px;
            font-size: 14px;
            text-align: center;
            animation: slideIn 0.3s ease;
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        #success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        #error {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        /* Responsive Breakpoints */
        @media (max-width: 1200px) {
            .quote-body {
                padding: 35px;
            }
        }
        
        @media (max-width: 992px) {
            .quote-header h2 {
                font-size: 36px;
            }
            
            .quote-body {
                padding: 30px;
            }
        }
        
        @media (max-width: 768px) {
            .quote-header {
                padding: 35px 25px;
            }
            
            .quote-icon {
                width: 70px;
                height: 70px;
            }
            
            .quote-icon i {
                font-size: 35px;
            }
            
            .quote-header h2 {
                font-size: 28px;
            }
            
            .quote-header p {
                font-size: 14px;
            }
            
            .quote-body {
                padding: 25px;
            }
            
            .section-title {
                gap: 12px;
            }
            
            .section-icon {
                width: 42px;
                height: 42px;
            }
            
            .section-icon i {
                font-size: 20px;
            }
            
            .section-title h3 {
                font-size: 18px;
            }
            
            .checkbox-group {
                padding: 18px;
            }
            
            .sub-label {
                font-size: 14px;
            }
            
            .checkbox-custom {
                font-size: 13px;
            }
            
            .theme-btn-s2 {
                padding: 14px 35px;
                font-size: 15px;
            }
        }
        
        @media (max-width: 576px) {
            .quote-header {
                padding: 30px 20px;
            }
            
            .quote-body {
                padding: 20px;
            }
            
            .form-section {
                margin-bottom: 30px;
                padding-bottom: 20px;
            }
            
            .section-title {
                margin-bottom: 20px;
            }
            
            .checkbox-group {
                padding: 15px;
            }
            
            .checkbox-custom {
                margin-bottom: 10px;
            }
            
            .theme-btn-s2 {
                padding: 12px 30px;
                font-size: 14px;
                width: 100%;
            }
        }
        
        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .quote-card {
            animation: fadeInUp 0.6s ease-out;
        }
        
        /* Row Gap for Mobile */
        .row {
            margin-left: -10px;
            margin-right: -10px;
        }
        
        .row > [class*="col-"] {
            padding-left: 10px;
            padding-right: 10px;
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
        <?php $page = 'request-quote'; ?>
        <?php include 'header.php'; ?>
        <!-- end of header -->

        <!-- start page-title -->
        <!-- <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <div class="title-breadcrumb">
                            <h2>Request a Quote</h2>
                            <ol class="breadcrumb">
                                <li><a href="index-2.php">Home</a></li>
                                <li>Request a Quote</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>         -->
        <!-- end page-title -->

        <!-- start request-quote-section -->
        <section class="section-padding" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
            <div class="container">
                <div class="quote-wrapper">
                    <div class="quote-card">
                        <div class="quote-header">
                            <div class="quote-icon">
                                <i class="fa fa-file-text-o"></i>
                            </div>
                            <h2>Get a <span>Free Quote</span></h2>
                            <p>Fill out the form below and our team will get back to you within 24 hours</p>
                        </div>
                        
                        <div class="quote-body">
                            <form id="quote-form" method="POST" action="send-quote.php">
                                
                                <!-- Personal Information Section -->
                                <div class="form-section">
                                    <div class="section-title">
                                        <div class="section-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div>
                                            <h3>Personal Information</h3>
                                            <p>Tell us who you are</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="f-name">First Name <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="f_name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="l-name">Last Name</label>
                                                <input type="text" class="form-control" name="l_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="email">Email Address <span class="required">*</span></label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="phone">Phone Number <span class="required">*</span></label>
                                                <input type="tel" class="form-control" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="company">Company Name</label>
                                                <input type="text" class="form-control" name="company">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input type="text" class="form-control" name="city">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Products Section -->
                                <div class="form-section">
                                    <div class="section-title">
                                        <div class="section-icon">
                                            <i class="fa fa-cogs"></i>
                                        </div>
                                        <div>
                                            <h3>Products Interested In</h3>
                                            <p>Select the products you need</p>
                                        </div>
                                    </div>
                                    
                                    <div class="checkbox-group">
                                        <h5 class="sub-label">Water Treatment Plant</h5>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Clarifier System"> Clarifier System
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Water Filtration Plant"> Water Filtration Plant
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Water Softener Plant"> Water Softener Plant
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Ultra Filtration Plant"> Ultra Filtration Plant
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Reverse Osmosis Plant"> Reverse Osmosis Plant
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Seawater Desalination Plant"> Seawater Desalination Plant
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Demineralization Plant"> Demineralization Plant
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <h5 class="sub-label">Waste Water Treatment</h5>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Sewage Treatment Plant"> Sewage Treatment Plant
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Effluent Treatment Plant"> Effluent Treatment Plant
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Condensate Polishing Unit"> Condensate Polishing Unit
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Zero Liquid Discharge System"> Zero Liquid Discharge System
                                                </label>
                                            </div>
                                        </div>
                                        
                                        <h5 class="sub-label">Manufacturing</h5>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Surge Vessel"> Surge Vessel
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="ASME Vessels U & R Stamp"> ASME Vessels U & R Stamp
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Pressure Vessel"> Pressure Vessel
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="products[]" value="Electrical Control Panels"> Electrical Control Panels
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Services Section -->
                                <div class="form-section">
                                    <div class="section-title">
                                        <div class="section-icon">
                                            <i class="fa fa-wrench"></i>
                                        </div>
                                        <div>
                                            <h3>Services Required</h3>
                                            <p>Select the services you need</p>
                                        </div>
                                    </div>
                                    
                                    <div class="checkbox-group">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="services[]" value="Operation & Maintenance"> Operation & Maintenance
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="services[]" value="Annual Maintenance Contract"> Annual Maintenance Contract
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="services[]" value="Revamping & Refurbishing"> Revamping & Refurbishing
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="services[]" value="Environmental Consultancy"> Environmental Consultancy
                                                </label>
                                                <label class="checkbox-custom">
                                                    <input type="checkbox" name="services[]" value="Online Monitoring System"> Online Monitoring System
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Additional Information Section -->
                                <div class="form-section">
                                    <div class="section-title">
                                        <div class="section-icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div>
                                            <h3>Additional Information</h3>
                                            <p>Tell us more about your requirements</p>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label>Project Requirements / Message</label>
                                                <textarea name="message" class="form-control" rows="5" placeholder="Please provide details about your requirements, capacity, timeline, etc."></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="submit-btn">
                                    <button type="submit" class="theme-btn-s2">Submit Quote Request <i class="fa fa-paper-plane"></i></button>
                                    <div id="loader">
                                        <i class="fa fa-refresh fa-spin fa-2x"></i>
                                    </div>
                                </div>
                                
                                <div id="success"></div>
                                <div id="error"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end request-quote-section -->

        <!-- start site-footer -->
        <?php include 'footer.php'; ?>
        <!-- end site-footer -->
    </div>

    <!-- All JavaScript files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/script.js"></script>
    
    <!-- AJAX Quote Form Script -->
    <script>
    $(document).ready(function() {
        $('#quote-form').on('submit', function(e) {
            e.preventDefault();
            
            $('#loader').show();
            $('.submit-btn button').prop('disabled', true);
            $('#success').hide();
            $('#error').hide();
            
            var formData = {
                'f_name': $('input[name="f_name"]').val(),
                'l_name': $('input[name="l_name"]').val(),
                'email': $('input[name="email"]').val(),
                'phone': $('input[name="phone"]').val(),
                'company': $('input[name="company"]').val(),
                'city': $('input[name="city"]').val(),
                'message': $('textarea[name="message"]').val(),
                'budget': $('select[name="budget"]').val(),
                'products': $('input[name="products[]"]:checked').map(function() { return $(this).val(); }).get(),
                'services': $('input[name="services[]"]:checked').map(function() { return $(this).val(); }).get()
            };
            
            $.ajax({
                type: 'POST',
                url: 'send-quote.php',
                data: formData,
                dataType: 'json'
            })
            .done(function(data) {
                $('#loader').hide();
                $('.submit-btn button').prop('disabled', false);
                
                if (data.status === 'success') {
                    $('#success').html('<i class="fa fa-check-circle"></i> ' + data.message).show();
                    $('#quote-form')[0].reset();
                    setTimeout(function() {
                        $('#success').fadeOut();
                    }, 5000);
                } else {
                    $('#error').html('<i class="fa fa-exclamation-circle"></i> ' + data.message).show();
                    setTimeout(function() {
                        $('#error').fadeOut();
                    }, 5000);
                }
            })
            .fail(function() {
                $('#loader').hide();
                $('.submit-btn button').prop('disabled', false);
                $('#error').html('<i class="fa fa-exclamation-circle"></i> An error occurred. Please try again later.').show();
                setTimeout(function() {
                    $('#error').fadeOut();
                }, 5000);
            });
        });
    });
    </script>
</body>

</html>