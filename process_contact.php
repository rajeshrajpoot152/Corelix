<?php
// Start session to store status messages if needed
session_start();

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Require the PHPMailer files manually (since Composer is not used)
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and capture form inputs
    $firstName = htmlspecialchars(trim($_POST['first_name']));
    $lastName = htmlspecialchars(trim($_POST['last_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $service = htmlspecialchars(trim($_POST['service']));
    $messageBody = htmlspecialchars(trim($_POST['message']));

    // Validation (basic)
    if (empty($firstName) || empty($email) || empty($messageBody)) {
        // Handle error (redirect back or show error)
        die("Please fill all required fields.");
    }

    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // --- Server settings (UPDATE THESE LATER) ---
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;       // Enable verbose debug output
        $mail->isSMTP();                                // Send using SMTP
        $mail->Host       = 'smtp.example.com';         // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                       // Enable SMTP authentication
        $mail->Username   = 'your_email@example.com';   // SMTP username
        $mail->Password   = 'your_password';            // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;// Enable implicit TLS encryption
        $mail->Port       = 465;                        // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // --- Recipients ---
        $mail->setFrom('your_email@example.com', 'Corelix Website');
        $mail->addAddress('info@corelix.com', 'Corelix Info'); // Add a recipient (where emails should go)
        $mail->addReplyTo($email, $firstName . ' ' . $lastName); // Reply to the user who filled the form

        // --- Content ---
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "New Contact Lead: $service - $firstName $lastName";
        
        // Email Body
        $mail->Body    = "
            <h2>New Contact Form Submission</h2>
            <p><strong>Name:</strong> {$firstName} {$lastName}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Service of Interest:</strong> {$service}</p>
            <br>
            <p><strong>Message:</strong></p>
            <p>" . nl2br($messageBody) . "</p>
        ";
        $mail->AltBody = "New Lead: \nName: $firstName $lastName \nEmail: $email \nService: $service \nMessage: $messageBody";

        // Send Email
        $mail->send();
        
        // Redirect to a thank you page or back to contact with success
        header("Location: thanks.php?status=success");
        exit();

    } catch (Exception $e) {
        // Handle error (e.g., redirect with error message)
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("Location: contact.php?status=error");
        exit();
    }
} else {
    // Not a POST request, redirect to contact
    header("Location: contact.php");
    exit();
}
?>
