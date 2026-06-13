<?php
// Set response content type to JSON so the frontend jQuery script can read it safely
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["status" => "error", "message" => "Invalid request method."]);
    exit;
}

// --------------------------------------------------------------
// 1. Collect and sanitize form data from contact.php inputs
// --------------------------------------------------------------
$f_name  = trim($_POST['f_name'] ?? '');
$l_name  = trim($_POST['l_name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['note'] ?? ''); // Maps 'note' field from your specific contact.php form
$project = "Vintage Flow Hydro System Contact Request"; // Static project tag since field isn't in your form

// Merge First Name and Last Name cleanly for the email body
$name = trim($f_name . ' ' . $l_name);
$subject = "New Contact Form Enquiry from $name";

// --------------------------------------------------------------
// 2. Honeypot check (hidden field must remain completely empty)
// --------------------------------------------------------------
if (!empty($_POST['honeypot'])) {
    echo json_encode(["status" => "error", "message" => "Spam detected."]);
    exit;
}

// --------------------------------------------------------------
// 3. Required field validation
// --------------------------------------------------------------
if (empty($f_name) || empty($email) || empty($message)) {
    echo json_encode(["status" => "error", "message" => "Please fill in all required fields (First Name, Email, Message)."]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["status" => "error", "message" => "Invalid email address."]);
    exit;
}

if (preg_match('/http|www|href|&#/i', $message)) {
    echo json_encode(["status" => "error", "message" => "Links or HTML entities are not allowed in the message."]);
    exit;
}

// Phone validation (Matches the exactly 10 digits frontend rule)
if (!empty($phone) && !preg_match('/^[0-9]{10}$/', $phone)) {
    echo json_encode(["status" => "error", "message" => "Phone number must be exactly 10 digits."]);
    exit;
}

// --------------------------------------------------------------
// 4. reCAPTCHA verification (server-side)
// --------------------------------------------------------------
$recaptcha_secret = "6LeHWBktAAAAADMNB64hugbrkNEIWrPqprs7w01g"; // Your secure secret key
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

if (empty($recaptcha_response)) {  
    echo json_encode(["status" => "error", "message" => "Please verify that you are not a robot (reCAPTCHA)."]);
    exit;
}

// Verify response with Google API endpoints
$verify_url = "https://www.google.com/recaptcha/api/siteverify";
$verify_data = [
    'secret'   => $recaptcha_secret,
    'response' => $recaptcha_response,
    'remoteip' => $_SERVER['REMOTE_ADDR']
];
$options = [
    'http' => [
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($verify_data)
    ]
];
$context  = stream_context_create($options);
$verify_result = file_get_contents($verify_url, false, $context);
$result_json = json_decode($verify_result, true);

if (!$result_json['success']) {
    echo json_encode(["status" => "error", "message" => "reCAPTCHA verification failed. Please try again."]);
    exit;
}

// --------------------------------------------------------------
// 5. PHPMailer setup using Composer autoload
// --------------------------------------------------------------
require 'vendor/autoload.php'; // Load Composer's autoloader
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Server settings – identical configuration to your working environment scripts
    $mail->isSMTP();
    $mail->Host       = 'relay-hosting.secureserver.net';
    $mail->SMTPAuth   = false;    // No authentication needed
    $mail->Port       = 25;
    $mail->SMTPSecure = false;    // No encryption
    $mail->SMTPDebug  = 0;        // Kept at 0 to clean response data streaming for AJAX execution

    // Sender and recipient routing addresses
    $mail->setFrom('noreply@xformtechnologies.com'); 
    $mail->addAddress('xformtech27@gmail.com');       // Destination mailbox address
    $mail->addReplyTo($email, $name);                 // Allows direct replies to the sender

    // Content configuration details
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    // Clean inline template logic referenced from your sample
    $mail->Body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; background: #f9f9f9; padding: 10px; }
            .container { max-width: 600px; margin: 0 auto; background: #fff; border-radius: 8px; padding: 20px; border: 1px solid #ddd; }
            .header { background: #f4f4f4; padding: 15px; text-align: center; border-bottom: 2px solid #0d6efd; }
            .field { margin-bottom: 15px; padding-bottom: 10px; border-bottom: 1px solid #eee; }
            .label { font-weight: bold; color: #0d6efd; font-size: 12px; text-transform: uppercase; }
            .value { margin-top: 5px; color: #333; font-size: 14px; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'><h2 style='margin:0;'>Contact Enquiry Form</h2></div>
            <div class='field'><div class='label'>Name:</div><div class='value'>" . htmlspecialchars($name) . "</div></div>
            <div class='field'><div class='label'>Email:</div><div class='value'>" . htmlspecialchars($email) . "</div></div>
            <div class='field'><div class='label'>Phone:</div><div class='value'>" . htmlspecialchars($phone) . "</div></div>
            <div class='field'><div class='label'>Project:</div><div class='value'>" . htmlspecialchars($project) . "</div></div>
            <div class='field'><div class='label'>Message:</div><div class='value'>" . nl2br(htmlspecialchars($message)) . "</div></div>
        </div>
    </body>
    </html>";

    $mail->send();
    
    // Send standard success callback token matching JSON specifications
    echo json_encode(["status" => "success", "message" => "Thank you! Your message has been sent successfully."]);
    
} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => "Mailer Error: " . $mail->ErrorInfo]);
}
?>