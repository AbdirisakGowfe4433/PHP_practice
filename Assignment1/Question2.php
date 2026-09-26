<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$num = 15;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "The number is divisible by both 3 and 5";
} elseif ($num % 3 == 0) {
    echo "The number is divisible by 3";
} elseif ($num % 5 == 0) {
    echo "The number is divisible by 5";
} else {
    echo "The number is divisible by neither 3 nor 5";
}

?>
</body>
</html>