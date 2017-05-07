<html>
<head>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="bootstrap/jQuery/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript"></script>

</head>
<body>

<?php
if(!isset($_SESSION)) {
    session_start();
  }
  include '../db/config_database.php';

					echo "<div style='height:70%;
					width:35%;
					background:#ffffff;
					box-shadow:0 0 20px 0 rgba(0,0,0,0.2),0 5px 5px 0 rgba(0,0,0,0.24);
					margin-left:10%;
					'>";

						if(isset($_GET['id'])) {
							$Id = $_GET['id'];
							$q = "SELECT victim_name FROM archive_case WHERE cid='".$Id."';";
							$query = mysqli_query($con, $q);
							$data2 = mysqli_fetch_array($query,MYSQLI_ASSOC);
							?>
							<h2 style="margin-top: 15%;padding-top: 6%"> Details of <?php echo $data2['victim_name']; ?>'s Case</h2>
							<br/>
							<?php
						}
						?>
						
						<?php
						if(isset($_GET['id'])){
							$Id = $_GET['id'];
							$q1="SELECT * FROM archive_case WHERE cid=".$Id.";";
							$query1=mysqli_query($con,$q1);
							$data3=mysqli_fetch_array($query1,MYSQLI_ASSOC);
							echo "<br/><h4 style='padding-left:4%;padding-right:3%;'>".$data3['case_description']; 
							echo "<br/>
							<br/><br/><br/>";
							echo "Date of Lodging : ".$data3['date_of_lodging'];
							echo "<br/>
							<br/>";
							echo "Date of Closing : ".$data3['date_of_closing'];
						}
						echo "<div style='height:100%;
					width:105%;
					background:#ffffff;
					box-shadow:0 0 20px 0 rgba(0,0,0,0.2),0 5px 5px 0 rgba(0,0,0,0.24);
					margin-left:138%;
					'>";

							?>
							<h2 style="margin-top: -60%;padding-top: 6%">Investigating Team</h2><br/><br/><br/><br/>
							<ul>
							<li style="margin-left:3%;padding-left:3%; ">
								<?php
								if(isset($_GET['id'])){
									$Id=$_GET['id'];
									$q2="SELECT a.lid,b.lid,b.name,b.rank FROM case_allocation a,member_detail b WHERE a.lid=b.lid and a.cid=".$Id.";";
									$query2=mysqli_query($con,$q2);
									$data4=mysqli_fetch_array($query2,MYSQLI_ASSOC);
									echo $data4['name']."(".$data4['rank'].")";
								}
								?>
							</li>
							<br/>
							

						
</body>
</html>