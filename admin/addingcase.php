
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
    <a href="addingofficer.php" class="new_locker_button"><span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="bottom" title="Add Officer"></span></a>
    
    <div class="container">
		<br>
		<h2>Adding a Case</h2><br><br>
			<div class="form">
				<form  method="post" action="connectivityc.php">
					<div class="form-group ">
						<input type="text" class="form-control" placeholder="Applicantname " id="applname" name="applname">
						
					</div>
					
					<!-- Html to show login form -->
					<div class="form-group log-status">
						<input type="text" class="form-control" placeholder="Victimname" id="vicname" name="vicname">
						
					</div>
					<div class="form-group log-status">
						<input type="text" class="form-control" placeholder="Casedescription" id="casedesc" name="casedesc">
						
					</div>
					<div class="form-group log-status">
						<input type="date" class="form-control" placeholder="Logdingdate" id="lodgdate" name="lodgdate">
						
					</div>
					<div class="form-group log-status">
						<input type="date" class="form-control" placeholder="D-O-B" id="dob" name="dob">
						
					</div>
					<div class="form-group log-status">
						<input type="text" class="form-control" placeholder="Address" id="address" name="address">
						
					</div>
					
					<input class="btn" type='submit' name ='submit' value='Add' />
				</form>
</body>
</html>