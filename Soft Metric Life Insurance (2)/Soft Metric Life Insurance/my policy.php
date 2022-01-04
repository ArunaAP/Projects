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
	.weltxt{
		font-style: italic;
		color: #1c1f4c;
		font-size: 32px;
	}
	
	.climg{
		float: right;  
	}
	
	.alert {
  padding: 15px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}

.box001{
	width: 300px;
    height: 250px;
    background: #20b2aa;
    margin: 30px auto;
    box-shadow: 0 25px 20px gray;
    padding: 25px;
	}
	
	.hdtxt{
	font-size: 25px;
    color: #1c1f4c;
	padding-top: 20px;
	padding-bottom: 6px;
	}
	
	.input{
	width: 150px;
    font-size: 20px;

	}
	
	.btn{
		background-color: #fec20f;
		color: white;
		border-radius: 12px;
		padding: 4px 16px;
		font-size: 18px;
		
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

.btn17{
	width:  10%;
    padding: 2px 4px;
    font-size:  25px;
    background: #1c1f4c;
    cursor: pointer;
    color: white;
    margin-top: 30px;
	}
	
	.btn17:hover {
		background-color: #fec20f;
	}	
	
	</style>
	</head>
	
<marquee>
<div class="weltxt">
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome ' . $_SESSION['Username'].'<br/>';
?></div></marquee>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Attention!</strong> Help us for protect your details.
</div>
<h3>For save your sensitive data from unknown parties please submit your policyholder id and proof us that you are our real policyholder</h3>
<div class="climg">
<img src ="Images/policy.gif" width="400px" height="250px">
</div>
<center>
<div class="box001">
<form method="post" action="policy_details.php">
<div class="hdtxt">
<label>Enter your ph id number</label><br><br></div>
<div class="input">
<input type="text" placeholder="ph***" name="ph_id"><br><br></div>
<button type="submit" class="btn"> SUBMIT </button>
</div>

</form>



<br/><br/>

<?php		
        echo '<a href="logout.php?logout" ><input type=button value=Logout></a>';
    }
    else
    {
        header("location:Home page.php");
    }
?>
&nbsp;&nbsp;&nbsp;<a href="welcome.php"><button class="btn17">Back</button></a>
</center>	
<br>	
	
<?php
    include_once('includes/footer.php');
?>
</body>	
</html>
