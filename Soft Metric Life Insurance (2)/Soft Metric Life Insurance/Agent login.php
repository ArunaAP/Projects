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
	/*--------------------------------Agent login--------------------------*/
  .box{
    width: 450px;
    height: 550px;
    background: #d7baa600;
    margin: 30px auto;
    box-shadow: 0 25px 20px gray;
    padding: 50px;
  }
  .headertxt{
    font-size: 15px;
    text-decoration: none;
    color: #1c1f4c;
  }
  .box .top{
    display: inline-block;
    color: #fff;
    font-size: 20px;
    text-transform: uppercase;
  }

  .box input{
    width:  100%;
    border: 1px solid #000000;
    font-size: 15px;
    padding: 8px 10px;

  }
  .input label{
    width: 80px;
    margin-right:  10px;
    font-size: 20px;
    float: left;
    padding-bottom: 10px;
    padding-left: 8 px;
  }
  .forgot{
    float: right;
    font-size: 10px;
  }
  .forgot a{
    color: black;
  }
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
  background-color: #fec20f;
}
	</style>
</head>


	
<!--Login -->


<center>
<div class="box">
<div class="top">
<div class="headertxt">
<h1>Login</h1>
</div>
</div>
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


<div class="input">
<form action="Agent login_validation.php" method="post">
<label>Username</label>
<input type="text" placeholder="Username" name="Username" required class="text1">
<br><br>
</div>

<div class="input">
<label>Password</label>
<input type="password" placeholder="Password" name="Password" required class="text1">
<br>
</div>
<br>

<input type="submit" name="Login" value="LOGIN" class="btn1">



</div>
</center>


<?php
    include_once('includes/footer.php');
?>

</body>	
</html>
