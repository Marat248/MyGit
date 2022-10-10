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
    $nums = [4, 5, 2, 7, 0, 6];
    $nums[3] = 9;
    echo $nums[3].'<br>';

    $arr = [4, 7, true, 0.6, 'r', 12];
    $arr[0] = 'falce';
    echo $arr[0].'<br>';

    $list = ["age" => 44, "name" => "Marat", "hobby" => "Box"];
    echo $list["hobby"].'<br>';

    $matrix = [
            [4, 6, 8],
            [1, 3, 5, 7, 9],
            [0, "yes", "no"]
        ];
    echo $matrix[2][1];
?>
</body>
</html>

 

