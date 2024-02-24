<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Lesson 40' ?></title>
</head>

<body>


    <?php



    ?>
    <br>
    <?php

    function recurcsia($counter)
    {
        if ($counter > 0) {
            echo ($counter--) . '<br>';
            recurcsia($counter);
        } else return;
    }
    recurcsia(15);
    ?>

</body>

</html>