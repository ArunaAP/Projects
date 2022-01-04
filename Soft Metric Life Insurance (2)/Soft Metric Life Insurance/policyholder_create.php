<?php
    include_once('includes/header.php');
?>

<?php 
require_once('connection.php');

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$ph_id = $_POST['ph_id'];
		$title = $_POST['title'];
		$fullname = $_POST['fullname'];
		$nic = $_POST['nic'];
		$email = $_POST['email'];
		$contact_mobile = $_POST['contact_mobile'];
		$contact_home = $_POST['contact_home'];
		$address = $_POST['address'];
		$occupation = $_POST['occupation'];
		$marital_status = $_POST['marital_status'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$height = $_POST['height'];
		$weight = $_POST['weight'];
		$agent_name = $_POST['agent_name'];
		$Username=$_POST['Username'];
		$Password=$_POST['Password'];
		

		//write sql query

		$sql = "INSERT INTO `policyholder`(`ph_id`, `title`, `fullname`, `nic`,`email`, `contact_mobile`, `contact_home`, `address`, `occupation`,`marital_status`, `dob`, `gender`, `height`, `weight`, `agent_name`, `Username`, `Password`) VALUES ('$ph_id','$title','$fullname','$nic','$email','$contact_mobile','$contact_home','$address','$occupation','$marital_status','$dob','$gender','$height','$weight','$agent_name','$Username','$Password')";

		// execute the query

		$result = $con->query($sql);

		if ($result == TRUE) {
			echo '<script type="text/javascript">alert("Data Inserted")</script>';
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
	width:  10%;
    padding: 2px 4px;
    font-size:  25px;
    background: #1c1f4c;
    cursor: pointer;
    color: white;
		
	}
	
	input[type=button]:hover {
		background-color: #fec20f;
	}
	
	.btn155{
		background-color: #1c1f4c;
		color: white;
		border-radius: 5px;
		padding: 4px 16px;
		font-size: 18px;
		width:25%;
	}
	.btn155:hover{
		background-color: #fec20f;
	}
	.h222{
		text-align:center;
	}
	.legend{
		width: 35%;
		
	}

	.fieldset input{
		margin-top:2px;
		display:block;	
		width:100%;
		height:35px;
	}
	
	
	</style>

</head>



<h2 class="h222">Insert Form</h2>
<center>
<form action="" method="POST">
<div class="legend">
  <fieldset class="fieldset">
    <legend>Insert information:</legend>
    PH ID : <br><br>
    <input type="text" name="ph_id">
    <br><br>
    Title : <br><br>
    <input type="text" name="title">
    <br><br>
    Full Name : <br><br>
    <input type="text" name="fullname">
    <br><br>
    NIC : <br><br>
    <input type="text" name="nic">
    <br><br>
	Email : <br><br>
    <input type="text" name="email">
    <br><br>
    Mobile : <br><br>
    <input type="text" name="contact_mobile">
    <br><br>
    Home : <br><br>
    <input type="text" name="contact_home">
    <br><br>
    Address : <br><br>
    <input type="text" name="address">
    <br><br>
	Occupation : <br><br>
    <input type="text" name="occupation">
    <br><br>
    Marital Status : <br><br>
    <input type="text" name="marital_status">
    <br><br>
    DOB : <br><br>
    <input type="text" name="dob">
    <br><br>
    Gender : <br><br>
    <input type="text" name="gender">
    <br><br>
	Height (cm) : <br><br>
    <input type="text" name="height">
    <br><br>
    Weight (kg) : <br><br>
    <input type="text" name="weight">
    <br><br>
    Agent Name : <br><br>
    <input type="text" name="agent_name">
    <br><br>
	Username : <br><br>
    <input type="text" name="Username">
    <br><br>
    Password : <br><br>
    <input type="text" name="Password">
    <br><br>
    
    <input type="submit" name="submit" value="submit" class="btn155">
  </fieldset>
</div></center>
</form><br><br>

<center>
<?php	
     
        echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
		echo '&nbsp;&nbsp;&nbsp;<a href="Admin_policyholder.php?back" ><input type=button value=Back></a>';
    
  
?>
</center>
<?php
    include_once('includes/footer.php');
?>

</body>	
</html>