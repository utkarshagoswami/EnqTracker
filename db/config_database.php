<?php
	if(!isset($_SESSION) || !isset($_SESSION['database_access'])) {
		// echo 'session not started';
		// include '../index.php';
	}
	else {
		$con = mysqli_connect("localhost", "root", "");
		if (!$con) {
			die('Could not connect: ' . mysqli_error());
		}
		$db = mysqli_select_db($con, "casefile");
		if(!$db)
			echo " Connection to the database failed ";

		$conn = mysqli_connect("localhost","root","");
		if (!$conn) {
			die('Could not connect: ' . mysqli_error());
		}

		$db = mysqli_select_db($conn, "casefile");
		if(!$db)
			echo " Connection to the database failed ";
	}
?>
