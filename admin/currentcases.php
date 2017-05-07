
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
<a href = "../logout.php" class="logout_button">
            <span class="glyphicon glyphicon-log-out" data-toggle="tooltip" data-placement="bottom" title="Logout"></span>
      </a>

            <center><img id="logo" src="logo3.png" height="15%" width="auto" /></center>
    <a href="menu.php" class="home_button">
        <span class="glyphicon glyphicon-home" data-toggle="tooltip" data-placement="bottom" title="Home"></span>
    </a>
      <a href="addingcase.php" class="new_locker_button"><span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="bottom" title="Add Officer"></span></a>
    
          </div>

</div>
<div class="nav-bar">
	
	<ul class = "nav nav-tabs">
   <li ><a href = "menu.php">Police Officer</a></li>
   <li class = "active"><a href = "#">Current Cases</a></li>
   <li><a href = "freezedcases.php">Freezed Cases</a></li>
   
</ul>
</div>
<div class="outer">
 <div class="table">
   <table class="table">
     <thead>
       <th><center>Case Id</center></th>
       <th><center>Applicant Id</center></th>
       <th><center>Victim Name</center></th>
       <th><center>Case Description</center></th>
       <th><center>Date of Lodging</center></th>
    </thead>
    <tbody>

 <?php
if(!isset($_SESSION)) {
    session_start();
  }
  include '../db/config_database.php';
 $sel_user = "select * from pcase ";

$run_user = mysqli_query($con, $sel_user);

	while($row=mysqli_fetch_array($run_user,MYSQLI_ASSOC)){
?> 
<tr>
            <!--Each table column is echoed in to a td cell-->
            <td><center><?php echo $row['cid']; ?></center></td>
            <td><center><?php echo $row['appid']; ?></center></td>
			<td><center><?php echo $row['victim_name']; ?></center></td>
			<td><center><?php echo $row['case_description']; ?></center></td>            
			<td><center><?php echo $row['date_of_lodging']; ?></center></td>
			  	<td><center><a class="btn btn-warning" href=<?php echo "editcurcase.php?id=".$row['cid']; ?> ><span class="glyphicon glyphicon-pencil"></span></a></center></td>
           <td><center>
           
             <a href="">
<button type="button" class="btn btn-warning">
<span class="glyphicon glyphicon-lock" data-toggle="tooltip" data-placement="bottom" title="Freeze"></span>
 </button>
</a>
           </center></td>
         </tr>
       <?php
      
	}
	
	 ?>
     </tbody>
   </table>
 </div>
</div>


</body>
</html>