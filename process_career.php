<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars(trim($_POST['full_name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $position = htmlspecialchars(trim($_POST['position'] ?? ''));
    $messageBody = htmlspecialchars(trim($_POST['message'] ?? ''));
    $formSource = "Careers Page";

    if (empty($fullName) || empty($email) || empty($phone) || empty($position)) {
        header("Location: careers.php?status=error#apply-form");
        exit();
    }

    $resumeUploaded = false;
    $resumePath = '';
    $resumeName = '';
    $savedResumePath = '';
    
    if (isset($_FILES['resume']) && $_FILES['resume']['error'] == UPLOAD_ERR_OK) {
        $allowedExtensions = ['pdf', 'doc', 'docx'];
        $fileName = $_FILES['resume']['name'];
        $fileSize = $_FILES['resume']['size'];
        $fileTmp = $_FILES['resume']['tmp_name'];
        
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        
        if (in_array($fileExtension, $allowedExtensions)) {
            if ($fileSize <= 5242880) { // 5MB
                $resumeUploaded = true;
                $resumePath = $fileTmp;
                $resumeName = $fileName;
                
                // Save locally
                $safeName = preg_replace("/[^a-zA-Z0-9.]/", "_", basename($fileName));
                $newFileName = time() . '_' . $safeName;
                $destPath = __DIR__ . '/PHPMailerData/resumes/' . $newFileName;
                if(move_uploaded_file($fileTmp, $destPath)) {
                    $savedResumePath = 'PHPMailerData/resumes/' . $newFileName;
                    $resumePath = $destPath; // use this for mail attachment
                }
            } else {
                header("Location: careers.php?status=error&msg=file-too-large#apply-form");
                exit();
            }
        } else {
            header("Location: careers.php?status=error&msg=invalid-file#apply-form");
            exit();
        }
    } else {
        header("Location: careers.php?status=error&msg=no-file#apply-form");
        exit();
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
        'name' => $fullName,
        'email' => $email,
        'phone' => $phone,
        'service_position' => $position,
        'message' => $messageBody,
        'resume' => $savedResumePath
    ];
    
    array_unshift($inquiries, $newInquiry); // Add to beginning
    @file_put_contents($dataFile, json_encode($inquiries, JSON_PRETTY_PRINT));

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'growautoai.admin@gmail.com';
        $mail->Password   = 'pwndvkzlhcgusmep';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        $mail->setFrom('growautoai.admin@gmail.com', 'GrowAutoAI');
        $mail->addAddress('growautoai.admin@gmail.com', 'Bharti Lodhi');
        
        $mail->addReplyTo($email, $fullName);

        if ($resumeUploaded && !empty($resumePath)) {
            $mail->addAttachment($resumePath, $resumeName);
        }

        $mail->isHTML(true);
        $mail->Subject = "New Job Application: $position - $fullName";
        
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
            <p><em>The applicant's resume is attached to this email and saved on the server.</em></p>
        ";
        $mail->AltBody = "New Application:\nName: $fullName\nEmail: $email\nPhone: $phone\nPosition: $position\nMessage: $messageBody";

        $mail->send();
        
        header("Location: thanks.php");
        exit();

    } catch (Exception $e) {
        header("Location: careers.php?status=error#apply-form");
        exit();
    }
} else {
    header("Location: careers.php");
    exit();
}
?>


