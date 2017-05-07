<?php 
  if(!isset($_SESSION)) {
    session_start();
  }
  include '../db/config_database.php';
   	$name = $_POST['username']; 
   	$rank = $_POST['rank']; 
   	$psid = $_POST['psid'];
    $address = $_POST['address'];
    $adharno = $_POST['adharno'];
   	 $query = "INSERT INTO member_detail(name,rank,psid,address_pol,adhar_no) VALUES ('$name','$rank','$psid','$address','$adharno')"; 
   	 $data = mysqli_query ($con,$query);
   	 echo $data;
   	 if($data) { 
   	 	echo "ADDED SUCCESSFULLY..."; 
   	 	}
			?>

