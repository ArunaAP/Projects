<?php
    include_once('includes/header.php');
?>
<?php

require_once('connection.php');
require_once('Agent login_validation.php');

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
	
	</style>
</head>


 
<div class="center">
<div class="box">
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome ' . $_SESSION['Username'].'<br/>';
?>
<div class="w3-container w3-white">

	<a href="Policyholder details.php"><button class="btn"> Policyholders</button></a><br>
	<a href="Claim details.php"><button class="btn">Claims</button></a><br>
	<a href="Payment details.php"><button class="btn">Payments</button></a><br>
	<a href="policy details.php"><button class="btn">Policies</button></a><br>	
</div>
<?php		
        echo '<a href="logout agent.php?logout" ><input type=button value=Logout></a>';
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
