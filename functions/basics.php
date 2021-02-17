<?php
$x = 3;
$y = 0;
$z = null;

echo (empty($x)), ' ', empty($y), ' ', empty($z), ' ', empty(''), ' ', empty(array());

echo '<br>';
echo is_numeric('1').' '.is_numeric('a').' '.is_numeric(1);
?>
