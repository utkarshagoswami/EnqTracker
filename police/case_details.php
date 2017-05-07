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
	<div class="conatiner">
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


<?php
	$id=$_GET["id"];
	$sql = "SELECT * FROM pcase WHERE cid = $id;";
	$result = mysqli_query($con, $sql);
	echo "<div style='position: relative;
				z-index: 1;
				background: #f2f2e0;
				height: auto;
				max-width: 360px;
				margin-top:-570px;
				margin-left: 280px;
				padding: 10px;
				position: relative;
				box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);'>";
		echo "<h3 style='color:#E50000 ;'>Details</h3><br>";
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			echo $row["cid"]."<br>";
			echo $row["victim_name"]."<br>";
			echo $row["case_description"]."<br>";
			echo $row["date_of_lodging"]."<br>";
			echo "<br/>";
		}
	echo "</div>";

	$sql = "SELECT * FROM to_do_list WHERE case_id = $id;";
	$result = mysqli_query($con, $sql);
	echo "<div style='position: relative;
				z-index: 1;
				background: #f2f2e0;
				height: auto;
				max-width: 360px;
				margin-top:-220px;
				margin-left: 900px;
				padding: 10px;
				position: relative;
				box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);'>";
		echo "<h3 style='color:#E50000 ;'>ToDo List</h3><br>";
		while($row = mysqli_fetch_array($result, MYSQLI_NUM)){
			if($row[1]==0){
				echo "<a class='btn btn-danger' href='mark_done.php?id=1&cid=$id'><span class='glyphicon glyphicon-ok'></span></a>";
				echo "<span style='color:red'>Presence of Guardian</span>";
			}
			else{
				echo "<span class='glyphicon glyphicon-check'></span>";
				echo "<span style='color:green'>Presence of Guardian</span>";
			}
			echo "<br><br>";
			if($row[2]==0){
				echo "<a class='btn btn-danger' href='mark_done.php?id=2&cid=$id'><span class='glyphicon glyphicon-ok'></span></a>";
				echo "<span style='color:red'>Informing RCC</span>";
			}
			else{
				echo "<span class='glyphicon glyphicon-check'></span>";
				echo "<span style='color:green'>Informing RCC</span>";
			}
			echo "<br><br>";
			if($row[3]==0){
				echo "<a class='btn btn-danger' href='mark_done.php?id=3&cid=$id'><span class='glyphicon glyphicon-ok'></span></a>";
				echo "<span style='color:red'>Registered Counsellor</span>";
			}
			else{
				echo "<span class='glyphicon glyphicon-check'></span>";
				echo "<span style='color:green'>Registered Counsellor</span>";
			}
			echo "<br><br>";
			if($row[4]==0){
				echo "<a class='btn btn-danger' href='mark_done.php?id=4&cid=$id'><span class='glyphicon glyphicon-ok'></span></a>";
				echo "<span style='color:red'>Presence Of Lady Constable</span>";
			}
			else{
				echo "<span class='glyphicon glyphicon-check'></span>";
				echo "<span style='color:green'>Presence Of Lady Constable</span>";
			}
			echo "<br><br>";
			if($row[5]==0){
				echo "<a class='btn btn-danger' href='mark_done.php?id=5&cid=$id'><span class='glyphicon glyphicon-ok'></span></a>";
				echo "<span style='color:red'>Statment In Private</span>";
			}
			else{
				echo "<span class='glyphicon glyphicon-check'></span>";
				echo "<span style='color:green'>Statment In Private</span>";
			}
			echo "<br><br>";
			if($row[6]==0){
				echo "<a class='btn btn-danger' href='mark_done.php?id=6&cid=$id'><span class='glyphicon glyphicon-ok'></span></a>";
				echo "<span style='color:red'>Immediate Medical Presence</span>";
			}
			else{
				echo "<span class='glyphicon glyphicon-check'></span>";
				echo "<span style='color:green'>Immediate Medical Presence</span>";
			}
			echo "<br><br>";
			if($row[7]==0){
				echo "<a class='btn btn-danger' href='mark_done.php?id=7&cid=$id'><span class='glyphicon glyphicon-ok'></span></a>";
				echo "<span style='color:red'>If Child Inform Child Welfare Committe</span>";
			}
			else{
				echo "<span class='glyphicon glyphicon-check'></span>";
				echo "<span style='color:green'>If Child Inform Child Welfare Committe</span>";
			}
			echo "<br><br>";
		}
	echo "</div>";

	$sql = "SELECT a.lid,b.lid,b.name,b.rank FROM case_allocation a, member_detail b WHERE a.lid=b.lid and a.cid = $id;";
	$result = mysqli_query($con, $sql);
	echo "<div style='position: relative;
				z-index: 1;
				background: #f2f2e0;
				height: auto;
				max-width: 360px;
				margin-top:-50px;
				margin-left: 280px;
				padding: 10px;
				position: relative;
				box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);'>";
		echo "<h3 style='color:#E50000 ;'>Investigating Team</h3><br>";
		echo "<ul>";
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			echo "<li>";
			echo $row["name"];
			echo " (".$row["rank"].")</li><br>";
			echo "<br/>";
		}
	echo "</ul></div>";

	$sql = "SELECT note FROM notes WHERE cid = $id;";
	$result = mysqli_query($con, $sql);
	echo "<div style='position: relative;
				z-index: 1;
				background: #f2f2e0;
				height: auto;
				max-width: 360px;
				margin-top:-105px;
				margin-left: 900px;
				padding: 10px;
				position: relative;
				box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);'>";
		echo "<h3 style='color:#E50000 ;'>Notes</h3><br>";
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			echo $row["note"];
			echo "<br/>";
		}
	echo "</div>";

	echo "<br>";
?>
</div>
</body>
</html>