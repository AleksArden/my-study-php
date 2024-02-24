<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 33' ?></title>
</head>

<body>
    <?php

    $num = [1, 2, 3, 'qwe', 'asd'];
    for ($i = 0; $i < count($num); $i++) {
        echo "$num[$i] <br>";
    }

    ?>
    <?php

    $arr = [
        'name' => 'Aleks',
        'age' => 45,
        'online' => 'true'
    ];
    foreach ($arr as $key => $value) {
        echo "$key : $value <br>";
    }



    ?>
</body>

</html>