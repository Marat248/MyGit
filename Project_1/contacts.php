<?php
session_start();
$title = "Contacts";
require_once "blocks/header.php";
?>
    <h1 class="mt-5"><?=$title?></h1>
    <form action="check_contacts.php" method="post">
        <input type="text" name="username" value="<?=$_SESSION['username']?>" placeholder="Enter your name" class="from-control"><br>
        <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Enter your email" class="from-control"><br>
        <input type="text" name="subject" value="<?=$_SESSION['subject']?>" placeholder="Message subject" class="from-control"><br>
        <textarea name="message" placeholder="Your message" class="form-contral"><?=$_SESSION['message']?></textarea><br>
        <button type="submit" class="btn btn-succes">Send</button>
    </form>

<?php


require_once "blocks/footer.php";
?>