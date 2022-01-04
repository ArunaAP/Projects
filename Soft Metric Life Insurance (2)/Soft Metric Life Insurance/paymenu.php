<?php

require_once('connection.php');
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
    	input[type=button]{
		background-color: #1c1f4c;
		color: white;
		cursor: pointer;
		font-size: 14px;
		text-decoration: none;
		overflow: hidden;
		border-radius: 5px;
		width: 100px;
		margin-right: 10px;
		
		

		
	}
	
	input[type=button]:hover {
		background-color: #fec20f;
	}
	
	.centerbtn{
		margin: auto;
		width: 10%;
		border: none;
		padding: 25px 105px 10px 20px;
		float: left;
        padding-top:180px;
		
		
	}
</style>

	</head>

 
<!--------------------------------------------------------->

<div class="center">
<div class="box">
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome ' . $_SESSION['Username'].'<br/>';
?>
<div class="w3-container w3-white">

	<a href="pay.php"><button class="btn">Pay Now</button></a><br>
	<a href="my payments.php"><button class="btn">My payment Details</button></a><br>
	
</div>
<div class="centerbtn">
<?php		
        echo '<a href="welcome.php" ><input type=button value=Back></a>';
?>
</div>

<div class="centerbtn">
<?php		
        echo '<a href="logout.php?logout" ><input type=button value=Logout></a>';
    }
    else
    {
        header("location:Home page.php");
    }
?>
</div>

	
</div>	
</div>	

<?php
    include_once('includes/footer.php');
?>

</body>	
</html>
