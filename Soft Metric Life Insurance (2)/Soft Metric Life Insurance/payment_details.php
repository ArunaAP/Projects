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
	
	.heading{
		color: #1c1f4c;
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
		width: 35%;
		font-size: 18px;
		text-decoration: none;
		overflow: hidden;
		margin-right:30px;
		
		
		
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


	
	</style>
	</head>
	
	


<div class="center">

<center>
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome ' . $_SESSION['Username'].'<br/>';
	}
?>

<h1 class="heading">Payment Details</h1>
</center>
</div>
</div>
<?php
{
	$sql="SELECT * FROM payment WHERE ph_id LIKE '".$_POST['ph_id']."';";
	$result=mysqli_query($con, $sql);
	$queryResult=mysqli_num_rows($result);
      
	if($queryResult > 0){
		while($row=mysqli_fetch_assoc($result)){
			echo"<center><table class=ph_details>
			<tr>
			<th>PH ID</th>
			<th>Paid Amount (Rs.)</th>
			<th>Paid Method</th>
			<th>Paid Date</th>
			</tr><tr>
			<td>".$row['ph_id']."</td>
			<td>".$row['pay_amount']."</td>
			<td>".$row['pay_method']."</td>
			<td>".$row['pay_date']."</td>
			</tr>
			</table></center>";
		}
	}else {
		echo "No results";
	}
}




?>

<br><br>
<div class="centerbtn">
<center>
<?php	

		echo '<a href="paymenu.php?back" ><input type=button value=Back></a>';
		echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
  
?>
</center>
</div>
<?php
    include_once('includes/footer.php');
?>	

</body>	
</html>