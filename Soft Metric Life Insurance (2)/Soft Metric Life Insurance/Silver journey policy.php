<?php

	require_once('connection.php');

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
	</head>


	 
<!-----add Silver policy------>	

<center>
<img src="Images/Silver img1.jpg" height="457px" width="1200px">
</center>
<br>
<div class="Goldenall">
<h2 style="font-size: 40px" class="mtitle">Silver Journey life Insurance</h2>

<h3 class="para">The world moves towards more prominent movement and innovation. Each waking hour and there isn’t any ideal opportunity for us to contemplate in the present speedy world. 
With the bustling schedules and the occasions of regular daily existence it is simple for us to fail to remember that we need to set aside some effort for ourselves and focus 
on guaranteeing our protection and wellbeing of our loved ones and family. 
Soft Metric Life has perceived this, and we have the ideal answer for you, Silver Journey, term life insurance policy plan in Sri Lanka.
</h3>
<hr>  
<br>

<h2 style= "color:#fec20f" class="polititle">How it works</h2>

<h2 class="poliPara">Silver Journey is a term life insurance plan where you can obtain a comprehensive life cover for an affordable premium.</h2>
<hr>
<h2 style= "color:#fec20f" class="polititle">Benefits</h2>

<h2 class="poliPara">Life insurance cover will be paid immediately to the ’s beneficiaries at the time of an untimely death with any additional benefits they might have added to their plan.</h2>
<hr>
<h2 style= "color:#fec20f" class="polititle">Who can apply?</h2>

<h2 class="poliPara">Anyone aged between 18-60 years is eligible to purchase this policy for a period of 10, 15, 20, 25 and 30 years.</h2>
<hr>
<h2 style= "color:#fec20f" class="polititle">Payment Modes</h2>

<h2 class="poliPara">This policy can be paid in Half-Yearly and Annual modes.</h2>
<hr>
<h2 style= "color:#fec20f" class="polititle">Additional Benefits</h2>

<h2 class="poliPara">The following additional benefit plans can be added on to your life plan as additional protection.</h2>

<h2 class="poliPara">•	Accidental Death Benefit
<br>
•	Critical Illness Cover</h2>

<hr>

<div class="inqform">
	<h2 class="inqh2" >Inquire now</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<div class="inqwrapper">
			<div class="roww">
				<label for="title">Title</label>
				<select id="inqtitle" name="Title">
  					<option value="mr">Mr.</option>
  					<option value="ms">Ms.</option>
  					<option value="mrs">Mrs.</option>
				</select>
			</div>
			<div class="roww">
				<label for="inqname">Name</label>
				<input type="text" placeholder="Enter your name" name="inqname" required>
			</div>
			<div class="roww">
				<label for="inqphone">Phone number</label>
				<input type="text" placeholder="Enter your Phone number" name="inqphone" required>
			</div>
			<div class="roww">
				<label for="inqemail">Email</label>
				<input type="email" placeholder="Enter your Email" name="inqemail" required>
			</div>
			<input type="submit" name="inqsubmit">
		</div>
	</form>
</div>
</div>

<?php

if(isset($_POST["inqsubmit"]))
{
$inqTitle =$_POST["Title"];
$inqName =$_POST["inqname"];
$inqPhone =$_POST["inqphone"];
$inqEmail =$_POST["inqemail"];


$sql = "INSERT INTO inquiry_form(inqTitle,inqName,inqPhone,inqEmail)VALUES('$inqTitle','$inqName','$inqPhone','$inqEmail')";
if($con->query($sql)){
    echo "Inserted successfully";
    }
    else{
    echo "Error:". $con->error;
    }
}    
    $con->close();
    
?>
	
<?php
    include_once('includes/footer.php');
?>

</body>	
</html>
