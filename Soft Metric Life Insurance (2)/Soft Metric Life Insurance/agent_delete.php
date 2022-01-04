<?php
require_once('Admin_connection.php');
include "config.php";

if(isset($_GET['ag_id'])) {
	$ag_id = $_GET['ag_id'];
	
	$sql = "DELETE FROM `agent` WHERE `ag_id` = '$ag_id'";
	
	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		echo "Record deleted successfully.";
		header("location:agent_view.php");
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}

?>
