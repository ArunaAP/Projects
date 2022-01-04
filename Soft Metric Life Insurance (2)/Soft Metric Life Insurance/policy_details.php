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

.btn15{
	width:  10%;
    padding: 2px 4px;
    font-size:  25px;
    background: #1c1f4c;
    cursor: pointer;
    color: white;
    margin-top: 30px;
	}
	
	.btn15:hover {
		background-color: #fec20f;
	}	
	
	.weltxt{
		font-style: italic;
		color: #1c1f4c;
		font-size: 32px;
	}
	

	
	</style>
	</head>
	


<marquee>
<div class="weltxt">
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome ' . $_SESSION['Username'].'<br/>';
?>
</div></marquee>
<div class="center">
<h1 class="heading">Policy Details</h1>
</div>
</div>
<?php
{
	$sql="SELECT * FROM policy WHERE ph_id LIKE '".$_POST['ph_id']."';";
	$result=mysqli_query($con, $sql);
	$queryResult=mysqli_num_rows($result);
      
	if($queryResult > 0){
		while($row=mysqli_fetch_assoc($result)){
			echo"<center><table class=ph_details>
			<tr>
			<th>Policy Type</th>
			<th>Term (Years)</th>
			<th>Life Cover</th>
			<th>Pay Mode</th>
			<th>Premium (Rs.)</th>
			</tr><tr>
			<td>".$row['policy_type']."</td>
			<td>".$row['term']."</td>
			<td>".$row['life_cover']."</td>
			<td>".$row['pay_mode']."</td>
			<td>".$row['premium']."</td>
			</tr>
			</table></center>";
		}
	}else {
		echo "No results";
	}
}




?>

<br><br>
<center>
<?php		
        echo '<a href="logout.php?logout" ><input type=button value=Logout></a>';
    }
    else
    {
        header("location:Home page.php");
    }
?>
&nbsp;&nbsp;&nbsp;<a href="welcome.php"><button class="btn15">Back</button></a>
</center>
<br>
<?php
    include_once('includes/footer.php');
?>

</body>	
</html>