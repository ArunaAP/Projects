<?php
    include_once('includes/header.php');
?>
<?php 
require_once('Admin_connection.php');
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
	 $policy_type=$_POST['policy_type'];
	 $term=$_POST['term'];
	 $life_cover=$_POST['life_cover'];
	 $pay_mode=$_POST['pay_mode'];
	 $premium=$_POST['premium'];
	 $ph_id=$_POST['ph_id'];
	 $p_id=$_POST['ph_id'];
	 
		

		// write the update query
		$sql = "UPDATE `policy` SET `policy_type`='$policy_type',`term`='$term',`life_cover`='$life_cover',`pay_mode`='$pay_mode', `premium`='$premium', `ph_id`='$ph_id' WHERE `p_id`='$p_id'";
		

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['p_id'])) {
	$p_id = $_GET['p_id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `policy` WHERE `p_id`='$p_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$policy_type=$row['policy_type'];
			$term=$row['term'];
			$life_cover=$row['life_cover'];
			$pay_mode=$row['pay_mode'];
			$premium=$row['premium'];
			$ph_id=$row['ph_id'];
		
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
		    Policy Type:<br>
		    <input type="text" name="policy_type" value="<?php echo $policy_type; ?>">
		    <input type="hidden" name="p_id" value="<?php echo $p_id; ?>">
		    <br>
		    Term:<br>
		    <input type="text" name="term" value="<?php echo $term; ?>">
		    <br>
		    Life Cover:<br>
		    <input type="text" name="life_cover" value="<?php echo $life_cover; ?>">
		    <br>
			Pay Mode:<br>
		    <input type="text" name="pay_mode" value="<?php echo $pay_mode; ?>">
		    <br>
			Premium:<br>
		    <input type="text" name="premium" value="<?php echo $premium; ?>">
		    <br>
		    PH Id:<br>
		    <input type="text" name="ph_id" value="<?php echo $ph_id; ?>">
		    <br>
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

 <div class="centerbtn">
<?php	
     
		echo '<a href="view_policy.php?back" ><input type=button value=Back></a>';
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
		header('Location: view_policy.php');
	}

}
?>