<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Lesson 8" ?></title>
</head>

<body>
    <?php
    echo gettype("123")
    ?>
    <br>
    <?php
    echo is_int(1)
    ?>
    <br>
    <?php
    $num = '1';
    if (is_int($num))
        echo "It's number";
    else
        echo "It isn't number"

    ?>
</body>

</html>