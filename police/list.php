<?php
	if(!isset($_SESSION)) {
		session_start();
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
	<style>
.offscreen { 
  position: absolute; 
  top: -30em; 
  
  left: -300em; 
} 

div#vmenu { 
   margin: 0; 
   
   padding: .25em 0em .25em 0em; 
   border: solid 1px #565656; 
   background: #565656; 
   width: 13.5em; 
} 

div#vmenu ul { 
	
   margin: 0; 
   padding: 0; 
   height:366px;
   list-style: none; 
} 

div#vmenu ul li { 

   margin: 0; 
   padding: 0; 
   list-style: none; 
} 

div#vmenu ul a:link { 
   margin: 0; 
   
   padding: .2em 0em .2em .4em; 
   text-decoration: none; 
   font-weight: bold; 
   font-size: medium; 
   background-color: #565656; 
   color: #ffffff; 
   display: block; 
} 



div#vmenu ul a:active { 
   margin: 0; 
   padding: .25em .5em .25em .5em; 
   text-decoration: none; 
   font-weight: bold; 
   font-size: medium; 
   background: #4d8cba; 
   color: #ffffff; 
   display: block; 
} 

div#vmenu ul a:visited { 
   margin: 0; 
   padding:  .25em .5em .25em .5em; 
   text-decoration: none; 
   font-weight: bold; 
   font-size: medium; 
   background: #565656; 
   color: #ffffff; 
   display: block; 
} 

div#vmenu ul li a:hover { 
   margin: 0; 
   padding: .2em 0em .2em .4em; 
   text-decoration: none; 
   font-weight: bold; 
   font-size: medium; 
   background-color: #424242; 
   color: #ffffff; 
   display: block; 
}
</style>

</head>
<body style="background-color:D7CEC7">
<div id="vmenu" style="margin-top:-50px;height: 102%;"> 
<div class="user-panel">
        <div class="pull-left image">
        <img style="height:140px;width:140px;margin-left:22px;margin-top:80px" src="../img/profile.jfif" class="img-circle" alt="User Image">
        </div>
        
      </div>

      <div class="stub">
        <p style="color:ffffff;margin-left:47px">
          <?php echo $_SESSION['login_id'] ?>      </p>
        <!-- Status --></div>
<br/>
<br/>
<ul style="margin-left:25px;margin-top:200px"> 
  <li><a href="profile.php">Profile</a></li> 
  <br/>
  <li><a href="#">Previous Cases</a></li> 
  <br/>
  <li><a href="../logout.php">Logout</a></li> 
  <br/>
   
  </ul>   
</div>



<div class="conatiner" style="margin-top: -520px;margin-left: 160px">
<br/>
<?php
	$id=$_SESSION["login_id"];
	$sql = "SELECT cid FROM case_allocation WHERE lid = $id;";
	$result = mysqli_query($con, $sql);
	echo "<div style='position: relative;
				z-index: 1;
				background: #f2f2e0;
				min-height: 400px;

				width: 860px;
				margin: 0 auto;
				padding: 10px;
				text-align: center;
				position: relative;
				box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);'>";
?>
		<marquee><h2 style="color: #E50000;">Choose the case you want to look at:</h3></marquee>
		<hr style="color:#E50000;border-style: solid; width:100%;height: 2px;border:2px;z-index:10">
		<br/>
		<br/>
		
<?php
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$x = $row['cid'];
			echo "<a href='case_details.php?id=".$x."'>Case ".$x."</a>";
			$sql = "SELECT * FROM pcase WHERE cid = '$x';";
			$r = mysqli_query($con,$sql);
			$r = mysqli_fetch_array($r, MYSQLI_ASSOC);
			echo " (";
			for ($i=0; $i<30 ; $i++) { 
				echo $r["case_description"][$i];
			}
			echo "...)<br/></br><br/>";
		}
	echo "</div>";
?>
</div>
</body>
</html>