<?php
	if(!isset($_SESSION)) {
		session_start();
	}
	if (!isset($_SESSION['login_access'])){
		header("location: no_file.php");
	}
	else {
?>
		<html>
			<head>
				<script src="bootstrap/jQuery/jquery.min.js"></script>
				<script src="bootstrap/js/bootstrap.min.js"></script>
				<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
				<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			</head>
			<body>
<?php
				// Variable $login_access defines which type of user is logged in and then give response of the page as per that
				$login_access = $_SESSION['login_access'];
				if($login_access == 0){
					header("location: police/list.php");
				}
				else if($login_access == 1) {
					header("location: judiciary/search.php");		
				}
				else if($login_access == 2){
					header("location: admin/menu.php");
				}
?>
			</body>
		</html>
<?php
	}
?>