<?php
    $title = "Main page";
    require "blocks/header.php";
?>
<h1>Main page</h1>
<?php

    $message = "message";
    $to = "admin@proger.com";
    $from = "example@proger.com";
    $subject = "message subject";

    $subject = "=?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

    mail($to, $subject, $message, $headers);

    require_once "blocks/footer.php";
?>

 

