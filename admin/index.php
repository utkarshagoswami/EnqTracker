<?php
	if(!isset($_SESSION)) {
		session_start();
	}
	$_SESSION['database_access'] = true;
	$result='NO';
	
	// Php code to check validation of entered username and password
	if(isset($_POST['submit'])){
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$myusername =  $_POST['username'];
			$mypassword = $_POST['password'];
			
			// If username or password is empty tell user,
			if($myusername == '' || $mypassword == ''){
				$result = 'empty';
			}
			else if($myusername == 'admin' || $mypassword == 'admin@$123'){
				$_SESSION['user_name'] = $myusername;
				header("location: menu.php");
			}
			else {
					// Username & password are incorrect
					$result = 'incorrect';
				
			}
		}
	}
?>
<html>
   <head>
		<meta charset="UTF-8">
		<title> Login </title>
		<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="bootstrap/jQuery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			// function fpassoverlay(){
			// 	alert("Please Contact Admin");
			// }
			// // Reset message in html if user click either username or password element
			window.onload = function(){
				document.getElementById('username').onclick = function(){
					document.getElementById("message").innerHTML="";
				}
				document.getElementById('password').onclick = function(){
					document.getElementById("message").innerHTML="";
				}
			}
		</script>
	</head>
	<body>
	<div class="container">
		<br>
		<h2>ADMINISTRATOR</h2><br><br>
			<div class="form">
				<form  method="post" action="">
					<div class="form-group ">
						<input type="text" class="form-control" placeholder="Username " id="username" name="username">
						<i class="fa fa-user"></i>
					</div>
					
					<!-- Html to show login form -->
					<div class="form-group log-status">
						<input type="password" class="form-control" placeholder="Password" id="password" name="password">
						<i class="fa fa-lock"></i>
					</div>
					
					<div id="message" style="color:ff0000"></div>
					<input class="btn" type='submit' name ='submit' value='Log in' />
				</form>
				
			</div>
	</div>
	</body>
	<?php
		// Set message as per mistake in username & password
		if($result == 'incorrect'){
			echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Wrong Username or Password"; document.getElementById("message").style.color = "#ff0000";</script>';
		}
		if($result == 'empty'){
			echo '<script type="text/javascript"> document.getElementById("message").innerHTML="Empty Username & Password"; document.getElementById("message").style.color = "#ff0000";</script>';
		}
	?>
</html>
