<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 34' ?></title>
</head>

<body>
    <?php
    // $first = [1 => 'red', 2 => 'blue'];
    // $second = [3 => 'brown', 4 => 'green'];
    // $con = $first + $second;

    $first = ['red', 'blue'];
    $second = ['brown', 'green'];
    $con = array_merge($first, $second);

    echo 'pre';
    print_r($con);
    echo 'pre';

    ?>
</body>

</html>