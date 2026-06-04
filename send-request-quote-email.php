<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize inputs
    $firstname = trim($_POST['f_name'] ?? '');
    $lastname  = trim($_POST['l_name'] ?? '');
    $email     = trim($_POST['email'] ?? '');
    $phone     = trim($_POST['phone'] ?? '');
    $company   = trim($_POST['company'] ?? '');
    $city      = trim($_POST['city'] ?? '');
    $message   = trim($_POST['message'] ?? '');

    $products = $_POST['products'] ?? [];
    $services = $_POST['services'] ?? [];

    $subject = "New Quote Request - Vintage Flow Hydro System";

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email address.']);
        exit();
    }

    // Required fields
    if (empty($firstname) || empty($email) || empty($phone)) {
        echo json_encode(['status' => 'error', 'message' => 'Please fill all required fields.']);
        exit();
    }

    // Spam filter
    if (preg_match('/http|www|href/i', $message)) {
        echo json_encode(['status' => 'error', 'message' => 'Links are not allowed in message.']);
        exit();
    }

    require_once 'class-phpmailer.php';
    require_once 'class-smtp.php';

    $mail = new PHPMailer();

    // SMTP CONFIG
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    $mail->Username = 'xformtech27@gmail.com'; // CHANGE THIS - Your Gmail address
    $mail->Password = 'mout vlbd boul bsdg';// Gmail App Password

    // IMPORTANT FIX: use business email as sender identity
    $mail->From = 'xformtech27@gmail.com';
    $mail->FromName = "Website Quote Form";

    $mail->addReplyTo($email, $firstname . ' ' . $lastname);
    $mail->addAddress('xformtech27@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = $subject;

    // Convert arrays to readable text
    $product_list = !empty($products) ? implode(", ", $products) : "N/A";
    $service_list = !empty($services) ? implode(", ", $services) : "N/A";

    $mail->Body = "
    <html>
    <body style='font-family: Arial;'>
        <h2>New Quote Request</h2>

        <p><b>Name:</b> {$firstname} {$lastname}</p>
        <p><b>Email:</b> {$email}</p>
        <p><b>Phone:</b> {$phone}</p>
        <p><b>Company:</b> {$company}</p>
        <p><b>City:</b> {$city}</p>

        <hr>

        <p><b>Products:</b> {$product_list}</p>
        <p><b>Services:</b> {$service_list}</p>

        <hr>

        <p><b>Message:</b><br>" . nl2br(htmlspecialchars($message)) . "</p>
    </body>
    </html>";

    $mail->AltBody =
        "Quote Request\n\n" .
        "Name: $firstname $lastname\n" .
        "Email: $email\n" .
        "Phone: $phone\n" .
        "Company: $company\n" .
        "City: $city\n" .
        "Products: $product_list\n" .
        "Services: $service_list\n" .
        "Message: $message\n";

    if ($mail->send()) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Your quote request has been sent successfully.'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Mail failed: ' . $mail->ErrorInfo
        ]);
    }

} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>