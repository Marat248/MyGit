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
    $list = ["age" => 44, "name" => "Marat", "hobby" => "box"];
    $arr = [2,4,6,8];
//    foreach ($list as $item => $value) {
//        echo "Key: $item. Value: $value.<br>";
//    }
    foreach ($arr as $i => $value)
        echo "Index: $i. Value: $value.<br>";
?>
</body>
</html>

 

