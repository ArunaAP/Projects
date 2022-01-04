<?php
    include_once('includes/header.php');
?>
<?php 
require_once('Admin_connection.php');
include "config.php";

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
	 $ph_id=$_POST['ph_id'];
	 $title=$_POST['title'];
	 $fullname=$_POST['fullname'];
	 $nic=$_POST['nic'];
	 $email=$_POST['email'];
	 $contact_mobile=$_POST['contact_mobile'];
	 $contact_home=$_POST['contact_home'];
	 $address=$_POST['address'];
	 $occupation=$_POST['occupation'];
	 $marital_status=$_POST['marital_status'];
	 $dob=$_POST['dob'];
	 $gender=$_POST['gender'];
	 $height=$_POST['height'];
	 $weight=$_POST['weight'];
	 $agent_name=$_POST['agent_name'];
	 $Username=$_POST['Username'];
	 $Password=$_POST['Password'];
	
		

		// write the update query
		$sql = "UPDATE `policyholder` SET `ph_id`='$ph_id',`title`='$title',`fullname`='$fullname',`nic`='$nic', `email`='$email', `contact_mobile`='$contact_mobile',`contact_home`='$contact_home',`address`='$address', `occupation`='$occupation', `marital_status`='$marital_status', `dob`='$dob',`gender`='$gender',`height`='$height', `weight`='$weight', `agent_name`='$agent_name', `Username`='$Username', `Password`='$Password' WHERE `ph_id`='$ph_id'";
		

		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo '<script type="text/javascript">alert("Data Updated")</script>';
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['ph_id'])) {
	$ph_id = $_GET['ph_id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `policyholder` WHERE `ph_id`='$ph_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
	$ph_id=$row['ph_id'];
	 $title=$row['title'];
	 $fullname=$row['fullname'];
	 $nic=$row['nic'];
	 $email=$row['email'];
	 $contact_mobile=$row['contact_mobile'];
	 $contact_home=$row['contact_home'];
	 $address=$row['address'];
	 $occupation=$row['occupation'];
	 $marital_status=$row['marital_status'];
	 $dob=$row['dob'];
	 $gender=$row['gender'];
	 $height=$row['height'];
	 $weight=$row['weight'];
	 $agent_name=$row['agent_name'];
	 $Username=$row['Username'];
	 $Password=$row['Password'];
			
		
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
		background-color: #fec20f;
		color: white;
		border-radius: 12px;
		padding: 4px 16px;
		font-size: 18px;
	}
	.btn155:hover{
		background-color: #1c1f4c;
	}
	
	</style>

</head>


	
		<h2>Update Form</h2>
		<form action="" method="post">
		  <fieldset>
		    <legend>Update information:</legend>
		     PH ID : <br><br>
		    <input type="text" name="ph_id"  value="<?php echo $ph_id; ?>">
		    <br><br>
		    Title : <br><br>
		    <input type="text" name="title" value="<?php echo $title; ?>">
		    <br><br>
		    Fullname : <br><br>
		    <input type="text" name="fullname" value="<?php echo $fullname; ?>">
		    <br><br>
			NIC : <br><br>
		    <input type="text" name="nic" value="<?php echo $nic; ?>">
		    <br><br>
			Email : <br><br>
		    <input type="text" name="email" value="<?php echo $email; ?>">
		    <br><br>
		    Contact Mobile : <br><br>
		    <input type="text" name="contact_mobile" value="<?php echo $contact_mobile; ?>">
		    <br><br>
			Contact Home : <br><br>
		    <input type="text" name="contact_home" value="<?php echo $contact_home; ?>">
		    <br><br>
		    Address : <br><br>
		    <input type="text" name="address" value="<?php echo $address; ?>">
		    <br><br>
		    Occupation : <br><br>
		    <input type="text" name="occupation" value="<?php echo $occupation; ?>">
		    <br><br>
			Marital Status : <br><br>
		    <input type="text" name="marital_status" value="<?php echo $marital_status; ?>">
		    <br><br>
			DOB : <br><br>
		    <input type="text" name="dob" value="<?php echo $dob; ?>">
		    <br><br>
		    Gender : <br><br>
		    <input type="text" name="gender" value="<?php echo $gender; ?>">
		    <br><br>
			Height (cm) : <br><br>
		    <input type="text" name="height" value="<?php echo $height; ?>">
		    <br><br>
			Weight (kg) : <br><br>
		    <input type="text" name="weight" value="<?php echo $weight; ?>">
		    <br><br>
		    Agent Name : <br><br>
		    <input type="text" name="agent_name" value="<?php echo $agent_name; ?>">
			<br><br>
			Username : <br><br>
		    <input type="text" name="Username" value="<?php echo $Username; ?>">
		    <br><br>
		    Password : <br><br>
		    <input type="text" name="Password" value="<?php echo $Password; ?>">
			<br><br>
		
		    <input type="submit" value="Update" name="update" class="btn155">
		  </fieldset>
		</form>
<center>

<?php	
     
		echo '<a href="policyholder_view.php?back" ><input type=button value=Back></a>';
        echo '&nbsp;&nbsp;&nbsp;<a href="logout.php?logout" ><input type=button value=Logout></a>';
		
    
  
?>
</center>


<?php
    include_once('includes/footer.php');
?>	


</body>	
</html>

	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view_policy.php page
		header('Location: policyholder_view.php');
	}

}
?>