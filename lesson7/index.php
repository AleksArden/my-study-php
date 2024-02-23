<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Lesson 7" ?></title>
</head>

<body>
    <?php
    $bool = true;
    $str = "Hello '123456'";
    $num = 5;
    echo $str;
    echo "HHHHHhhhhhh - $num";
    echo "HHHHHhhhhhh - \$num";
    echo "HHHHHhhhhhh - \"$num\"";
    echo "HHHHHhhhhhh - {$num}y";
    // echo `dir`;
    ?>
    <br>
    <?php
    $user = "Aleks";
    if (isset($user))
        echo "True";
    else
        echo "False"

    ?>
    <br>
    <?php
    $str = "1";
    if (empty($str))
        echo "String is empty";
    else
        echo "String isn't empty"

    ?>
</body>

</html>