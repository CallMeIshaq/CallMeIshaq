<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $comments = $_POST['comments'];

    // Send the booking details via email
    $to = "blissfulhennabyismat@gmail.com";
    $subject = "New Henna Booking from $name";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nDate: $date\nComments: $comments";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    
    echo "Booking request submitted!";
  }
?>
