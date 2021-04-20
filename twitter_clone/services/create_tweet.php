<?php
session_start();

if (!isset($_SESSION['username'])) {
	header('Location: index.php?error=1');
}

require_once '../db.class.php';

$db = new db();
$conn = $db->connect();

$content = mysqli_real_escape_string($conn, $_POST['content']);

if (!$content) {
	echo 'Content must be provided and not empty';
	die();
}

$user_id = $_SESSION['user_id'];
if (!$user_id) {
	echo 'User must be logged in';
	header('Location: index.php?error=1');
	die();
}

$sql = "INSERT INTO `tweets` (user_id, content) values ($user_id, '$content')";

echo mysqli_query($conn, $sql) ? 'ok' : 'Error: could not create tweet';
?>
