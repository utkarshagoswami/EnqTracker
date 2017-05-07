<?php
if(!isset($_SESSION)) {
    session_start();
  }
  include "../db/config_database.php" ;
  ?>
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
    	<a href="addingofficer.php" class="new_locker_button"><span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="bottom" title="Add Officer"></span></a>
    
        	</div>

</div>
<div class="nav-bar">
	
	<ul class = "nav nav-tabs">
   <li class = "active"><a href = "#">Police Officer</a></li>
   <li><a href = "currentcases.php">Current Cases</a></li>
   <li><a href = "freezedcases.php">Freezed Cases</a></li>
   
</ul>
</div>

<div class="outer">
 <div class="table">
   <table class="table">
     <thead>
       <th><center>Officer Id</center></th>
       <th><center>Officer Name</center></th>
       <th><center>Officer Rank</center></th>
       <th><center>Police Station Id</center></th>
       <th><center>Address</center></th>
       <th><center>Adhar Number</center></th>
    </thead>
     <tbody>
<?php
 $sel_user = "select * from member_detail ";

$run_user = mysqli_query($con, $sel_user);

//header("Location:http://localhost:8082/tnp/studentpg.php");
//if($exist>0){
	while($row=mysqli_fetch_array($run_user,MYSQLI_ASSOC)){
	?> <tr>
            <!--Each table column is echoed in to a td cell-->
            <td>,<center><?php echo $row['lid']; ?></center></td>
            <td><center><?php echo $row['name']; ?></center></td>
			<td><center><?php echo $row['rank']; ?></center></td>
			<td><center><?php echo $row['psid']; ?></center></td>            
			<td><center><?php echo $row['address_pol']; ?></center></td>
			<td><center><?php echo $row['adhar_no']; ?></center></td>
        	<td><center><a class="btn btn-warning" href=<?php echo "editpolprofile.php?id=".$row['lid']; ?>
        	><span class="glyphicon glyphicon-pencil"></span></a></center></td>
           <td><center>
           
             <a href="">
<button type="button" class="btn btn-warning">
<span class="glyphicon glyphicon-trash" data-toggle="tooltip" data-placement="bottom" title="Delete"></span>
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