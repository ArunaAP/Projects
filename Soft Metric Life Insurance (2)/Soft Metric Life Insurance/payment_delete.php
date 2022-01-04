<?php
require_once('Admin_connection.php');
include "config.php";

if(isset($_GET['pay_id'])) {
	$pay_id = $_GET['pay_id'];
	
	$sql = "DELETE FROM payment WHERE `pay_id` = '$pay_id'";
	
	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
		header("location:payment_view.php");
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>
