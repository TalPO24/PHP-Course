<!-- <?php

echo "Hello World!"; // How to return a string

$name = 'Tal'; // How to create a variable
echo $name;

$x = 1;
$y = &$x; // If we want to change the y variable to x variable we need to add the & operator

$x = 3;
echo $y;


$firstName = "Tal";

echo "Hello {$firstName}";
echo 'Hello' . $firstName; // To concutonate we add a "."
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
     <!-- <?php 
    echo "Hello world"
    ?> -->

    <?= 'Hello world'?> 
    </h1> 

    <P>My first paragraph</p>
</body>
</html>

<?php 
// Variable Variables
$foo = 'bar';

$$foo = 'baz';

echo "$foo, {$$foo}";
?>