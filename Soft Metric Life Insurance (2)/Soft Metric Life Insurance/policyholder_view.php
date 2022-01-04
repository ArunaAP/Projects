<?php
    include_once('includes/header.php');
?>
<?php 
require_once('connection.php');

//write the query to get data from users table

$sql = "SELECT * FROM policyholder";

//execute the query

$result = $con->query($sql);


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

	
	.center {
		margin: auto;
		width: 25%;
		border: none;
		padding: 10px;
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
	
	.searchfeild{
	width: 300px;
    height: 110px;
    background: #20b2aa;
    margin: 30px auto;
    padding: 25px;
	}
	
	.btn{
		background-color: #1c1f4c;
		color: white;
		padding: 8px;
		margin: 8px 0;
		border-radius: 8px;
		cursor: pointer;
		width: 100%;
		font-size: 12px;
		text-decoration: none;
		
		
	}
	
	.btn:hover {
		background-color: #fec20f;
	}
	
	.hdtxt{
	font-size: 30px;
    color: #1c1f4c;
	padding-top: 5px;
	padding-bottom: 2px;
	}
	
	.btnsub{
		background-color: #fec20f;
		color: white;
		border-radius: 12px;
		padding: 4px 16px;
		font-size: 18px;
	}
	.btnsub:hover{
		background-color: #1c1f4c;
	}
	
	
	</style>

</head>


<!---search---->
<center>
	<form class="searchfeild" action="" method="POST">
		<input type="text" name="id" placeholder="Enter PH ID to search"/> <br><br>
		<input type="submit" name="search" value="search" class="btnsub">
		</form>
		
		<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,'softmetriclife_insurance');
		
		if(isset($_POST['search']))
		{
			$id = $_POST['id'];
			
			$query = "SELECT * FROM policyholder where ph_id='$id' ";
			$query_run = mysqli_query($connection,$query);
			
			while($row = mysqli_fetch_array($query_run))
			{
				?>
					<form action="" method="POST">
					 <input type="hidden" name="ph_id" value="<?php echo $row['ph_id'] ?>"  /><br>
					 <input type="text" name="title" value="<?php echo $row['title'] ?>"  /><br>
					 <input type="text" name="fullname" value="<?php echo $row['fullname'] ?>"  /><br>
					 <input type="text" name="nic" value="<?php echo $row['nic'] ?>"  /><br>
					 <input type="text" name="email"value="<?php echo $row['email'] ?>"  /><br>
					 <input type="text" name="contact_mobile" value="<?php echo $row['contact_mobile'] ?>"  /><br>
					 <input type="text" name="contact_home" value="<?php echo $row['contact_home'] ?>"  /><br>
					 <input type="text" name="address" value="<?php echo $row['address'] ?>"  /><br>
					 <input type="text" name="occupation"value="<?php echo $row['occupation'] ?>"  /><br>
					 <input type="text" name="marital_status" value="<?php echo $row['marital_status'] ?>"  /><br>
					 <input type="text" name="dob" value="<?php echo $row['dob'] ?>"  /><br>
					 <input type="text" name="gender" value="<?php echo $row['gender'] ?>"  /><br>
					 <input type="text" name="height"value="<?php echo $row['height'] ?>"  /><br>
					 <input type="text" name="weight" value="<?php echo $row['weight'] ?>"  /><br>
					 <input type="text" name="agent_name"value="<?php echo $row['agent_name'] ?>"  /><br>
					 <input type="text" name="Username" value="<?php echo $row['Username'] ?>"  /><br>
					 <input type="text" name="Password"value="<?php echo $row['Password'] ?>"  /><br>
					</form>
				<?php
			}
		}
		?>
		
</center>

<div class="center">

<h1 class="hdtxt">Policyholder Details</h1>
</div>
</div>
<center>

	
		<h2>Users</h2>
<table class="ph_details">
	<thead>
		<tr>
		<th>PH ID</th>
		<th>Title</th>
		<th>Full Name</th>
		<th>NIC</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Home</th>
		<th>Address</th>
		<th>Occupation</th>
		<th>Marital Status</th>
		<th>DOB</th>
		<th>Gender</th>
		<th>Height (cm)</th>
		<th>Weight (kg)</th>
		<th>Agent Name</th>
		<th>Username</th>
		<th>Password</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['ph_id']; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['fullname']; ?></td>
					<td><?php echo $row['nic']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contact_mobile']; ?></td>
					<td><?php echo $row['contact_home']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['occupation']; ?></td>
					<td><?php echo $row['marital_status']; ?></td>
					<td><?php echo $row['dob']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><?php echo $row['height']; ?></td>
					<td><?php echo $row['weight']; ?></td>
					<td><?php echo $row['agent_name']; ?></td>
					<td><?php echo $row['Username']; ?></td>
					<td><?php echo $row['Password']; ?></td>
					<td><a class="btn" href="policyholder_update.php?ph_id=<?php echo $row['ph_id']; ?>">Edit</a>&nbsp;&nbsp;<a class="btn"  href="policyholder_delete.php?ph_id=<?php echo $row['ph_id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	
<br><br>



<?php	
     
        echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
		echo '&nbsp;&nbsp;&nbsp;<a href="Admin_policyholder.php?back" ><input type=button value=Back></a>';
    
  
?>

<?php
    include_once('includes/footer.php');
?>

</body>	
</html>