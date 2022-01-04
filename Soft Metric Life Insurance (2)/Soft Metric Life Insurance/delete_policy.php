<?php
require_once('Admin_connection.php');
include "config.php";

if(isset($_GET['p_id'])) {
	$p_id = $_GET['p_id'];
	
	$sql = "DELETE FROM `policy` WHERE `p_id` = '$p_id'";
	
	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
		header("location:view_policy.php");
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>
