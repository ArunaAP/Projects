<?php
    include_once('includes/header.php');
?>

<?php 
	require_once('Admin_connection.php');
	include "connection.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$ph_id = $_POST['ph_id'];
		$pay_amount = $_POST['pay_amount'];
		$pay_method = $_POST['pay_method'];
		
		

		//write sql query

		$sql = "INSERT INTO payment(ph_id,pay_amount,pay_method) VALUES ('$ph_id','$pay_amount','$pay_method')";

		// execute the query

		$result = $con->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $con->error;
		}

		$con->close();

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
		padding: 5px;
		margin: 8px 0;
		border-radius: 5px;
		cursor: pointer;
		width: 40%;
		font-size: 15px;
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
		border-radius: 8px;
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

	.legend{
		width: 30%;
	}

	.fieldset input{
		margin-top:10px;
		display:block;	
		width:100%;
		height:35px;
	}
	.h222{
		text-align:center;
	}


	
	</style>

</head>


<h2 class="h222">Payment Insert Form</h2>
<center>
<form action="" method="POST">
<div class="legend">
  <fieldset class="fieldset">
    <legend>Insert payment information:</legend>
	<br>
    Policyholder ID:<br>
    <input type="text" name="ph_id">
    <br>
    Pay Amount:<br>
    <input type="text" name="pay_amount">
    <br>
    Pay method:<br>
    <input type="text" name="pay_method">
    <br>
	<br>
 
    
    <input type="submit" name="submit" value="submit" class="btn">
  </fieldset>
</form>
</div>
</center>
<div class="centerbtn">
<?php	
     
        echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
		echo '<a href="admin_payment.php?back" ><input type=button value=Back></a>';
    
  
?>

</div>
	
<?php
    include_once('includes/footer.php');
?>	

</body>	
</html>