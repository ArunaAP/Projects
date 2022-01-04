<?php

require_once('login_validation.php');

?>

<?php
    include_once('includes/header.php');
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
	/*adding a box*/
	.box1{
    width: 600px;
    height: 900px;
    background: #E0FFFF;
    margin: 30px auto;
    padding: 50px;
	border: 2px solid #fec20f;
	outline-style: double;
	
  }
  
  .uinfo{
  display: block;
  margin-left: 35%;
  width: 10%;
}

hr {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
      }
	 
	.header{
		font-family: Arial, Helvetica, sans-serif;
		color : #1c1f4c;
		text-shadow: 5px 5px 7px #7575b8;
		font-size:  40px;
		text-transform: uppercase;
		margin-left: 30%;
	}
	.weltxt{
		font-style: italic;
		color: #1c1f4c;
		font-size: 32px;
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

.btn77{
	width:  10%;
    padding: 2px 4px;
    font-size:  25px;
    background: #1c1f4c;
    cursor: pointer;
    color: white;
    margin-top: 30px;
	}
	
	.btn77:hover {
		background-color: #fec20f;
	}	
	
	.txt{
		text-decoration: none;
		
	}


	</style>
	</head>


<marquee>
<div class="weltxt">
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome ' . $_SESSION['Username'].'<br/>';
?>
</marquee></div>

<div class="box1">
<h1 class="header">My Profile</h1>
<div class="uinfo"><img src ="Images/user info.jpg" width="150px" height="150px"></div><br>
<hr/><br>
<?php
{
	$sql="SELECT * FROM policyholder WHERE Username LIKE '".$_SESSION['Username']."';";
	$result=mysqli_query($con, $sql);
	$queryResult=mysqli_num_rows($result);
      
	if($queryResult > 0){
		while($row=mysqli_fetch_assoc($result)){
			echo"<lable>PH ID : </lable>".$row['ph_id']."<br><br>
			<lable>Full Name : </lable>".$row['title']." ".$row['fullname']."<br><br>
			<lable>NIC : </lable>".$row['nic']."<br><br>
			<lable>Email : </lable>".$row['email']."<br><br>
			<lable>Mobile : </lable>".$row['contact_mobile']."<br><br>
			<lable>Home : </lable>".$row['contact_home']."<br><br>
			<lable>Address : </lable>".$row['address']."<br><br>
			<lable>Occupation : </lable>".$row['occupation']."<br><br>
			<lable>Marital Status : </lable>".$row['marital_status']."<br><br>
			<lable>DOB : </lable>".$row['dob']."<br><br>
			<lable>Gender : </lable>".$row['gender']."<br><br>
			<lable>Height (cm) : </lable>".$row['height']."<br><br>
			<lable>Weight (kg) : </lable>".$row['weight']."<br><br>
			<lable>Agent Name : </lable>".$row['agent_name']."<br><br>";
		}
	}else {
		echo "No results";
	}
}

?>

</div>
<center>
<div class="txt">
<?php		
        echo '<a href="logout.php?logout" ><input type=button value=Logout></a>';
    }
    else
    {
        header("location:Home page.php");
    }
?>
&nbsp;&nbsp;&nbsp;<a href="welcome.php"><button class="btn77">Back</button></a></div>
</center>
	

<?php
    include_once('includes/footer.php');
?>		

</body>	
</html>