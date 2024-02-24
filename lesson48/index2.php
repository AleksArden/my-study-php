<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson 48</title>
</head>

<body>

    <?php
    $errors = [];
    if (!empty($_POST)) {
        if (empty($_POST['first'])) {
            $errors[] = 'Text field is empty';
        }
        if (empty($errors)) {
            echo htmlspecialchars(($_POST['first']));
        }
    }
    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo "<span style='color:red>$err</span><br>";
        }
    }
    ?>


    <form method="POST">
        <input type="text" name="first" value="<?php htmlspecialchars($_POST['first'], ENT_QUOTES) ?>"><br>

        <input type="submit" value="Send">
    </form>
</body>

</html>