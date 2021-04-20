<?php
session_start();

require_once 'db.class.php';

$db = new db();
$conn = $db->connect();

$user = mysqli_real_escape_string($conn, $_POST['user']);
$password = hash('sha256', $_POST['password']);

$sql = "SELECT id, name, email FROM users WHERE name = '$user' and password = '$password'";

$result = mysqli_query($conn, $sql);

if ($result) {
	$data = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if (isset($data['name'])) {
		$_SESSION['username'] = $data['name'];
		$_SESSION['email'] = $data['email'];
		$_SESSION['user_id'] = $data['id'];

		header('Location: home.php');
	} else {
		header('Location: index.php?error=1');
	}
} else {
	echo mysqli_error($conn);
}
?>
