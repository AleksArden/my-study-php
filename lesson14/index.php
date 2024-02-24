<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 14' ?></title>
</head>

<body>
    <?php
    if (define('NUMBER', 1)) {

        echo NUMBER;
    }
    if (defined('NUMBER')) {
        echo 'The variables was created';
    }

    ?>
    '<br>'
    <?php
    $num = mt_rand(1, 50);
    $name = "VALUE($num)";
    define($name, $num);
    echo constant($name);
    ?>
    '<br>'
    <?php
    echo "File's name" . __FILE__ . '<br>';
    echo "String" . __LINE__ . '<br>';
    ?>
</body>

</html>