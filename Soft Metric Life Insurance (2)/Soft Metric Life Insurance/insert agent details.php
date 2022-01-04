<?php
    include_once('includes/header.php');
?>
<?php 
require_once('Admin_connection.php');
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$ag_id = $_POST['ag_id'];
		$agent_name = $_POST['agent_name'];
		$nic = $_POST['nic'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		

		//write sql query

		$sql = "INSERT INTO agent(ag_id,agent_name,nic,email,address,dob,gender) VALUES ('$ag_id','$agent_name','$nic','$email','$address','$dob','$gender')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
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
		padding: 5spx;
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
		width: 40%;
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


<h2 class="h222">Insert Form</h2>
<center>
<form action="" method="POST">
<div class="legend">
  <fieldset class="fieldset">
    <legend>Insert agent information:</legend>
    Agent Id :<br>
    <input type="text" name="ag_id">
    <br>
    Agent Name:<br>
    <input type="text" name="agent_name">
    <br>
    Nic:<br>
    <input type="text" name="nic">
    <br>
    Email:<br>
    <input type="text" name="email">
    <br>
	Contact number:<br>
	<input type="text" name="contact_no">
	<br>
	Address:<br>
	<input type="text" name="address">
	<br>
	Date of birth:<br>
	<input type="text" name="dob">
	<br>
	Gender:<br>
	<input type="text" name="gender">
	<br>
    <br>
    <input type="submit" name="submit" class="btn" value="submit">
  </fieldset>

</form>
</div>
</center>

<div class="centerbtn">
<?php	
     
        echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
		echo '<a href="Admin_agent.php?back" ><input type=button value=Back></a>';
?>
 </div>  
<?php
    include_once('includes/footer.php');
?>		

</body>	
</html>