<?php
require_once 'db.class.php';

$db = new db();
$conn = $db->connect();

$user = $_POST['user'];
$password = hash('sha256', $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

$errors = array();
$check_username = "select * from users where name = '$user'";
if ($result_id = mysqli_query($conn, $check_username)) {
	$user_data = mysqli_fetch_array($result_id);

	if (isset($user_data['name'])) {
		array_push($errors, 'name');
	}
} else {
	echo 'Error on fetching users';
}

$check_email = "select * from users where email = '$email'";
if ($result_id = mysqli_query($conn, $check_email)) {
	$user_data = mysqli_fetch_array($result_id);

	if (isset($user_data['email'])) {
		array_push($errors, 'email');
	}
} else {
	echo 'Error on fetching users email';
}

if (!empty($errors)) {
	$qs = http_build_query(array('errors' => implode(',', $errors)));
	header("Location: inscrevase.php?$qs");
}

$sql = "insert into users (name, email, password) values ('$user', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
	echo 'User was successfully created!';
} else {
	echo 'Error: user could not be created!';
}
?>
