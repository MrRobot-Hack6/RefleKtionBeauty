<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $to = "Kayleighnieuwoudt831@gmail.com"; // your email
    $subject = "New Booking Request from RefleKtion Beauty Website";

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    $message = htmlspecialchars($_POST['message']);

    $body = "You have a new booking request:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Service: $service\n";
    $body .= "Date: $date\n";
    $body .= "Time: $time\n";
    $body .= "Message: $message\n";

    $headers = "From: $email\r\nReply-To: $email\r\n";

    if(mail($to, $subject, $body, $headers)){
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
