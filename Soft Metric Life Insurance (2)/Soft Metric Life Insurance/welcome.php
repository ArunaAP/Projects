<?php
    include_once('includes/header.php');
?>
<?php

require_once('connection.php');
require_once('login_validation.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soft Metric Life Insurance</title>
	<link rel="stylesheet" href="styles.css">
	<!----------------------------------------------------------------styles for policyholder menu------------------------------------------------------------------------->
	<style>
	/*adding a box*/
	.box{
    width: 450px;
    height: 500px;
    background: #d7baa600;
    margin: 30px auto;
    padding: 30px;
  }
  
  .btn{
    width:  100%;
    padding: 8px 10px;
    font-size:  25px;
    background: #1c1f4c;
    cursor: pointer;
    display: inline;
    float: left;
    color: white;
    margin-top: 30px;
    border: 3px solid #20b2aa;
  }
  .btn:hover {
		background-color: #fec20f;
	}
  
  
  input[type=button]{
	width:  100%;
    padding: 8px 10px;
    font-size:  25px;
    background: #1c1f4c;
    cursor: pointer;
    display: inline;
    float: left;
    color: white;
    margin-top: 30px;
    border: 3px solid #20b2aa;
		
		
	}
	
	input[type=button]:hover {
		background-color: #fec20f;
	}
	
	.weltxt{
		font-style: italic;
		color: #1c1f4c;
		font-size: 32px;
	}
	
	</style>

</head>

<!--------Policyholder Menu---------->

 <marquee>
<div class="weltxt">
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome ' . $_SESSION['Username'].'<br/>';
?>
</marquee>
</div>
<div class="box">
	<a href="profile_details.php"><button class="btn">My Profile</button></a><br>
	<a href="my policy.php"><button class="btn">My Policy</button></a><br>
	<a href="my claim.php"><button class="btn">My Claims</button></a><br>
	<a href="paymenu.php"><button class="btn">My Payments</button></a><br>	


<?php		
        echo '<a href="logout.php?logout" ><input type=button value=Logout></a>';
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
