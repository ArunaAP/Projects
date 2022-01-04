<?php
    include_once('includes/header.php');
?>
<?php 
require_once('Admin_connection.php');
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$policy_type=$_POST['policy_type'];
		$term=$_POST['term'];
		$life_cover=$_POST['life_cover'];
		$pay_mode=$_POST['pay_mode'];
		$premium=$_POST['premium'];
		$ph_id=$_POST['ph_id'];
		

		//write sql query

		$sql = "INSERT INTO `policy`(`policy_type`, `term`, `life_cover`, `pay_mode`, `premium`, `ph_id`) VALUES ('$policy_type','$term','$life_cover','$pay_mode','$premium','$ph_id')";
		

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record inserted successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

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
		padding:px;
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


<center>
<h2>Insert Form</h2>

<form action="" method="POST">
<div class="legend">
  <fieldset class="fieldset">
    <legend>Insert information:</legend>
    Policy Type:<br>
    <input type="text" name="policy_type">
    <br>
    Term:<br>
    <input type="text" name="term">
    <br>
    Life Cover (Rs.):<br>
    <input type="text" name="life_cover">
    <br>
    Pay Mode:<br>
    <input type="text" name="pay_mode">
    <br>
	Premium:<br>
    <input type="text" name="premium">
    <br>
    PH ID:<br>
    <input type="text" name="ph_id">
    <br>
    <input type="submit" name="submit" class="btn" value="submit">
  </fieldset>
</form>
</div>
</center>
<div class="centerbtn">
<?php	
     
        echo '<a href="Admin_policy.php?back" ><input type=button value=Back></a>';
		echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
		
		
    
  
?>

</div>

<?php
    include_once('includes/footer.php');
?>		

</body>	
</html>