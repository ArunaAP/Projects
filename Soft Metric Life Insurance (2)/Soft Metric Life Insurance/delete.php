<?php
require_once('Admin_connection.php');
include "config.php";

if(isset($_GET['cl_id'])) {
	$cl_id = $_GET['cl_id'];
	
	$sql = "DELETE FROM `claim` WHERE `cl_id` = '$cl_id'";
	
	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
		header("location:view.php");
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>
