
<html>
<head>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="bootstrap/jQuery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href ="css/dashboard.css" /> 	
	
</head>
<body>
<div class="page-header">
   				  <center><img id="logo" src="logo3.png" height="15%" width="auto" /></center>
    <a href="menu.php" class="home_button">
        <span class="glyphicon glyphicon-home" data-toggle="tooltip" data-placement="bottom" title="Home"></span>
    </a>
    <div class="container">
		<br>
		<h2>Adding a Officer</h2><br><br>
			<div class="form">
				<form  method="post" action="connectivity.php">
					<div class="form-group ">
						<input type="text" class="form-control" placeholder="Username " id="username" name="username">
						
					</div>
					
					<!-- Html to show login form -->
					<div class="form-group log-status">
						<input type="text" class="form-control" placeholder="Rank" id="rank" name="rank">
						
					</div>
					<div class="form-group log-status">
						<input type="text" class="form-control" placeholder="Psid" id="psid" name="psid">
						
					</div>
					<div class="form-group log-status">
						<input type="text" class="form-control" placeholder="Address" id="address" name="address">
						
					</div>
					<div class="form-group log-status">
						<input type="number" class="form-control" placeholder="Adharno" id="adharno" name="adharno">
						
					</div>
					
					<input class="btn" type='submit' name ='submit' value='Add' />
				</form>
	


</body>
</html>