<?php
    include_once('includes/header.php');
?>

<?php 
  require_once('connection.php');
?>

<!DOCTYPE html>

<html lang="en">
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soft Metric Life Insurance</title>
	<link rel="stylesheet" href="styles.css">
	
	
<!-----style contact us form-------->	

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  font-family: Arial;
}

input[type=submit] {
  background-color:#fec20f ;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 20px;
}

input[type=submit]:hover {
  background-color:#00848C;
}

.container {
  border-radius: 5px;
  background-color: #1c1f4c;
  padding: 20px;
  color: white;
  margin-left:25%;
  margin-right:25%;
}
</style>
</head>




<!-----Add a form------->
<center>
<h2>Contact Us</h2>
</center>
<h3><center>Please fill out this form and one of our sales officer will contact you directly!</center></h3>
<br>
	

<div class="container">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="fullName">Full Name </label>
    <input type="text" id="fullName" name="fullName" placeholder="Your name..">

    <label for="NIC">NIC </label>
    <input type="text" id="NIC" name="NIC" placeholder="Your NIC number..">
    
     <label for="Email">E-mail </label>
    <input type="text" id="Email" name="Email" placeholder="Your E-mail Address..">
    
     <label for="contactNo">Contact No </label>
    <input type="text" id="contactNo" name="contactNo" placeholder="Your contact number..">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" name="btnSubmit" value="Submit">
  </form>
</div>

<br>

<?php
	if(isset($_POST["btnSubmit"]))
	{
		$fullName= $_POST["fullName"];
		$NIC= $_POST["NIC"];
		$Email= $_POST["Email"];
		$contactNo= $_POST["contactNo"];
		$message= $_POST["message"];
	
		$sql= "INSERT INTO contact_us_form(fullName,NIC,Email,contactNo,message)VALUES('$fullName', '$NIC', '$Email', $contactNo, '$message')";
		
		if ($con -> query($sql)){
			echo"Thanks for contact with Us!";
		}
		else{
			echo"Error:".$con -> error;
		}
	}
	$con-> close();	
?>	


<?php
    include_once('includes/footer.php');
?>

</body>	
</html>
