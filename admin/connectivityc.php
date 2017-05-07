<?php 
if(!isset($_SESSION)) {
    session_start();
  }
  include '../db/config_database.php';
   	$applname = $_POST['applname']; 
   	$vicname = $_POST['vicname']; 
   	$casedesc = $_POST['casedesc'];
    $lodgdate = $_POST['lodgdate'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
   	 $query = "INSERT INTO app_details(applicant_name,dob_app,app_address) VALUES ('$applname','$dob','$address')"; 
   	 $data = mysqli_query ($con,$query);
   	 $data2 = mysqli_fetch_array($query,MYSQLI_ASSOC);
     $res=$data2['appid'];
     $queryi = "INSERT INTO pcase(appid,victim_name,case_description,date_of_lodging) VALUES ('$res','$vicname','$casedesc','$lodgdate')"; 
     $datai = mysqli_query ($con,$queryi);
     
   	 if($datai) { 
   	 	echo "ADDED SUCCESSFULLY..."; 
   	 	}
			?>

