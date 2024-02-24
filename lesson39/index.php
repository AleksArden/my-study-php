<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 39' ?></title>
</head>

<body>


    <?php

    function sum()
    {
        static $count = 0;
        return ++$count;
    }
    $b = 10;
    echo sum() . "<br>";
    echo sum() . "<br>";
    echo sum() . "<br>";
    echo sum() . "<br>";

    ?>
    <br>
    <?php

    function sum1()
    {
        $count = 0;
        return ++$count;
    }
    $b = 10;
    echo sum1() . "<br>";
    echo sum1() . "<br>";
    echo sum1() . "<br>";
    echo sum1() . "<br>";

    ?>

</body>

</html>