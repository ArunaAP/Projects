<!DOCTYPE html>

<html lang="en">
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soft Metric Life Insurance</title>
	<link rel="stylesheet" href="styles.css">
	

<!---style navigation bar and dropdown button---->		

</head>

<div class="hero-image">
  <div class="hero-text"> 
		<img class="logo" src="Images/Logo.png" width="230" height="230">
		
		<center>
    <div class="hederposition">
		<h1>Soft Metric Life Insurance</h1>
		
		<h3>Insuring Your Future Dreams</h3>
    <br>
		</center>
    </div>
    </div>
    </div>


<!---Add navigation bar menu---->
	<hr class="hr1">
		
	<body>	
			<div class="navbar">
				<a href="Home page.php">Home</a>
				<a href="Who we are.php">Who We Are</a>
				<div class="dropdown">
			<button class="dropbtn">Life Insurance <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			<a href="Goldern infinity policy.php">Golden Infinity</a>
			<a href="Silver journey policy.php">Silver Journey</a>
			<a href="Bronze pensioner policy.php">Bronze Pensioner</a>
			</div>
			</div> 
				<a href="Contact us.php">Contact Us</a>
        <div class="right">
				<a href="Buy online.php">Buy Online</a>
				<a href="Pay online.php">Pay Online</a>	
			<div class="dropdown">
			<button class="dropbtn">Login <i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
			<a href="Admin login.php">Admin</a>
			<a href="Agent login.php">Agent</a>
			<a href="Policyholder login.php">Policyholder</a>
      </div>
			</div>
			</div> 
		</div>	
	<br>  
	

<!--------------------regitration form ---------------------->

<div class="regForm">

	<h2 class="regheader">User registration</h2><br><br>

		<form action="Who we are.php" method="post">
		<div class="inputdt">
			<label>Full Name</label>
			<input type="text" name="f_Name" placeholder="First Name" class="inpt1" required>
			<input type="text" name="l_Name" placeholder="Last Name"class="inpt1" required>
			<br>
		</div>
		<div class="inputdt">
			<label>NIC</label>
			<input type="text" name="NIC" class="inpt" required>
			<br>
		</div>
		<div class="inputdt">
			<label>Email</label>
			<input type="email" name="email" class="inpt">
			<br>
		</div>
		<div class="inputdt">
			<label>Phone Number</label>
			<input type="text" name="phone"class="inpt">
			<br>
		</div>
		<div class="inputdt">
			<label>Address</label>
			<input type="text" name="address" class="inpt">
			<br>
		</div>
<br>
		<hr>
<br><br>
		<div class="inputdt">
			<label>Enter Username</label>
			<input type="text" name="user_name"class="inpt" required>
			<br>
		</div>
		<div class="inputdt">
			<label>Enter Password</label>
			<input type="password" name="password"class="inpt" required>
			<br>
		</div>
		<div class="inputdt">
			<label>Comfirm Password</label>
			<input type="password" name="cmf password" class="inpt" required>
			<br>
		</div>

		<a href="Policyholder login.php"><input type="submit" value="Sign Up" class="regbtn" name="btnSubmit" ></a>
		
		</form>
	
</div>





	
<hr class="hr3">
	
<footer class="footer">

<div class="leftFooter">
Quick Links
<br><br>
<a href="Who we are.php">Who We Are</a><a href="Contact us.php">Contact Us</a>

<div class="rightFooter">
Soft Metric Life Insurance
<br>
75,Millenium Drive, Malabe
<br>
Tel:011 750 3000
<br>
info.softmetric@gmail.com
<br>
</div>
</div>

<center>
<a href="https://www.facebook.com/Soft-Metric-Life-Insurance-101575288775739"><img src="Images/facebook.png" alt="fbicon" width="30px" height="30px"></a>
  <a href="https://www.instagram.com/softmetriclifeinsurance/"><img src="Images/insta.png" alt="intaicon"width="30px" height="30px"></a>
  <a href="https://www.linkedin.com/in/soft-metric-life-insurance-088982211"><img src="Images/linkedin.png" alt="inicon"width="30px" height="30px"></a>
  
<h5 style="font-weight:bold; font-size:13px;">All Rights Reserved by: Soft Metric Life Insurance ©2021<i class="fa fa-copyright"style="font-size:12px;color:white;"></i> </h5>
</center>
</footer>		

</body>	
</html>
