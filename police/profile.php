<?php
	if(!isset($_SESSION)) {
		session_start();
		$id=$_SESSION['login_id'];
	}
	include '../db/config_database.php';
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Pending Cases</title>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<script src="../bootstrap/jQuery/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="conatiner">
<br/>
<?php
	$sql = "SELECT * FROM member_detail WHERE lid = $id;";
	$result = mysqli_query($con, $sql);
	echo "<div style='position: relative;
				z-index: 1;
				background: #f2f2e0;
				height: auto;
				max-width: 360px;
				margin: 0 auto;
				padding: 10px;
				position: relative;
				box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);'>";
		echo "<h3>Details</h3><br>";
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			echo $row["lid"]."<br>";
			echo $row["name"]."<br>";
			echo $row["rank"]."<br>";
			echo $row["psid"]."<br>";
			echo $row["adhar_no"]."<br>";
			echo $row["address_pol"]."<br>";
			echo "<br/>";
		}
	echo "</div>";

	$sql = "SELECT * FROM  WHERE lid = $id;";
	$result = mysqli_query($con, $sql);
	echo "<div style='position: relative;
				z-index: 1;
				background: #f2f2e0;
				height: auto;
				max-width: 360px;
				margin: 0 auto;
				padding: 10px;
				position: relative;
				box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);'>";
		echo "<h3>Details</h3><br>";
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			/*echo $row["lid"]."<br>";
			echo $row["name"]."<br>";
			echo $row["rank"]."<br>";
			echo $row["psid"]."<br>";
			echo $row["adhar_no"]."<br>";
			echo $row["address_pol"]."<br>";
			echo "<br/>";*/
		}
	echo "</div>";	
?>
</div>
</body>
</html>