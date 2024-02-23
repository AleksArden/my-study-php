<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 11' ?></title>
</head>

<body>
    <?php
    require 'point.php';
    $point1 = new Point;
    $point1->x = 13;
    $point1->y = 8;
    echo  $point1->x;

    $point2 = new Point;
    $point1->x = 99;
    $point1->y = 88;
    echo  $point1->y;

    unset($point2);
    echo $point2->x
    ?>
</body>

</html>