<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Sanitize and validate inputs
    $firstname = isset($_POST['f_name']) ? filter_var(trim($_POST['f_name']), FILTER_SANITIZE_STRING) : '';
    $lastname = isset($_POST['l_name']) ? filter_var(trim($_POST['l_name']), FILTER_SANITIZE_STRING) : '';
    $email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
    $phone = isset($_POST['phone']) ? filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING) : '';
    $message = isset($_POST['note']) ? filter_var(trim($_POST['note']), FILTER_SANITIZE_STRING) : '';
    
    $subject = "New Contact Form Enquiry - Vintage Flow Hydro System";
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        exit();
    }
    
    // Ensure required fields are filled
    if (empty($firstname) || empty($email) || empty($message)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill in all required fields.']);
        exit();
    }
    
    // Block inputs containing links (to prevent spam messages with URLs)
    if (preg_match('/http|www|href/i', $message)) {
        echo json_encode(['status' => 'error', 'message' => 'Links are not allowed in the message.']);
        exit();
    }
    
    // Include PHPMailer classes
    require_once 'class-phpmailer.php';
    require_once 'class-smtp.php';
    
    $mail = new PHPMailer();
    
    // SMTP configuration
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    
    // YOUR EMAIL CONFIGURATION - UPDATE THESE VALUES
    $mail->Username = 'xformtech27@gmail.com'; // CHANGE THIS - Your Gmail address
    $mail->Password = 'mout vlbd boul bsdg'; // CHANGE THIS - Your Gmail app password
    
    // Email headers
    $mail->From = $email;
    $mail->FromName = $firstname . ' ' . $lastname;
    $mail->addReplyTo($email, $firstname . ' ' . $lastname);
    
    // WHERE TO SEND THE EMAIL - CHANGE THIS TO YOUR BUSINESS EMAIL
    $mail->addAddress('xformtech27@gmail.com'); // CHANGE THIS - Your recipient email
    
    // Email settings
    $mail->isHTML(true);
    $mail->Subject = $subject;
    
    // Email body (HTML)
    $mail->Body = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; }
            .container { max-width: 600px; margin: 0 auto; padding: 20px; }
            .header { background-color: #f4f4f4; padding: 10px; text-align: center; }
            .content { padding: 20px; }
            .field { margin-bottom: 15px; }
            .label { font-weight: bold; color: #333; }
            .value { margin-top: 5px; color: #666; }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>New Contact Form Enquiry</h2>
            </div>
            <div class='content'>
                <div class='field'>
                    <div class='label'>Name:</div>
                    <div class='value'>" . htmlspecialchars($firstname) . " " . htmlspecialchars($lastname) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Email:</div>
                    <div class='value'>" . htmlspecialchars($email) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Phone:</div>
                    <div class='value'>" . htmlspecialchars($phone) . "</div>
                </div>
                <div class='field'>
                    <div class='label'>Message:</div>
                    <div class='value'>" . nl2br(htmlspecialchars($message)) . "</div>
                </div>
            </div>
        </div>
    </body>
    </html>
    ";
    
    // Plain text alternative for email clients that don't support HTML
    $mail->AltBody = "New Contact Form Enquiry\n\n";
    $mail->AltBody .= "Name: " . $firstname . " " . $lastname . "\n";
    $mail->AltBody .= "Email: " . $email . "\n";
    $mail->AltBody .= "Phone: " . $phone . "\n";
    $mail->AltBody .= "Message: " . $message . "\n";
    // $mail->SMTPDebug = 2;
    // Send the email
    if ($mail->send()) {
        echo json_encode(['status' => 'success', 'message' => 'Your enquiry sent successfully. We will contact you shortly.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Your enquiry could not be sent. Please try again later. Error: ' . $mail->ErrorInfo]);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>