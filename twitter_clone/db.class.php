<?php
require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class db {
	// host
	private $host;

	// user
	private $user;

	// password
	private $password;

	// database
	private $database = 'twitter_clone';

	// port
	private $port;

	function __construct() {
		$this->host = $_ENV['DB_HOST'];
		$this->user = $_ENV['DB_USER'];
		$this->password = $_ENV['DB_PASSWORD'];
		$this->port = (int) $_ENV['DB_PORT'];
	}

	// connection logic
	public function connect() {
		$conn = mysqli_connect(
			$this->host,
			$this->user,
			$this->password,
			$this->database,
			$this->port
		);

		echo mysqli_connect_error();
		mysqli_set_charset($conn, 'utf8');

		if (mysqli_connect_errno()) {
			echo 'Error connecting to database: '.mysqli_connect_error();
		}

		return $conn;
	}
}
?>
