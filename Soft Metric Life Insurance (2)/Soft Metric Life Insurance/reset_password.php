<?php
    include_once('includes/header.php');
?>
<?php

require_once('connection.php');

if (isset($_POST['Submit'])) {
	$Password=$_POST['Password'];
	$email=$_POST['email'];
	 
$result_set=mysqli_query($con,"UPDATE `policyholder` SET `Password`='$Password' WHERE `email`='".$email."'");


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
	

.box7{
	width: 400px;
    height: 300px;
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
	
	.weltxt{
		font-style: italic;
		color: #1c1f4c;
		font-size: 32px;
	}
	
	
	</style>
	</head>
	
	



<center>
<div class="weltxt">Reset Password</div>
<div class="box7">
<form method="post">
<label>Enter your Email</label><br><br>
<input type="text" placeholder="email" name="email" value="<?php echo '".$email."'; ?>"> <br><br>
Change Your Password :<br><br>
<input type="text" name="Password" value="<?php echo '".$Password."'; ?>"> <br><br>
<button type="submit" name="Submit" class="btn"> Change </button><br><br>
<a href="Policyholder login.php">Login with my new password</a>
</form>
</center>	
	
<?php
    include_once('includes/footer.php');
?>	

</body>	
</html>