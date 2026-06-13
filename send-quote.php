<?php
// Strict POST Request Enforcement
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Invalid request method.");
}

// --------------------------------------------------------------
// 1. Collect Form Inputs (Matches form field attributes)
// --------------------------------------------------------------
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$project = trim($_POST['project'] ?? '');
$message = trim($_POST['message'] ?? '');
$subject = "New Contact Form Enquiry from $name";

// --------------------------------------------------------------
// 2. Honeypot Bot-Trap Protection Check
// --------------------------------------------------------------
if (!empty($_POST['honeypot'])) {
    exit("Spam detected.");
}

// --------------------------------------------------------------
// 3. Complete Server-Side Required Input Validations
// --------------------------------------------------------------
if (empty($name) || empty($email) || empty($message)) {
    die("Please fill in all required fields (Name, Email, Message).");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email address.");
}

// FIXED SECURITY REGEX: Checks for true layout link elements instead of individual character patterns
if (preg_match('/(https?:\/\/|www\.|href\s*=)/i', $message)) {
    die("Links or URL sequences are not allowed in the message.");
}

// Optional 10-digit standard formatting phone logic pattern match
if (!empty($phone) && !preg_match('/^[0-9]{10}$/', $phone)) {
    die("Phone number must be exactly 10 digits.");
}

// --------------------------------------------------------------
// 4. Google reCAPTCHA v2 Server-Side Verification Loop
// --------------------------------------------------------------
$recaptcha_secret = "6LeHWBktAAAAADMNB64hugbrkNEIWrPqprs7w01g"; 
$recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

if (empty($recaptcha_response)) {  
    die("Please verify that you are not a robot (reCAPTCHA).");
}

// Fire verifying curl execution protocol handshake to Google endpoints
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
$context       = stream_context_create($options);
$verify_result = file_get_contents($verify_url, false, $context);
$result_json   = json_decode($verify_result, true);

if (!$result_json || !$result_json['success']) {
    die("reCAPTCHA verification failed. Please try again.");
}

// --------------------------------------------------------------
// 5. PHPMailer Integration Infrastructure 
// --------------------------------------------------------------
require '../vendor/autoload.php'; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // GoDaddy Non-Authenticated Local Relay Configurations 
    $mail->isSMTP();
    $mail->Host       = 'relay-hosting.secureserver.net';
    $mail->SMTPAuth   = false;    // Authentication not required
    $mail->Port       = 25;
    $mail->SMTPSecure = false;    // Encryption not required
    $mail->SMTPDebug  = 0;        // Debugging strictly set to 0 to prevent raw JSON parsing breaks

    // Sender and Destination Handlers
    $mail->setFrom('noreply@xformtechnologies.com'); 
    $mail->addAddress('xformtech27@gmail.com');       // Target administrative destination mail inbox
    $mail->addReplyTo($email, $name);                 // Allows direct administrative customer replies

    // Content Packing Architecture
    $mail->Subject = $subject;
    $mail->isHTML(true);
    
    // Plain text alternative backup formatting
    $mail->AltBody = "Name: $name\nEmail: $email\nPhone: $phone\nProject: $project\nMessage:\n$message";

    // Clean inline encapsulated HTML design output composition
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
            <div class='header'><h2 style='margin:0;'>Request Quote Form</h2></div>
            <div class='field'><div class='label'>Name:</div><div class='value'>" . htmlspecialchars($name) . "</div></div>
            <div class='field'><div class='label'>Email:</div><div class='value'>" . htmlspecialchars($email) . "</div></div>
            <div class='field'><div class='label'>Phone:</div><div class='value'>" . htmlspecialchars($phone) . "</div></div>
            <div class='field'><div class='label'>Project:</div><div class='value'>" . htmlspecialchars($project) . "</div></div>
            <div class='field'><div class='label'>Message:</div><div class='value'>" . nl2br(htmlspecialchars($message)) . "</div></div>
        </div>
    </body>
    </html>";

    $mail->send();
    
    // Explicit return match context for parsing JavaScript listeners engine 
    echo "success";   
    
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>