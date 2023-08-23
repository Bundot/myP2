<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Validate inputs (you can add more validation if needed)

    // Send email
    $to = "isaacdauda12@gmail.com";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
