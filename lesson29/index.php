<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 29' ?></title>
</head>

<body>
    <?php
    // $arr['one'] = 1;
    // $arr['two'] = 2;
    $arr = ['one' => "1", 'two' => "2"];
    echo $arr['one'];
    echo '<br>';
    $arr['two'];
    echo '<br>';

    echo '<br>';
    echo 'pre';
    print_r($arr);
    echo 'pre';

    ?>
</body>

</html>