<?php
require_once 'db.class.php';

$user = $_POST['user'];
$password = hash('sha256', $_POST['password']);
$email = $_POST['email'];

$db = new db();
$conn = $db->connect();

$sql = "insert into users (name, email, password) values ('$user', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
	echo 'User was successfully created!';
} else {
	echo 'Error: user could not be created!';
}
?>
