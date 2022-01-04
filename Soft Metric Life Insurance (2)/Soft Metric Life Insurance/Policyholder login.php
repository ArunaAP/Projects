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
<!-------------------------------------------------------------------------style placeholder login--------------------------------------------------------------->	
	<style>
	/*adding a box*/
	.box99{
    width: 450px;
    height: 450px;
    background: #d7baa600;
    margin: 30px auto;
    box-shadow: 0 25px 20px gray;
    padding: 50px;
  }
  
  /*styles for text boxes*/
  .box99 input{
    width:  100%;
    border: 1px solid #000000;
    font-size: 15px;
    padding: 8px 10px;

  }
  
  /*styles for lables*/
  .input label{
    width: 80px;
    margin-right:  10px;
    font-size: 20px;
    float: left;
    padding-bottom: 10px;
    padding-left: 8 px;
  }
  
  /*styles for forgot password*/
  .forgot{
    float: right;
    font-size: 10px;
  }
  
  .forgot a{
    color: black;
  }
  
  /*styles for login button*/
  .btn1{
    width:  100%;
    padding: 8px 10px;
    font-size:  15px;
    background: #1c1f4c;
    cursor: pointer;
    display: inline;
    float: left;
    color: white;
    margin-top: 30px;
    border: 0;
  }
  
  .btn1:hover{
  background-color: #fec20f;}
	
	/*styles for heading*/
	.header{
		font-family: Arial, Helvetica, sans-serif;
		color : #1c1f4c;
		text-shadow: 5px 5px 7px #000000;
		font-size:  40px;
		text-transform: uppercase;
	}


	</style>
	


<!--------------------------------------------------------------------------------------Login ------------------------------------------------------------------->

<center>
<div class="box99">
<h1 class="header">Login</h1>
<!--------displaying error messages in the form--------->
<?php
if(@$_GET['Empty']==true)
{
?>	
	<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty']?></div>
<?php	
}

?>

<?php 
 if(@$_GET['Invalid']==true)
    {
?>
	<div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
<?php
    }
?>
<!------------------------------login form------------------->

<form method="post" action="login_validation.php">
<div class="input">
<label>Username</label>
<input type="text" placeholder="Username" name="Username" >
<br><br>
</div>
<div class="input">
<label>Password</label>
<input type="password" placeholder="Password" name="Password" >
<br>
</div>
<div class="forgot">
<a href="reset_password.php">Forgot password?</a><br>
</div>
<br>
<button type="submit" name="Login" class="btn1"> LOGIN </button>
</form>
</div>
</center>



<!--------------------------------------------------------------------------------Footer-------------------------------------------------------------------------->
<br>	
	
<?php
    include_once('includes/footer.php');
?>

</body>	
</html>
