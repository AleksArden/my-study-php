<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 38' ?></title>
</head>

<body>


    <?php

    function sum1($a)
    {
        return $a + 10;
    }
    $b = 10;
    echo sum1($b);
    echo '<br>';
    echo $b;
    ?>
    <br>
    <?php

    function sum2(&$a)
    {
        $a += 10;
        return $a;
    }
    $b = 10;
    echo sum2($b);
    echo '<br>';
    echo $b;
    ?>
    <br>
    <?php

    function sum(int $a, int $b): int
    {
        return $a + $b;
    }

    echo sum(2, 3)
    ?>
</body>

</html>