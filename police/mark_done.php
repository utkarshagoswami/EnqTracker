<?php
	if(!isset($_SESSION)) {
		session_start();
	}
	include '../db/config_database.php';
	$id = $_GET['id'];
	$cid = $_GET['cid'];
	$p = 'p'.$id;
	$sql = "UPDATE to_do_list SET $p = '1' WHERE case_id = $cid;";
	$result = mysqli_query($con, $sql);
	header("location: case_details.php?id=".$cid);
?>