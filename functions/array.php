<?php
/*
 * $products = array(10 => 'notebook', 11 => 'pc');
 * $keys = array_keys($products);
 * var_export($keys);
 *
 * echo '<br>'.count($products);
 */

/*
 * $array1 = array('arch', 'manjaro', 'slackware');
 * $array2 = array('debian', 'ubuntu', 'mint');
 *
 * var_export(array_merge($array1, $array2));
 */

/*
 * $date = '10/02/2021';
 * $array = explode('/', $date);
 *
 * var_export($array);
 */

$array = array('linux', 'macOS', 'windows');
echo implode(', ', $array);
?>
