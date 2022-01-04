<?php

require_once('Admin_connection.php');
require_once('Admin_login_validation.php');

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
	.box{
		border: 3px;
		background-color: white;
		width: 500px;
		height: 950px;
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
		padding: 18px;
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
	
	
	
	</style>

</head>

 
<div class="center">
<div class="box">
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome Admin ' . $_SESSION['Username'].'<br/>';
?>
<br>
<div class="w3-container w3-white">

	<a href="Admin_policyholder.php"><button type="submit" class="btn" name="profile">Policyholder</button></a><br>
	<a href="Admin_agent.php"><button class="btn">Agent</button></a><br>
	<a href="Admin_policy.php"><button class="btn">Policy</button></a><br>
	<a href="Admin_claims.php"><button class="btn">Claims</button></a><br>	
	<a href="contact_us_inquiries.php"><button class="btn">Contact Us Inquiries</button></a><br>
    <a href="admin_payment.php"><button class="btn">Payments</button></a><br>
    <a href="policy_inquiries.php"><button class="btn">Policy Inquiries</button></a><br>	
</div>
<br>
<?php		
        echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
		
    }
    else
    {
        header("location:Home page.php");
    }
?>

	
</div>	
</div>	

	<?php
    include_once('includes/footer.php');
?>		

</body>	
</html>
