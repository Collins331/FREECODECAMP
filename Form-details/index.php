<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];

    // Set the recipient email address
    $to = "ochiengcollinsoduor2@gmail.com";

    // Set the subject of the email
    $subject = "Contact Form Submission from $name";

    // Create the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$number";

    // Send the email
    mail($to, $subject, $email_message);

    // Redirect to a thank you page or display a success message
    header("Location: done.html");
    exit;
}
?>
