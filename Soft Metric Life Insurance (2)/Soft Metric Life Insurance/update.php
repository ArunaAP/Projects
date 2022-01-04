<?php
    include_once('includes/header.php');
?>
<?php 
require_once('Admin_connection.php');
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$claim_type = $_POST['claim_type'];
		$cl_id = $_POST['cl_id'];
		$cl_amount = $_POST['cl_amount'];
		$cl_date = $_POST['cl_date'];
		$ph_id = $_POST['ph_id'];
		

		// write the update query
		$sql = "UPDATE `claim` SET `claim_type`='$claim_type',`cl_amount`='$cl_amount',`cl_date`='$cl_date',`ph_id`='$ph_id' WHERE `cl_id`='$cl_id'";

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['cl_id'])) {
	$cl_id = $_GET['cl_id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `claim` WHERE `cl_id`='$cl_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$claim_type = $row['claim_type'];
			$cl_amount = $row['cl_amount'];
			$cl_date = $row['cl_date'];
			$ph_id  = $row['ph_id'];
			$cl_id  = $row['cl_id'];
		}
			
		

	?>
	
	<!DOCTYPE html>


<html lang="en">
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soft Metric Life Insurance</title>
	<link rel="stylesheet" href="styles.css">
	<style>
	.box{
		border: 3px;
		background-color: white;
		width: 350px;
		font-size: 25px;
		text-align: center;
		line-height: 1.8;
		font-style: italic;
		color: #1c1f4c;
	}
	
	.center {
		margin: auto;
		width: 25%;
		border: none;
		padding: 10px;
	}
	
	
	
	
	.btn{
		background-color: #1c1f4c;
		color: white;
		padding: 24px;
		margin: 8px 0;
		border-radius: 12px;
		cursor: pointer;
		width: 100%;
		font-size: 18px;
		text-decoration: none;
		
		
	}
	
	.btn:hover {
		background-color: #fec20f;
	}
	
	input[type=button]{
		background-color: #1c1f4c;
		color: white;
		padding: 16px;
		margin: 8px 0;
		border-radius: 12px;
		cursor: pointer;
		width: 50%;
		font-size: 18px;
		text-decoration: none;
		overflow: hidden;
		
		
	}
	
	input[type=button]:hover {
		background-color: #fec20f;
	}
	
	.centerbtn{
		margin: auto;
		width: 15%;
		border: none;
		padding: 15px;
		
	}
	
	</style>

</head>


	
		<h2>Update Form</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Update information:</legend>
		    Claim Type:<br>
		    <input type="text" name="claim_type" value="<?php echo $claim_type; ?>">
		    <input type="hidden" name="cl_id" value="<?php echo $cl_id; ?>">
		    <br>
		    Claim Amount:<br>
		    <input type="text" name="cl_amount" value="<?php echo $cl_amount; ?>">
		    <br>
		    Claim Date:<br>
		    <input type="text" name="cl_date" value="<?php echo $cl_date; ?>">
		    <br>
		    Policy Hoder Id:<br>
		    <input type="text" name="ph_id" value="<?php echo $ph_id; ?>">
		    <br>
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

 <div class="centerbtn">
<?php	
     
        echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
		echo '<a href="view.php?back" ><input type=button value=Back></a>';
    
  
?>

</div>

<?php
    include_once('includes/footer.php');
?>
		

</body>	
</html>

	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>