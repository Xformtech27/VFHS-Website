<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">

    <!-- Page Title -->
    <title>Vintage Flow Hydro System - Contact Us</title>

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
    
    <!-- Additional Styles for Contact Form & Validation -->
    <style>
        .submit-btn {
            position: relative;
        }
        
        #loader {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        #success {
            display: none;
            color: #155724;
            margin-top: 15px;
            padding: 12px;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            font-size: 14px;
        }
        
        #error {
            display: none;
            color: #721c24;
            margin-top: 15px;
            padding: 12px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 4px;
            font-size: 14px;
        }
        
        .theme-btn-s2:disabled {
            opacity: 0.6;
            cursor: not-allowed;
        }

        /* Enhanced validation error styling */
        .validation-error {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
            display: block;
            font-weight: 500;
            letter-spacing: 0.3px;
        }

        .form-control.error-border {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
            transition: all 0.2s ease;
        }

        .form-control.valid-border {
            border-color: #28a745;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .contact-form label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }
        
        /* Phone input styling for better UX */
        .phone-hint {
            font-size: 11px;
            color: #6c757d;
            margin-top: 4px;
            display: block;
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
                <img src="assets/images/preloader.gif" alt>
            </div>
        </div>
        <!-- end preloader -->

        <!-- Start header -->
        <?php $page = 'contact'; ?>
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
                                <li><a href="index.php">Home</a></li>
                                <li>Contact</li>
                            </ol>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->-
        </section>        
        <!-- end page-title -->    


        <!-- start contact-pg-contact-section -->  
        <section class="contact-pg-contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-lg-8 col-sm-8">
                        <div class="contact-form">
                            <form class="row contact-validation-active" id="contact-form-s2" novalidate>
                                <div class="col col-sm-6">
                                    <label for="f-name">First Name *</label>
                                    <input type="text" class="form-control" id="f-name" name="f_name">
                                    <span class="validation-error" id="f-name-error"></span>
                                </div>
                                <div class="col col-sm-6">
                                    <label for="l-name">Last Name</label>
                                    <input type="text" class="form-control" id="l-name" name="l_name" >
                                    <span class="validation-error" id="l-name-error"></span>
                                </div>
                                <div class="col col-sm-6">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" >
                                    <span class="validation-error" id="email-error"></span>
                                </div>
                                <div class="col col-sm-6">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone"  maxlength="10">
                                    <span class="validation-error" id="phone-error"></span>
                                    <span class="phone-hint">Enter 10-digit mobile number (only digits)</span>
                                </div>
                                <div class="col col-xs-12">
                                    <label for="message">Message *</label>
                                    <textarea id="message" name="note" class="form-control" rows="5" placeholder="How can we help you?"></textarea>
                                    <span class="validation-error" id="message-error"></span>
                                </div>
                                <div class="col col-xs-12">
                                    <div class="submit-btn">
                                        <button type="submit" class="theme-btn-s2">Send Message</button>
                                        <div id="loader">
                                            <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-xs-12">
                                    <div class="error-handling-messages">
                                        <div id="success"></div>
                                        <div id="error"></div>
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
                                <li><i class="fa fa-phone" style="color: var(--primary);"></i>+91 8605060625</li>
                                <li><i class="fa fa-envelope" style="color: var(--primary);"></i> vintagehydrosystem@gmail.com</li>
                                <li><i class="fa fa-home" style="color: var(--primary);"></i> Office No. 342, 3rd Floor, Heuu Industrial Spaces Plot No. 19/C, D-1 Block, MIDC, Chinchwad, Pune, Maharashtra 411019
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end contact-pg-contact-section -->


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
    
    <!-- Enhanced AJAX Contact Form Script with 10-Digit Phone Validation -->
    <script>
    $(document).ready(function() {
        
        // Helper function to show field error
        function showError(fieldId, message) {
            $('#' + fieldId).addClass('error-border').removeClass('valid-border');
            $('#' + fieldId + '-error').text(message).fadeIn();
        }
        
        // Helper function to clear error for a field
        function clearError(fieldId) {
            $('#' + fieldId).removeClass('error-border valid-border');
            $('#' + fieldId + '-error').text('');
        }
        
        // Helper function to mark field as valid
        function markValid(fieldId) {
            $('#' + fieldId).addClass('valid-border').removeClass('error-border');
            $('#' + fieldId + '-error').text('');
        }
        
        // Restrict phone input to only digits (0-9)
        $('#phone').on('keypress', function(e) {
            // Allow only digit keys (0-9)
            const charCode = e.which ? e.which : e.keyCode;
            if (charCode < 48 || charCode > 57) {
                e.preventDefault();
                return false;
            }
        });
        
        // Also prevent paste of non-digit characters
        $('#phone').on('paste', function(e) {
            e.preventDefault();
            const pastedText = (e.originalEvent.clipboardData || window.clipboardData).getData('text');
            // Extract only digits from pasted content
            const digitsOnly = pastedText.replace(/\D/g, '');
            if (digitsOnly.length > 0) {
                // Limit to 10 digits
                const limitedDigits = digitsOnly.substring(0, 10);
                $(this).val(limitedDigits);
                $(this).trigger('input');
            }
            return false;
        });
        
        // Real-time validation for first name
        $('#f-name').on('input blur', function() {
            const value = $(this).val().trim();
            if (value === '') {
                showError('f-name', 'First name is required.');
            } else if (value.length < 2) {
                showError('f-name', 'First name must be at least 2 characters.');
            } else if (!/^[A-Za-z\s\-']+$/.test(value)) {
                showError('f-name', 'First name can only contain letters, spaces, hyphens, and apostrophes.');
            } else {
                markValid('f-name');
            }
        });
        
        // Real-time validation for last name (optional but validated if provided)
        $('#l-name').on('input blur', function() {
            const value = $(this).val().trim();
            if (value !== '') {
                if (value.length < 2) {
                    showError('l-name', 'Last name must be at least 2 characters if provided.');
                } else if (!/^[A-Za-z\s\-']+$/.test(value)) {
                    showError('l-name', 'Last name can only contain letters, spaces, hyphens, and apostrophes.');
                } else {
                    markValid('l-name');
                }
            } else {
                clearError('l-name');
                $(this).removeClass('error-border valid-border');
            }
        });
        
        // Real-time email validation with regex
        $('#email').on('input blur', function() {
            const email = $(this).val().trim();
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            
            if (email === '') {
                showError('email', 'Email address is required.');
            } else if (!emailRegex.test(email)) {
                showError('email', 'Please enter a valid email address (e.g., name@domain.com).');
            } else if (email.length > 100) {
                showError('email', 'Email address is too long (maximum 100 characters).');
            } else {
                markValid('email');
            }
        });
        
        // Real-time phone validation - EXACTLY 10 DIGITS ONLY
        $('#phone').on('input blur', function() {
            const phone = $(this).val().trim();
            
            if (phone === '') {
                showError('phone', 'Phone number is required.');
            } else if (!/^\d{10}$/.test(phone)) {
                // Check if it's exactly 10 digits
                if (phone.length !== 10) {
                    showError('phone', 'Phone number must be exactly 10 digits.');
                } else if (!/^\d+$/.test(phone)) {
                    showError('phone', 'Phone number can only contain digits (0-9).');
                } else {
                    showError('phone', 'Please enter a valid 10-digit phone number.');
                }
            } else {
                // Check if first digit is not zero (optional but good practice)
                if (phone.charAt(0) === '0') {
                    showError('phone', 'Phone number should not start with 0.');
                } else {
                    markValid('phone');
                }
            }
        });
        
        // Real-time message validation
        $('#message').on('input blur', function() {
            const message = $(this).val().trim();
            if (message === '') {
                showError('message', 'Message content is required.');
            } else if (message.length < 10) {
                showError('message', 'Message must be at least 10 characters long.');
            } else if (message.length > 2000) {
                showError('message', 'Message cannot exceed 2000 characters.');
            } else {
                markValid('message');
            }
        });
        
        // Comprehensive form validation function
        function validateForm() {
            let isValid = true;
            
            // Validate First Name
            const firstName = $('#f-name').val().trim();
            if (firstName === '') {
                showError('f-name', 'First name is required.');
                isValid = false;
            } else if (firstName.length < 2) {
                showError('f-name', 'First name must be at least 2 characters.');
                isValid = false;
            } else if (!/^[A-Za-z\s\-']+$/.test(firstName)) {
                showError('f-name', 'First name can only contain letters, spaces, hyphens, and apostrophes.');
                isValid = false;
            } else {
                clearError('f-name');
            }
            
            // Validate Last Name (optional but validate if provided)
            const lastName = $('#l-name').val().trim();
            if (lastName !== '') {
                if (lastName.length < 2) {
                    showError('l-name', 'Last name must be at least 2 characters.');
                    isValid = false;
                } else if (!/^[A-Za-z\s\-']+$/.test(lastName)) {
                    showError('l-name', 'Last name can only contain letters, spaces, hyphens, and apostrophes.');
                    isValid = false;
                } else {
                    clearError('l-name');
                }
            } else {
                clearError('l-name');
            }
            
            // Validate Email
            const email = $('#email').val().trim();
            const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (email === '') {
                showError('email', 'Email address is required.');
                isValid = false;
            } else if (!emailRegex.test(email)) {
                showError('email', 'Please enter a valid email address.');
                isValid = false;
            } else if (email.length > 100) {
                showError('email', 'Email address is too long.');
                isValid = false;
            } else {
                clearError('email');
            }
            
            // Validate Phone - EXACTLY 10 DIGITS
            const phone = $('#phone').val().trim();
            if (phone === '') {
                showError('phone', 'Phone number is required.');
                isValid = false;
            } else if (!/^\d{10}$/.test(phone)) {
                if (phone.length !== 10) {
                    showError('phone', 'Phone number must be exactly 10 digits.');
                } else if (!/^\d+$/.test(phone)) {
                    showError('phone', 'Phone number can only contain digits (0-9).');
                } else {
                    showError('phone', 'Please enter a valid 10-digit phone number.');
                }
                isValid = false;
            } else if (phone.charAt(0) === '0') {
                showError('phone', 'Phone number should not start with 0.');
                isValid = false;
            } else {
                clearError('phone');
            }
            
            // Validate Message
            const message = $('#message').val().trim();
            if (message === '') {
                showError('message', 'Message content is required.');
                isValid = false;
            } else if (message.length < 10) {
                showError('message', 'Message must be at least 10 characters long.');
                isValid = false;
            } else if (message.length > 2000) {
                showError('message', 'Message cannot exceed 2000 characters.');
                isValid = false;
            } else {
                clearError('message');
            }
            
            return isValid;
        }
        
        // Clear all validation styles and errors
        function clearAllValidation() {
            $('#f-name, #l-name, #email, #phone, #message').removeClass('error-border valid-border');
            $('.validation-error').text('');
        }
        
        // Form submission handler with validation
        $('#contact-form-s2').on('submit', function(e) {
            e.preventDefault();
            
            // Clear previous messages
            $('#success').hide();
            $('#error').hide();
            
            // Run comprehensive validation
            if (!validateForm()) {
                // Scroll to first error
                const firstError = $('.error-border:first');
                if (firstError.length) {
                    $('html, body').animate({
                        scrollTop: firstError.offset().top - 100
                    }, 300);
                }
                
                // Show friendly error message at top
                $('#error').html('Please correct the errors highlighted in the form before submitting.').show();
                setTimeout(function() {
                    $('#error').fadeOut();
                }, 4000);
                return false;
            }
            
            // If validation passes, proceed with AJAX
            // Show loader and disable submit button
            $('#loader').show();
            $('.submit-btn button').prop('disabled', true).text('Sending...');
            
            // Get form data
            var formData = {
                'f_name': $('#f-name').val().trim(),
                'l_name': $('#l-name').val().trim(),
                'email': $('#email').val().trim(),
                'phone': $('#phone').val().trim(),
                'note': $('#message').val().trim()
            };
            
            // Send AJAX request
            $.ajax({
                type: 'POST',
                url: 'send-contact-email.php',
                data: formData,
                dataType: 'json',
                encode: true,
                timeout: 30000 // 30 second timeout
            })
            .done(function(data) {
                console.log(data);
                
                if (data && data.status === 'success') {
                    $('#success').html(data.message || 'Thank you! Your message has been sent successfully.').show();
                    // Reset form on success
                    $('#contact-form-s2')[0].reset();
                    clearAllValidation();
                    
                    // Optional: Scroll to success message
                    $('html, body').animate({
                        scrollTop: $('#success').offset().top - 50
                    }, 300);
                    
                    // Auto-hide success message after 6 seconds
                    setTimeout(function() {
                        $('#success').fadeOut();
                    }, 6000);
                } else {
                    $('#error').html(data && data.message ? data.message : 'Unable to send message. Please try again later.').show();
                }
                
                // Hide loader and re-enable button
                $('#loader').hide();
                $('.submit-btn button').prop('disabled', false).text('Send Message');
            })
            .fail(function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX Error:', textStatus, errorThrown);
                $('#loader').hide();
                $('.submit-btn button').prop('disabled', false).text('Send Message');
                
                let errorMsg = 'An error occurred. Please try again later.';
                if (textStatus === 'timeout') {
                    errorMsg = 'Request timed out. Please check your connection and try again.';
                } else if (jqXHR.status === 0) {
                    errorMsg = 'Network error. Please check your internet connection.';
                } else if (jqXHR.responseJSON && jqXHR.responseJSON.message) {
                    errorMsg = jqXHR.responseJSON.message;
                }
                
                $('#error').html(errorMsg).show();
                setTimeout(function() {
                    $('#error').fadeOut();
                }, 6000);
            });
            
            return false;
        });
        
        // Trim whitespace on blur for all inputs
        $('#contact-form-s2 input, #contact-form-s2 textarea').on('blur', function() {
            if ($(this).attr('id') !== 'phone') {
                $(this).val($(this).val().trim());
            }
            // Trigger validation on blur
            if ($(this).attr('id') === 'f-name') $('#f-name').trigger('blur');
            if ($(this).attr('id') === 'l-name') $('#l-name').trigger('blur');
            if ($(this).attr('id') === 'email') $('#email').trigger('blur');
            if ($(this).attr('id') === 'phone') $('#phone').trigger('blur');
            if ($(this).attr('id') === 'message') $('#message').trigger('blur');
        });
        
        // Prevent multiple submissions by disabling button during validation
        $('.submit-btn button').click(function() {
            if ($(this).prop('disabled')) {
                return false;
            }
        });
        
        // Initial placeholder styling hint
        $('.form-control').attr('autocomplete', 'off');
        
        // Add extra formatting: block non-digit input for phone field
        $('#phone').on('keyup', function() {
            let val = $(this).val();
            val = val.replace(/\D/g, ''); // Remove any non-digit characters
            if (val.length > 10) {
                val = val.substring(0, 10);
            }
            $(this).val(val);
        });
    });
    </script>
</body>

</html>