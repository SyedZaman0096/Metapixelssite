

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["cn"];
    $email = $_POST["em"];
    $phone = $_POST["pn"];
    $message = $_POST["msg"];

    // Recipient email address
    $to = "raheel.wahab@salsoft.net"; // Replace with the recipient's email address

    // Email subject
    $subject = "Contact Form Submission from $name";

    // Email headers
    $headers = "From: do-not-reply@metapixelsinc.com" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Cc: raheel.wahab@salsoft.net" . "\r\n" . // Replace with CC recipient's email
               "Bcc: i.m.raheelwahab@salsoft.net" . "\r\n"; // Replace with BCC recipient's email

    // Email content
    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n";
    $emailContent .= "Phone: $phone\n";
    $emailContent .= "Message:\n$message";

    // Send the email
    $mailSent = mail($to, $subject, $emailContent, $headers);

    if ($mailSent) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
    
    // Redirect the current page to another page.
header('Location: thank-you.php');
}
?>
