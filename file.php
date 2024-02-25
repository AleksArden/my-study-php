<?php
if (str_contains($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
?>
    <h3>str_contains() return true</h3>
    <p>You use Chrome</p>
<?php

} else {
?>
    <h3>str_contains() возвращает false</h3>
    <p>Вы не используете Firefox</p>
<?php
}
