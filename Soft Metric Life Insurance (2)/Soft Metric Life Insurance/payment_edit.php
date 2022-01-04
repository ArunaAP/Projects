<?php
// include database connection file
include_once("connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $pay_id = $_POST['pay_id'];
	$ph_id =$_POST["ph_id"];
    $pay_amount =$_POST["pay_amount"];
    $pay_method =$_POST["pay_method"];
		
	// update user data
	$sql = mysqli_query($con, "UPDATE payment SET ph_id='$ph_id',pay_amount='$pay_amount',pay_method='$pay_method' WHERE id=$pay_id");

	// Redirect to homepage to display updated user in list
	header("Location: admin_payment.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$pay_id = $_GET['pay_id'];

// Fetech user data based on id
 $result = mysqli_query($con, "SELECT * FROM payment WHERE pay_id = $pay_id");
 while($row = mysqli_fetch_array($result))
 {
	$ph_id = $row['ph_id'];
 	$pay_amount = $row['pay_amount'];
	$pay_method = $row['pay_method'];
 }
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>

<body>
	<a href="admin_payment.php">View details</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="payment_edit.php">
		<table border="0">
			<tr> 
				<td>ph_id</td>
				<td><input type="text" name="ph_id" value=<?php echo $ph_id;?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="pay_amount" value=<?php echo $pay_amount;?>></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="pay_method" value=<?php echo $pay_method;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="pay_id" value=<?php echo $_GET['pay_id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

