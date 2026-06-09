<?php
/**
 * send-quote.php
 * Handles quote request form submissions from request-quote.php with reCAPTCHA and Honeypot
 */

// Set JSON response header
header('Content-Type: application/json');

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit();
}

// ============================================
// HONEYPOT VALIDATION - Bot Detection
// ============================================
// If honeypot field is filled (bots fill it, humans don't), silently return success
if (isset($_POST['website']) && !empty($_POST['website'])) {
    echo json_encode(['status' => 'success', 'message' => 'Thank you! Your quote request has been received. Our team will contact you within 24 hours.']);
    exit();
}

// ============================================
// GOOGLE reCAPTCHA VALIDATION
// ============================================
// REPLACE WITH YOUR SECRET KEY FROM GOOGLE
// Get your free keys from: https://www.google.com/recaptcha/admin
$recaptcha_secret = "YOUR_SECRET_KEY_HERE";

// Check if reCAPTCHA response exists
if (isset($_POST['g-recaptcha-response'])) {
    $captcha = $_POST['g-recaptcha-response'];
    
    // Verify reCAPTCHA with Google API
    $verify_url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $captcha;
    $response = file_get_contents($verify_url);
    $responseData = json_decode($response);
    
    if (!$responseData->success) {
        echo json_encode(['status' => 'error', 'message' => 'reCAPTCHA verification failed. Please try again.']);
        exit();
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Please complete the reCAPTCHA verification.']);
    exit();
}

// ============================================
// SANITIZE AND VALIDATE INPUTS
// ============================================
$firstname = isset($_POST['f_name']) ? trim($_POST['f_name']) : '';
$lastname = isset($_POST['l_name']) ? trim($_POST['l_name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

$subject = "New Quote Request - Vintage Flow Hydro System";

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid email address. Please enter a valid email.']);
    exit();
}

// Ensure required fields are filled
if (empty($firstname)) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter your first name.']);
    exit();
}

if (empty($email)) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter your email address.']);
    exit();
}

if (empty($phone)) {
    echo json_encode(['status' => 'error', 'message' => 'Please enter your phone number.']);
    exit();
}

// Block inputs containing links (to prevent spam messages with URLs)
if (!empty($message) && preg_match('/http|www|href|bit\.ly|goo\.gl/i', $message)) {
    echo json_encode(['status' => 'error', 'message' => 'Links are not allowed in the message.']);
    exit();
}

// ============================================
// METHOD 1: Try using PHPMailer first
// ============================================
$mail_sent = false;
$error_message = '';

if (file_exists('class-phpmailer.php') && file_exists('class-smtp.php')) {
    require_once 'class-phpmailer.php';
    require_once 'class-smtp.php';
    
    $mail = new PHPMailer();
    
    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        
        // YOUR EMAIL CONFIGURATION - UPDATE THESE VALUES
        $mail->Username = 'xformtech27@gmail.com'; // Your Gmail address
        $mail->Password = 'mout vlbd boul bsdg'; // Your Gmail app password
        
        // Email headers
        $mail->setFrom('xformtech27@gmail.com', $firstname . ' ' . $lastname);
        $mail->addReplyTo($email, $firstname . ' ' . $lastname);
        
        // WHERE TO SEND THE EMAIL - CHANGE THIS TO YOUR BUSINESS EMAIL
        $mail->addAddress('kalyanibhor2004@gmail.com'); // Your recipient email
        
        // Email settings
        $mail->isHTML(true);
        $mail->Subject = $subject;
        
        // Email body (HTML)
        $fullname = $firstname . (!empty($lastname) ? ' ' . $lastname : '');
        $mail->Body = "
        <!DOCTYPE html>
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; background-color: #f4f7fc; padding: 20px; }
                .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 20px rgba(0,0,0,0.1); }
                .header { background: linear-gradient(135deg, #ff5e14
 , #e04e0e); padding: 20px; text-align: center; }
                .header h2 { margin: 0; color: #ffffff; font-size: 22px; }
                .content { padding: 25px; }
                .field { margin-bottom: 18px; padding-bottom: 12px; border-bottom: 1px solid #eef2f6; }
                .label { font-weight: bold; color: #ff5e14
 ; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 5px; }
                .value { color: #333333; font-size: 15px; line-height: 1.5; margin-top: 5px; }
                .footer { background: #f8fafc; padding: 15px; text-align: center; font-size: 12px; color: #666; border-top: 1px solid #eef2f6; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>📋 New Quote Request</h2>
                    <p style='color: rgba(255,255,255,0.9); margin: 5px 0 0; font-size: 13px;'>Vintage Flow Hydro System</p>
                </div>
                <div class='content'>
                    <div class='field'>
                        <div class='label'>📌 Full Name</div>
                        <div class='value'><strong>" . htmlspecialchars($fullname) . "</strong></div>
                    </div>
                    <div class='field'>
                        <div class='label'>✉️ Email Address</div>
                        <div class='value'><a href='mailto:" . htmlspecialchars($email) . "'>" . htmlspecialchars($email) . "</a></div>
                    </div>
                    <div class='field'>
                        <div class='label'>📞 Phone Number</div>
                        <div class='value'><a href='tel:" . htmlspecialchars($phone) . "'>" . htmlspecialchars($phone) . "</a></div>
                    </div>
                    <div class='field'>
                        <div class='label'>💬 Project Requirements / Message</div>
                        <div class='value'>" . nl2br(htmlspecialchars($message ?: 'No message provided')) . "</div>
                    </div>
                </div>
                <div class='footer'>
                    <p>This quote request was submitted from the Vintage Flow Hydro System website.</p>
                    <p>📅 " . date('F j, Y, g:i a') . "</p>
                    <p>🌐 IP Address: " . ($_SERVER['REMOTE_ADDR'] ?? 'Unknown') . "</p>
                    <p>✅ reCAPTCHA Verified</p>
                </div>
            </div>
        </body>
        </html>
        ";
        
        // Plain text alternative
        $mail->AltBody = "NEW QUOTE REQUEST\n\n";
        $mail->AltBody .= "Name: " . $fullname . "\n";
        $mail->AltBody .= "Email: " . $email . "\n";
        $mail->AltBody .= "Phone: " . $phone . "\n";
        $mail->AltBody .= "Message:\n" . ($message ?: 'No message provided') . "\n";
        $mail->AltBody .= "\n---\nSubmitted on: " . date('Y-m-d H:i:s');
        $mail->AltBody .= "\nreCAPTCHA: Verified";
        
        // Send the email
        if ($mail->send()) {
            $mail_sent = true;
        } else {
            $error_message = $mail->ErrorInfo;
        }
    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}

// ============================================
// METHOD 2: Fallback to PHP mail() function if PHPMailer fails
// ============================================
if (!$mail_sent) {
    $to = "kalyanibhor2004@gmail.com"; // CHANGE THIS - Your recipient email
    $fullname = $firstname . (!empty($lastname) ? ' ' . $lastname : '');
    $subject = "Quote Request from " . $fullname;
    
    // HTML Email Body
    $email_body = "
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; background-color: #f4f7fc; padding: 20px; }
            .container { max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; padding: 20px; }
            .header { background: linear-gradient(135deg, #ff5e14
 , #e04e0e); padding: 15px; text-align: center; color: white; border-radius: 8px; }
            .field { margin: 15px 0; padding: 10px; background: #f8fafc; border-radius: 8px; }
            .label { font-weight: bold; color: #ff5e14
 ; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'><h2>New Quote Request</h2></div>
            <div class='field'><span class='label'>Name:</span><br>" . htmlspecialchars($fullname) . "</div>
            <div class='field'><span class='label'>Email:</span><br>" . htmlspecialchars($email) . "</div>
            <div class='field'><span class='label'>Phone:</span><br>" . htmlspecialchars($phone) . "</div>
            <div class='field'><span class='label'>Message:</span><br>" . nl2br(htmlspecialchars($message ?: 'No message')) . "</div>
            <div class='field'><span class='label'>reCAPTCHA:</span><br>Verified ✓</div>
        </div>
    </body>
    </html>";
    
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    
    if (mail($to, $subject, $email_body, $headers)) {
        $mail_sent = true;
    }
}

// ============================================
// Return JSON response to the AJAX form
// ============================================
if ($mail_sent) {
    echo json_encode([
        'status' => 'success', 
        'message' => 'Thank you! Your quote request has been sent successfully. Our team will contact you within 24 hours.'
    ]);
} else {
    // Still return success to user (don't show technical errors)
    echo json_encode([
        'status' => 'success', 
        'message' => 'Thank you! Your quote request has been received. Our team will contact you within 24 hours.'
    ]);
}

exit();
?>