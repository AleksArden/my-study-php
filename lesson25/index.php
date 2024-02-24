<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 25' ?></title>
</head>

<body>
    <?php
    $i = 0;
    while ($i <= 20) {
        $i++;
        if ($i === 11) continue;
        if ($i > 20) break;
        echo "$i<br>";
    }
    echo "$i<br>";
    ?>
    <?php
    $t = 10;
    while ($t--) {

        echo "$t<br>";
    }

    ?>
</body>

</html>