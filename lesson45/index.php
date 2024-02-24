<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 45' ?></title>
</head>

<body>

    <?php
    $red = 255;
    $green = 255;
    $blue = 100;
    printf('#%X%X%X', $red, $green, $blue);
    ?>
    <br>
    <?php

    echo '<pre>';
    printf('%4.2d', 45);
    echo '<br>';
    printf('%04d', 45);
    echo '<pre>';

    ?>


</body>

</html>