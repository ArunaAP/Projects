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

	
	
	.hdtxt{
	font-size: 35px;
    color: #1c1f4c;
	padding-top: 20px;
	padding-bottom: 6px;
	font-style: italic;
	}
	
	
	input[type=button]{
		width:  10%;
    padding: 2px 4px;
    font-size:  25px;
    background: #1c1f4c;
    cursor: pointer;
    color: white;
    margin-top: 30px;
		
	}
	
	input[type=button]:hover {
		background-color: #fec20f;
	}
	
	.button100 button{
	width:25%;
	display:block;
	background: #1c1f4c;
	padding: 8px 10px;
	margin-top: 20px;
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
	
	.weltxt{
		font-style: italic;
		color: #1c1f4c;
		font-size: 32px;
	}
	

	
	</style>
	</head>
	

<center>
<div class="weltxt">
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome ' . $_SESSION['Username'].'<br/>';
?>
</div>
<h1 class="hdtxt">Policyholder Details</h1>


	<div class="button100">		
				<a href="policyholder_create.php"><button>Insert</button></a><br/>
				<a href="policyholder_view.php"><button>Update</button></a><br/>
				<a href="policyholder_view.php"><button>View</button></a><br/>
				<a href="policyholder_view.php"><button>Delete</button></a><br/>
		

	</div>
<?php		
        echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
		echo '&nbsp;&nbsp;&nbsp;<a href="Admin_welcome.php?back" ><input type=button value=Back></a>';
    }
    else
    {
        header("location:Home page.php");
		
    }
?>
</center>
<br/>
	
<?php
    include_once('includes/footer.php');
?>		

</body>	
</html>