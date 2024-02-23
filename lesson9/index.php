<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 9' ?></title>
</head>

<body>


    <?php
    $str = '58.4uuu';
    $num = $str - 18;
    echo $num;
    ?>
    <br>
    <?php
    $float = 4.3;
    $num = (int)$float;
    echo $num;
    ?>

    <br>
    <!--  -->
    <?php
    $num = 23;
    $f = (float)($num / 2) - (int)($num / 2);
    if ($f)
        echo 1;
    else
        echo 2;
    ?>
</body>

</html>