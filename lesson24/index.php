<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 24' ?></title>
</head>

<body>
    <?php
    $homepage = file_get_contents('text.txt');
    $homepage .= "\n\tSecond string";


    file_put_contents('text1.txt', $homepage);
    echo $homepage;
    $date = date("Y-m-d-H-i-s");
    file_put_contents($date . '.txt', $homepage);
    ?>
</body>

</html>