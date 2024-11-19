<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

$dogs = array(
    array("Chihuahua", "Mexico", 20),
    array("Husky", "Siberia", 15),
    array("Bulldog", "England", 10),
);

echo $dogs[0][0]. "Origin: ". $dogs[0][1]. "Life Span: " .$dogs[0][2]. ".<br>";
echo $dogs[1][0]. "Origin: ". $dogs[1][1]. "Life Span: " .$dogs[1][2]. ".<br>";
echo $dogs[2][0]. "Origin: ". $dogs[2][1]. "Life Span: " .$dogs[2][2]. ".<br>";

for ($row = 0; $row<3; $row++){
    echo "<p><b>Row Number $row </b> </p>";
    echo "<ul>";
    for ($col = 0; $col<3; $col++){
        echo "<li>".$dogs[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>

<?php

$phones = array(
    array("Iphone14", "20", 10),
    array("Iphone 13", "20", 20),
    array("Iphone12", "20", 25),
    array("Iphone11", "25", 40),
);

echo $phones[0][0]. "In stock: ". $phones[0][1]. "Sold: " .$phones[0][2]. ".<br>";
echo $phones[1][0]. "In stock: ". $phones[1][1]. "Sold: " .$phones[1][2]. ".<br>";
echo $phones[2][0]. "In stock: ". $phones[2][1]. "Sold: " .$phones[2][2]. ".<br>";
echo $phones[3][0]. "In stock: ". $phones[3][1]. "Sold: " .$phones[0][2]. ".<br>";

for ($row = 0; $row<3; $row++){
    echo "<p><b>Row Number $row </b> </p>";
    echo "<ul>";
    for ($col = 0; $col<3; $col++){
        echo "<li>".$phones[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>