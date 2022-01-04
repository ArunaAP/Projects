<?php
    include_once('includes/header.php');
?>
<?php 
require_once('Admin_connection.php');
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$ag_id = $_POST['ag_id'];
		$agent_name = $_POST['agent_name'];
		$nic = $_POST['nic'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
	
		

		// write the update query
		$sql = "UPDATE `agent` SET `agent_name`='$agent_name',`nic`='$nic',`email`='$email',`address`='$address',`dob`='$dob',`gender`='$gender' WHERE `ag_id`='$ag_id'";
		

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['ag_id'])) {
	$ag_id = $_GET['ag_id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `agent` WHERE `ag_id`='$ag_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$ag_id=$row['ag_id'];
			$agent_name=$row['agent_name'];
			$nic=$row['nic'];
			$email = $row['email'];
		    $address = $row['address'];
		    $dob = $row['dob'];
		    $gender = $row['gender'];
		
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
		    Agent ID:<br>
		    <input type="text" name="ag_id" value="<?php echo $ag_id; ?>">
		    <br>
		    Agent name:<br>
		    <input type="text" name="agent_name" value="<?php echo $agent_name; ?>">
		    <br>
			Nic:<br>
		    <input type="text" name="nic" value="<?php echo $nic; ?>">
		    <br>
		    Email:<br>
		    <input type="text" name="email" value="<?php echo $email; ?>">
		    <br>
			Address:<br>
		    <input type="text" name="address" value="<?php echo $address; ?>">
		    <br>
			Date of birth:<br>
		    <input type="text" name="dob" value="<?php echo $dob; ?>">
		    <br>
			Gender:<br>
		    <input type="text" name="gender" value="<?php echo $gender; ?>">
		    <br>
		
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

 <div class="centerbtn">
<?php	
     
		echo '<a href="agent_view.php?back" ><input type=button value=Back></a>';
        echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
		
    
  
?>

</div>

<?php
    include_once('includes/footer.php');
?>	

</body>	
</html>

	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view_policy.php page
		header('Location: agent_view.php');
	}

}
?>