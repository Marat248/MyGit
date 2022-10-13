<?php
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if (trim($name) == "")
        echo "enter your name";
    else if (strlen(trim($name)) <= 1)
        echo "no such name exist";
    else if (trim($email) == "" || trim($pass) == "" || trim($_POST['message']) == "")
        echo "enter all data";
    else {
//        $_POST['password'] = md5($pass);
//            echo "<h1>all data</h1>";
//        foreach ($_POST as $key => $value)
//            echo "<p>$value</p>";

        header('Location: about.php');
        exit;
    }