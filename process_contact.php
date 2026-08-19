<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars(trim($_POST['first_name'] ?? ''));
    $lastName = htmlspecialchars(trim($_POST['last_name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $service = htmlspecialchars(trim($_POST['service'] ?? ''));
    $messageBody = htmlspecialchars(trim($_POST['message'] ?? ''));
    $formSource = htmlspecialchars(trim($_POST['form_source'] ?? 'Unknown Contact Form'));

    if (empty($firstName) || empty($email) || empty($messageBody)) {
        die("Please fill all required fields.");
    }

    // Save to JSON
    $dataFile = __DIR__ . '/PHPMailerData/inquiries.json';
    $inquiries = [];
    if (file_exists($dataFile)) {
        $inquiries = json_decode(file_get_contents($dataFile), true) ?? [];
    }
    
    $newInquiry = [
        'id' => uniqid(),
        'date' => date('Y-m-d H:i:s'),
        'source' => $formSource,
        'name' => trim("$firstName $lastName"),
        'email' => $email,
        'phone' => $phone,
        'service_position' => $service,
        'message' => $messageBody,
        'resume' => ''
    ];
    
    array_unshift($inquiries, $newInquiry); // Add to beginning
    file_put_contents($dataFile, json_encode($inquiries, JSON_PRETTY_PRINT));

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'rajeshrshiv@gmail.com';
        $mail->Password   = 'lksidyfwppxditbu';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('rajeshrshiv@gmail.com', 'Corelix Website');
        $mail->addAddress('rajeshrshiv@gmail.com', 'Rajesh');
        $mail->addAddress('info@corelix.com', 'Corelix Info');
        $mail->addReplyTo($email, $firstName . ' ' . $lastName);

        $mail->isHTML(true);
        $mail->Subject = "New Contact Lead: $service - $firstName $lastName";
        
        $mail->Body    = "
            <h2>New Contact Form Submission ($formSource)</h2>
            <p><strong>Name:</strong> {$firstName} {$lastName}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Service of Interest:</strong> {$service}</p>
            <br>
            <p><strong>Message:</strong></p>
            <p>" . nl2br($messageBody) . "</p>
        ";
        $mail->AltBody = "New Lead ($formSource): \nName: $firstName $lastName \nEmail: $email \nPhone: $phone \nService: $service \nMessage: $messageBody";

        $mail->send();
        
        $referer = $_SERVER['HTTP_REFERER'] ?? 'contact.php';
        if (strpos($referer, '?') !== false) {
            $referer = explode('?', $referer)[0];
        }
        header("Location: " . $referer . "?status=success");
        exit();

    } catch (Exception $e) {
        $referer = $_SERVER['HTTP_REFERER'] ?? 'contact.php';
        if (strpos($referer, '?') !== false) {
            $referer = explode('?', $referer)[0];
        }
        header("Location: " . $referer . "?status=error");
        exit();
    }
} else {
    header("Location: contact.php");
    exit();
}
?>
