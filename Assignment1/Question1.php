<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num1 = 10;
$num2 = 25;
$num3 = 5;

if ($num1 > $num2 && $num1 > $num3) {
    echo "Greatest number is: $num1<br>";
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo "Greatest number is: $num2<br>";
} else {
    echo "Greatest number is: $num3<br>";
}

if ($num1 < $num2 && $num1 < $num3) {
    echo "Smallest number is: $num1";
} elseif ($num2 < $num1 && $num2 < $num3) {
    echo "Smallest number is: $num2";
} else {
    echo "Smallest number is: $num3";
}

?>
</body>
</html>