<?php
    include_once('includes/header.php');
?>
<?php 
require_once('Admin_connection.php');
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
	 $ph_id=$_POST['ph_id'];
	 $pay_amount=$_POST['pay_amount'];
	 $pay_method=$_POST['pay_method'];
	 $pay_id=$_POST['pay_id'];
	
		

		// write the update query
		$sql = "UPDATE `payment` SET `ph_id`='$ph_id',`pay_amount`='$pay_amount',`pay_method`='$pay_method' WHERE `pay_id`='$pay_id'";
		

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['pay_id'])) {
	$pay_id = $_GET['pay_id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `payment` WHERE `pay_id`='$pay_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$ph_id=$row['ph_id'];
			$pay_amount=$row['pay_amount'];
			$pay_method=$row['pay_method'];
			
		
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
		padding: 5px;
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
		    Policyholder ID:<br>
		    <input type="text" name="ph_id" value="<?php echo $ph_id; ?>">
		    <input type="hidden" name="pay_id" value="<?php echo $pay_id; ?>">
		    <br>
		    Pay Amount:<br>
		    <input type="text" name="pay_amount" value="<?php echo $pay_amount; ?>">
		    <br>
		    Pay method:<br>
		    <input type="text" name="pay_method" value="<?php echo $pay_method; ?>">
		    <br>
		
		    <input type="submit" value="Update" name="update">
		  </fieldset>
		</form>

 <div class="centerbtn">
<?php	
     
		echo '<a href="payment_view.php?back" ><input type=button value=Back></a>';
        echo '<a href="logout.php?logout" ><input type=button value=Logout></a>';
		
    
  
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
		header('Location: payment_view.php');
	}

}
?>