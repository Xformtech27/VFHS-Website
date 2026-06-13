<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Clinkers Inc.">

    <title>Vintage Flow Hydro System - Request a Quote</title>

    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <style>
        :root {
            --primary: #5aa1cd;
            --primary-dark: #3a7ca5;
            --dark: #0f172a;
            --dark-light: #1e293b;
            --gray: #64748b;
            --light-gray: #f8fafc;
            --border: #e2e8f0;
            --white: #ffffff;
        }
        
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
            background: radial-gradient(circle, rgba(90,161,205,0.1), transparent);
            border-radius: 50%;
        }
        
        .quote-header::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 250px;
            height: 250px;
            background: radial-gradient(circle, rgba(90,161,205,0.08), transparent);
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
            box-shadow: 0 10px 25px -5px rgba(90,161,205,0.4);
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
            bottom: -50%;
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
        
        .quote-body {
            padding: 45px;
        }
        
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
            box-shadow: 0 5px 10px rgba(90,161,205,0.2);
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
            box-shadow: 0 0 0 3px rgba(90,161,205,0.1);
        }
        
        .form-control.error {
            border-color: #dc3545 !important;
        }
        
        .field-error {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }
        
        .field-error.show {
            display: block;
        }
        
        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }
        
        .captcha-container {
            margin: 25px 0 20px;
            display: flex;
            justify-content: center;
        }
        
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
            box-shadow: 0 10px 20px -5px rgba(90,161,205,0.4);
            display: inline-block;
        }

        .theme-btn-s2:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px -5px rgba(90,161,205,0.5);
        }

        .theme-btn-s2:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none;
        }

        .theme-btn-s2 i {
            margin-left: 10px;
        }

        #form-response-msg {
            margin-bottom: 20px;
            padding: 12px;
            border-radius: 12px;
            font-size: 15px;
            font-weight: 600;
            text-align: center;
        }
        
        @media (max-width: 768px) {
            .quote-header h2 { font-size: 28px; }
            .quote-body { padding: 25px; }
            .theme-btn-s2 { padding: 14px 35px; font-size: 15px; }
        }
        
        @media (max-width: 576px) {
            .quote-header { padding: 30px 20px; }
            .quote-body { padding: 20px; }
            .theme-btn-s2 { width: 100%; }
        }
        
        .quote-card {
            animation: fadeInUp 0.6s ease-out;
        }
        
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
    <div class="page-wrapper">
        <div class="preloader">
            <div class="preloader-inner">
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>

        <?php $page = 'request-quote'; ?>
        <?php include 'header.php'; ?>

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
                            <div id="form-response-msg"></div>

                            <form id="contactForm" method="POST" action="send-quote.php">
                                <input type="text" name="honeypot" id="honeypot" style="display: none !important;" tabindex="-1" autocomplete="off">

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
                                                <label for="name">Full Name <span class="required">*</span></label>
                                                <input type="text" class="form-control" name="name" id="name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="email">Email Address <span class="required">*</span></label>
                                                <input type="email" class="form-control" name="email" id="email" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="phone">Phone Number <span class="required">*</span></label>
                                                <input type="tel" class="form-control" name="phone" id="phone" pattern="^[0-9]{10}$" maxlength="10" placeholder="10-digit number" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label for="project">Project / Company</label>
                                                <input type="text" class="form-control" name="project" id="project">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-group">
                                                <label for="message">Project Requirements / Message <span class="required">*</span></label>
                                                <textarea name="message" id="message" class="form-control" rows="5" placeholder="Please provide details about your requirements, capacity, timeline, etc." required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-section">
                                    <div class="captcha-container">
                                        <div class="g-recaptcha" data-sitekey="6LeHWBktAAAAANoD0RVGxGrodIlhuMsh5WSjCdgt"></div>
                                    </div>
                                    <span id="captcha-error" class="text-danger small w-100 text-center mt-1" style="font-size: 13px; display: block; font-weight: 500; color: #dc3545; text-align: center;"></span>
                                </div>
                                
                                <div class="submit-btn">
                                    <button type="submit" class="theme-btn-s2" id="submitBtn">Submit Quote Request <i class="fa fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>
    <script src="assets/js/script.js"></script>
    
    <script>
        function validateCaptcha() {
            var honeypot = document.getElementById("honeypot").value;
            if (honeypot.length > 0) {
                console.log("Spam detected.");
                return false;
            }

            var response = grecaptcha.getResponse();
            if (response.length === 0) {
                document.getElementById("captcha-error").textContent = "❌ Please verify that you are not a robot.";
                return false;
            }
            
            document.getElementById("captcha-error").textContent = "";
            return true;
        }

        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Immediate execution to prevent non-AJAX flash drops

            if (!validateCaptcha()) {
                return false;
            }

            var responseMsg = document.getElementById('form-response-msg');
            var submitButton = document.getElementById('submitBtn');

            responseMsg.style.background = '#e2e8f0';
            responseMsg.style.color = '#334155';
            responseMsg.innerHTML = '⏳ Sending your request...';
            submitButton.disabled = true;

            var formData = new FormData(this);

            fetch('send-quote.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                submitButton.disabled = false;
                if (data.trim() === "success") {
                    responseMsg.style.background = '#d4edda';
                    responseMsg.style.color = '#155724';
                    responseMsg.style.border = '1px solid #c3e6cb';
                    responseMsg.innerHTML = '✅ Thank you! Your quote request has been sent successfully.';
                    document.getElementById('contactForm').reset();
                    grecaptcha.reset();
                } else {
                    responseMsg.style.background = '#f8d7da';
                    responseMsg.style.color = '#721c24';
                    responseMsg.style.border = '1px solid #f5c6cb';
                    responseMsg.innerHTML = '❌ ' + data;
                }
                
                window.scrollTo({
                    top: $(responseMsg).offset().top - 120,
                    behavior: 'smooth'
                });
            })
            .catch(error => {
                submitButton.disabled = false;
                responseMsg.style.background = '#f8d7da';
                responseMsg.style.color = '#721c24';
                responseMsg.innerHTML = '❌ Error submitting form.';
            });
        });
    </script>
</body>
</html>