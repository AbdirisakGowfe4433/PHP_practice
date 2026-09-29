<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

$total = 0;
$evenTotal = 0;
$oddTotal = 0;

$min = $numbers[0];
$max = $numbers[0];

echo "Array elements: ";

for ($i = 0; $i < count($numbers); $i++) {

    echo $numbers[$i] . " ";

    $total = $total + $numbers[$i];

    if ($numbers[$i] % 2 == 0) {
        $evenTotal = $evenTotal + $numbers[$i];
    } else {
        $oddTotal = $oddTotal + $numbers[$i];
    }

    if ($numbers[$i] < $min) {
        $min = $numbers[$i];
    }

    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
}

echo "<br>Total: $total";
echo "<br>Total of even elements: $evenTotal";
echo "<br>Total of odd elements: $oddTotal";

echo "<br>Minimum element: $min";
echo "<br>Minimum position(s): ";

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $min) {
        echo $i . " ";
    }
}

echo "<br>Maximum element: $max";
echo "<br>Maximum position(s): ";

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $max) {
        echo $i . " ";
    }
}

?>
</body>
</html>