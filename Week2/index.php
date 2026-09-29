<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 PHP Practice</title>
</head>

<body>

<?php

echo "Week 2 PHP Practice";
echo "<br><br>";


// 1. Associative Arrays

echo "Associative Arrays:<br>";

$student = array(
    "name" => "Abdi",
    "age" => 21,
    "course" => "PHP"
);

echo "Student Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "Course: " . $student["course"] . "<br>";

echo "<br>Student Details:<br>";

foreach ($student as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

echo "<br>";


// 2. Do While and Nested Loop

echo "Do While and Nested Loop:<br><br>";

$number = 10;

do {
    echo "Number: " . $number . "<br>";
    $number = $number - 2;
} while ($number >= 2);

echo "<br>Nested Loop:<br>";

for ($i = 1; $i <= 3; $i++) {

    for ($j = 1; $j <= 4; $j++) {
        echo "Group " . $i . " - Item " . $j . "<br>";
    }

}

echo "<br>";


// 3. Nested Arrays

echo "Nested Arrays:<br><br>";

$products = array(
    "Laptop" => array(
        "price" => 600,
        "brand" => "Dell"
    ),

    "Phone" => array(
        "price" => 350,
        "brand" => "Samsung"
    ),

    "Tablet" => array(
        "price" => 250,
        "brand" => "Lenovo"
    )
);

foreach ($products as $product => $details) {
    echo "Product: " . $product . "<br>";
    echo "Price: $" . $details["price"] . "<br>";
    echo "Brand: " . $details["brand"] . "<br><br>";
}


// 4. Numeric Arrays

echo "Numeric Arrays:<br>";

$fruits = array("Apple", "Mango", "Orange", "Banana");

for ($i = 0; $i < count($fruits); $i++) {
    echo ($i + 1) . ". " . $fruits[$i] . "<br>";
}

echo "<br>";


// 5. While Loop Practice

echo "While Loop Practice:<br>";

$count = 1;

while ($count <= 5) {
    echo "Practice number: " . $count . "<br>";
    $count++;
}

?>

</body>
</html>