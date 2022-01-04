<?php
require_once('connection.php');

if(isset($_GET['ph_id'])) {
	$ph_id = $_GET['ph_id'];
	
	$sql = "DELETE FROM `policyholder` WHERE `ph_id` = '$ph_id'";
	
	// Execute the query

	$result = $con->query($sql);

	if ($result == TRUE) {
		echo '<script type="text/javascript">alert("Data Inserted")</script>';
		header("location:policyholder_view.php");
	}else{
		echo "Error:" . $sql . "<br>" . $con->error;
	}
}

?>
	