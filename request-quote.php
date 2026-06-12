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
    
    <!-- Google reCAPTCHA v2 -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <!-- Attractive Responsive Styles for Quote Form -->
    <style>
        /* Variables */
        :root {
            --primary: #5aa1cd ;
            --primary-dark: #5aa1cd
 ;
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
        
        /* Error styles */
        .form-control.error {
            border-color: #dc3545 !important;
        }
        
        .field-error {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
            display: block;
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
        
        /* reCAPTCHA Container */
        .captcha-container {
            margin: 25px 0 20px;
            display: flex;
            justify-content: center;
        }
        
        .captcha-error {
            text-align: center;
            margin-top: 10px;
        }
        
        /* Submit Button */
        .submit-btn {
            text-align: center;
            margin-top: 35px;
            position: relative;
            min-height: 85px;
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
            display: inline-block;
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
            z-index: 10;
            background: rgba(255, 255, 255, 0.9);
            padding: 8px 16px;
            border-radius: 50px;
            white-space: nowrap;
        }

        #loader i {
            font-size: 20px;
            color: var(--primary);
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
            
            .captcha-container {
                transform: scale(0.9);
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
            
            .captcha-container {
                transform: scale(0.85);
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
                                            <h3>Request Information</h3>
                                            <p>Please provide your request details</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="f-name">First Name <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="f_name" id="f_name">
                                                <span class="field-error" id="f_name-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="l-name">Last Name</label>
                                                <input type="text" class="form-control" name="l_name" id="l_name" >
                                                <span class="field-error" id="l_name-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="email">Email Address <span class="required">*</span></label>
                                                <input type="email" class="form-control" name="email" id="email">
                                                <span class="field-error" id="email-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="phone">Phone Number <span class="required">*</span></label>
                                                <input type="tel" class="form-control" name="phone" id="phone" maxlength="10">
                                                <span class="field-error" id="phone-error"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label>Project Requirements / Message <span class="required">*</span></label>
                                                <textarea name="message" id="message" class="form-control" rows="5" placeholder="Please provide details about your requirements, capacity, timeline, etc."></textarea>
                                                <span class="field-error" id="message-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- reCAPTCHA Section -->
                                <div class="form-section">
                                    
                                    <div class="captcha-container">
                                        <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY_HERE" data-callback="onCaptchaSuccess" data-expired-callback="onCaptchaExpired"></div>
                                    </div>
                                    <div id="captcha-error" class="field-error" style="text-align: center; display: none;">❌ Please complete the reCAPTCHA verification</div>
                                </div>
                                
                                <div class="submit-btn">
                                    <button type="submit" class="theme-btn-s2" id="submitBtn">Submit Quote Request <i class="fa fa-paper-plane"></i></button>
                                    <div id="loader">
                                        <i class="fa fa-refresh fa-spin"></i> Sending...
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
    
    <!-- AJAX Quote Form Script with Validation and reCAPTCHA -->
    <script>
    // Global variable to track captcha status
    var captchaValid = false;
    
    function onCaptchaSuccess() {
        captchaValid = true;
        $('#captcha-error').hide();
        $('#captcha-error').css('display', 'none');
    }
    
    function onCaptchaExpired() {
        captchaValid = false;
        $('#captcha-error').show();
    }
    
    // Reset captcha status when resetting form
    function resetCaptcha() {
        captchaValid = false;
        if (typeof grecaptcha !== 'undefined') {
            grecaptcha.reset();
        }
    }
    
    $(document).ready(function() {
        
        // ============================================
        // VALIDATION FUNCTIONS
        // ============================================
        
        function isValidEmail(email) {
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return emailRegex.test(email);
        }
        
        function isValidPhone(phone) {
            var phoneRegex = /^[0-9]{10}$/;
            return phoneRegex.test(phone);
        }
        
        function isValidName(name) {
            if (name === "") return false;
            return /^[a-zA-Z\s]{2,50}$/.test(name);
        }
        
        // Clear all errors
        function clearErrors() {
            $('.field-error').text('');
            $('.form-control').removeClass('error');
            $('#error').hide().empty();
            $('#captcha-error').hide();
        }
        
        function showError(fieldId, message) {
            $('#' + fieldId).addClass('error');
            $('#' + fieldId + '-error').text(message);
        }
        
        // ============================================
        // REAL-TIME VALIDATION
        // ============================================
        
        // First Name validation
        $('#f_name').on('input', function() {
            var value = $(this).val().trim();
            if (value !== "") {
                $('#f_name').removeClass('error');
                $('#f_name-error').text('');
                if (value.length < 2) {
                    $('#f_name-error').text('❌ Minimum 2 characters required');
                } else if (!/^[a-zA-Z\s]+$/.test(value)) {
                    $('#f_name-error').text('❌ Only letters allowed');
                }
            } else {
                $('#f_name').removeClass('error');
                $('#f_name-error').text('');
            }
        });
        
        // Last Name validation (optional)
        $('#l_name').on('input', function() {
            var value = $(this).val().trim();
            if (value !== "") {
                $('#l_name').removeClass('error');
                $('#l_name-error').text('');
                if (value.length < 2) {
                    $('#l_name-error').text('❌ Minimum 2 characters required');
                } else if (!/^[a-zA-Z\s]+$/.test(value)) {
                    $('#l_name-error').text('❌ Only letters allowed');
                }
            } else {
                $('#l_name').removeClass('error');
                $('#l_name-error').text('');
            }
        });
        
        // Email validation
        $('#email').on('input', function() {
            var value = $(this).val().trim();
            if (value !== "") {
                $('#email').removeClass('error');
                $('#email-error').text('');
                if (!isValidEmail(value)) {
                    $('#email-error').text('❌ Invalid email format');
                }
            } else {
                $('#email').removeClass('error');
                $('#email-error').text('');
            }
        });
        
        // Phone validation
        $('#phone').on('input', function() {
            var value = $(this).val().trim();
            var numericValue = value.replace(/[^0-9]/g, '');
            if (numericValue !== value) {
                $(this).val(numericValue);
            }
            value = $(this).val().trim();
            if (value !== "") {
                $('#phone').removeClass('error');
                $('#phone-error').text('');
                if (value.length < 10) {
                    $('#phone-error').text('❌ Need ' + (10 - value.length) + ' more digit(s)');
                } else if (value.length > 10) {
                    $('#phone-error').text('❌ Only 10 digits allowed');
                    $(this).val(value.substring(0, 10));
                }
            } else {
                $('#phone').removeClass('error');
                $('#phone-error').text('');
            }
        });
        
        // Message validation
        $('#message').on('input', function() {
            var value = $(this).val().trim();
            if (value !== "") {
                $('#message').removeClass('error');
                $('#message-error').text('');
                if (value.length < 10) {
                    $('#message-error').text('❌ ' + value.length + '/10 characters minimum');
                }
            } else {
                $('#message').removeClass('error');
                $('#message-error').text('');
            }
        });
        
        // Remove error on focus
        $('#f_name, #l_name, #email, #phone, #message').on('focus', function() {
            var fieldId = $(this).attr('id');
            $('#' + fieldId).removeClass('error');
            $('#' + fieldId + '-error').text('');
            $('#error').hide();
        });
        
        // ============================================
        // FORM SUBMISSION
        // ============================================
        
        $('#quote-form').on('submit', function(e) {
            e.preventDefault();
            
            clearErrors();
            
            var firstName = $('#f_name').val().trim();
            var lastName = $('#l_name').val().trim();
            var email = $('#email').val().trim();
            var phone = $('#phone').val().trim();
            var message = $('#message').val().trim();
            
            var hasError = false;
            
            // First Name Validation
            if (firstName === "") {
                showError('f_name', '❌ First name is required');
                hasError = true;
            } else if (firstName.length < 2) {
                showError('f_name', '❌ First name must be at least 2 characters');
                hasError = true;
            } else if (!/^[a-zA-Z\s]+$/.test(firstName)) {
                showError('f_name', '❌ Only letters allowed');
                hasError = true;
            }
            
            // Last Name Validation (optional)
            if (lastName !== "") {
                if (lastName.length < 2) {
                    showError('l_name', '❌ Last name must be at least 2 characters');
                    hasError = true;
                } else if (!/^[a-zA-Z\s]+$/.test(lastName)) {
                    showError('l_name', '❌ Only letters allowed');
                    hasError = true;
                }
            }
            
            // Email Validation
            if (email === "") {
                showError('email', '❌ Email address is required');
                hasError = true;
            } else if (!isValidEmail(email)) {
                showError('email', '❌ Please enter a valid email address');
                hasError = true;
            }
            
            // Phone Validation
            if (phone === "") {
                showError('phone', '❌ Phone number is required');
                hasError = true;
            } else if (!isValidPhone(phone)) {
                showError('phone', '❌ Please enter a valid 10-digit phone number');
                hasError = true;
            }
            
            // Message Validation
            if (message === "") {
                showError('message', '❌ Message is required');
                hasError = true;
            } else if (message.length < 10) {
                showError('message', '❌ Message must be at least 10 characters');
                hasError = true;
            }
            
            // reCAPTCHA Validation
            if (!captchaValid) {
                $('#captcha-error').show();
                hasError = true;
            } else {
                $('#captcha-error').hide();
            }
            
            if (hasError) {
                $('#error').html('<i class="fa fa-exclamation-circle"></i> Please fix the errors above before submitting.').show();
                $('html, body').animate({ scrollTop: $('#error').offset().top - 150 }, 500);
                return false;
            }
            
            // Get reCAPTCHA response
            var recaptchaResponse = grecaptcha.getResponse();
            
            // Submit form
            $('#loader').show();
            $('#submitBtn').prop('disabled', true);
            
            var formData = {
                'f_name': firstName,
                'l_name': lastName,
                'email': email,
                'phone': phone,
                'message': message,
                'g-recaptcha-response': recaptchaResponse
            };
            
            $.ajax({
                type: 'POST',
                url: 'send-quote.php',
                data: formData,
                dataType: 'json',
                timeout: 30000
            })
            .done(function(data) {
                $('#loader').hide();
                $('#submitBtn').prop('disabled', false);
                
                if (data && data.status === 'success') {
                    $('#success').html('<i class="fa fa-check-circle"></i> ' + data.message).show();
                    $('#quote-form')[0].reset();
                    $('.form-control').removeClass('error');
                    $('.field-error').text('');
                    resetCaptcha();
                    $('html, body').animate({ scrollTop: $('#success').offset().top - 100 }, 500);
                    setTimeout(function() { $('#success').fadeOut(); }, 5000);
                } else {
                    var errorMsg = (data && data.message) ? data.message : 'Unable to submit request. Please try again.';
                    $('#error').html('<i class="fa fa-exclamation-circle"></i> ' + errorMsg).show();
                    resetCaptcha();
                    setTimeout(function() { $('#error').fadeOut(); }, 5000);
                }
            })
            .fail(function() {
                $('#loader').hide();
                $('#submitBtn').prop('disabled', false);
                $('#error').html('<i class="fa fa-exclamation-circle"></i> An error occurred. Please try again later.').show();
                resetCaptcha();
                setTimeout(function() { $('#error').fadeOut(); }, 5000);
            });
        });
    });
    </script>
</body>

</html>