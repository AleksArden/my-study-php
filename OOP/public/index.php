<?php


require_once('../vendor/autoload.php');

$worker = new \App\Worker('Aleks', 20, [5, 6, 10]);

$visitor = new \App\Visitor();

$developer = new \App\Developer("Sad", 25, [5, 6, 7, 8, 4]);

$worker->work();
echo '<br>';
$visitor->visit();
echo '<br>';
// var_dump($developer);
// echo '<br>';
// var_dump($worker);
echo '<br>';
$developer->work();
echo '<br>';
$developer->setPosition('developer');
var_dump($developer->getPosition());
echo '<br>';
$developer->rest();
echo '<br>';
$salary = \App\Salary::count($developer->$hours);
var_dump($salary);
