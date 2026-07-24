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
    $fullName = htmlspecialchars(trim($_POST['full_name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $position = htmlspecialchars(trim($_POST['position'] ?? ''));
    $messageBody = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Validation (basic)
    if (empty($fullName) || empty($email) || empty($phone) || empty($position)) {
        header("Location: careers.php?status=error#apply-form");
        exit();
    }

    // Handle File Upload
    $resumeUploaded = false;
    $resumePath = '';
    $resumeName = '';
    
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $allowedExtensions = ['pdf', 'doc', 'docx'];
        $fileName = $_FILES['resume']['name'];
        $fileSize = $_FILES['resume']['size'];
        $fileTmp = $_FILES['resume']['tmp_name'];
        
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
        // Validate file extension
        if (in_array($fileExtension, $allowedExtensions)) {
            // Validate file size (e.g. max 5MB)
            if ($fileSize <= 5242880) {
                $resumeUploaded = true;
                $resumePath = $fileTmp;
                $resumeName = $fileName;
            } else {
                // File too large
                header("Location: careers.php?status=error&msg=file-too-large#apply-form");
                exit();
            }
        } else {
            // Invalid extension
            header("Location: careers.php?status=error&msg=invalid-file#apply-form");
            exit();
        }
    } else {
        // Resume is required
        header("Location: careers.php?status=error&msg=no-file#apply-form");
        exit();
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
        $mail->setFrom('your_email@example.com', 'Corelix Careers');
        $mail->addAddress('hr@corelix.com', 'Corelix HR'); // HR or Recruitment Email
        $mail->addReplyTo($email, $fullName);

        // --- Attachments ---
        if ($resumeUploaded && !empty($resumePath)) {
            $mail->addAttachment($resumePath, $resumeName);
        }

        // --- Content ---
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "New Job Application: $position - $fullName";
        
        // Email Body
        $mail->Body    = "
            <h2>New Job Application Received</h2>
            <p><strong>Name:</strong> {$fullName}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Position:</strong> {$position}</p>
            <br>
            <p><strong>Cover Letter/Message:</strong></p>
            <p>" . nl2br($messageBody) . "</p>
            <br>
            <p><em>The applicant's resume is attached to this email.</em></p>
        ";
        $mail->AltBody = "New Application:\nName: $fullName\nEmail: $email\nPhone: $phone\nPosition: $position\nMessage: $messageBody";

        // Send Email
        $mail->send();
        
        // Redirect to careers page with success
        header("Location: careers.php?status=success#apply-form");
        exit();

    } catch (Exception $e) {
        // Error
        header("Location: careers.php?status=error#apply-form");
        exit();
    }
} else {
    // Not a POST request
    header("Location: careers.php");
    exit();
}
?>
