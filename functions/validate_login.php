<?php
require_once('helpers.php');

$login = $_POST['login'];
$password = $_POST['password'];

$validation = validate_login($login, $password);

echo 'Access '.($validation ? 'Granted' : 'Denied');
?>
