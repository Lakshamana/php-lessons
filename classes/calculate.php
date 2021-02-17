<?php
require_once('./Calculator.php');

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$calculator = new Calculator();
$calculator->setN1($n1);
$calculator->setN2($n2);

$result = $calculator->calculate($_POST['operation']);

echo 'Result: ' . $result;
?>
