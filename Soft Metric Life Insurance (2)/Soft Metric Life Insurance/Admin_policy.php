<?php
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

	
	.heading{
		color: #1c1f4c;
		text-align:center;
	}
	
	.center {
		margin: auto;
		width: 25%;
		border: none;
		padding: 10px;
	}
	
	.ph_details {
		font-family: Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 80%;
		
	}

	.ph_details td, .ph_details th {
		border: 1px solid #ddd;
		padding: 8px;
	}

	.ph_details tr{
		background-color: #f2f2f2;
		text-align: center;
	}

	

	.ph_details th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #20b2aa;
		color: white;
		text-align: center;

	}
	
	input[type=button]{
		background-color: #1c1f4c;
		color: white;
		padding: 5px;
		margin: 5px 0;
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
		padding: 10px;
		
	}
	
	.button100 button{
	width:25%;
	display:block;
	background: #1c1f4c;
	padding: 8px 10px;
	margin-top: 30px;
	color:white;
	font-size:20px ;
	text-decoration:none;

	}
	
	.button100 button:hover {
		background-color: #fec20f;
		color:black;
	}
	.button100 a{
		text-decoration:none;
	}
	
	
	
	</style>
	</head>
	
	
		
<div class="center">

<center>
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome ' . $_SESSION['Username'].'<br/>';
?>
</center>
<h1 class="heading">Policy Details</h1>
</div>
</div>
<center>
	<div class="button100" >
				<a href="create_policy.php"> <button> Insert</button></a>
				<a href="view_policy.php"><button> Edit</button></a>
				<a href="view_policy.php"><button>View</button></a>
				<a href="view_policy.php"><button>Search</button></a>
</div>				
</center>


<div class="centerbtn">
<?php	
		echo '<a href="Admin_welcome.php?back" ><input type=button value=Back></a>';
        echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
		
    }
    else
    {
        header("location:Home page.php");
		
    }
?>

</div>
	
<?php
    include_once('includes/footer.php');
?>
		

</body>	
</html>