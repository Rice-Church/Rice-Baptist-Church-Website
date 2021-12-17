<?php

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city_town = $_POST['city_town'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];
    $message = $_POST['message'];

    $mailto = "rmbc.northboroughma@gmail.com";
    $subject = "Website Contact Form";
    $txt = "First name: ".$first_name."\n"."Last name: ".$last_name."\n"."Email: ".$email."\n"."Phone: ".$phone."\n"."Address: ".$address."\n"."City/town: ".$city_town."\n"."State: ".$state."\n"."Zip code: ".$zip_code."\n\n".$message;
    $headers = 'From: '.$email."\r\n".'Reply-To: '.$email;

    mail($mailto, $subject, $txt, $headers);
    header("Location: thankyou.html");
}