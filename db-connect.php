<?php
    // DB login credentials
    define("SERVER", "localhost");
    define("USER", "user");
    define("PASS", "pass");
    define("DB", "db");
	function db-query(){

		$conn = new mysqli(SERVER, USER, PASS, DB);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

        // do stuff

		$conn->close();
	}
?>