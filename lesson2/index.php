<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "New page"; ?></title>
</head>
<?php
echo "Current date and time";
echo date(DATE_RSS);
?>
<br>
<?php
echo 8 + 3 - 4;
echo "Text";
?>
<br>
<?php
if (mt_rand(0, 1)) {
?>
    <div style="color: blue">Blue text</div>
<?php
} else {
?> <div style="color: red">Red text</div>
<?php }
?>

<body>

</body>

</html>