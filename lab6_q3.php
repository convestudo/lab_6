<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 6 Q3</title>
</head>
<body>

    <?php
    function calculateArea($width, $height) {
        return $width * $height;
    }

    // Example values
    $width = 4;
    $height = 2;
    $area = calculateArea($width, $height);
    ?>

    <p><?php echo "The area of a Rectangle with a width of $width and height of $height is $area"; ?></p>
    
</body>
</html>
