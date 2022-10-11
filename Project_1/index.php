<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<?php
//    function info() {
//        global $x;
//        $x = 0;
//    }

    function click() {
        static $count;
        $count++;
        echo $count . "<br>";
    }

    click();
    click();
    click();

//    $x = 10;
//    info();
//    echo $x;

?>
</body>
</html>

 

