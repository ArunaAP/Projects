<?php
    include_once('includes/header.php');
?>
<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM agent";

//execute the query

$result = $conn->query($sql);


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
	
	
	
	
	.btn{
		background-color: #1c1f4c;
		color: white;
		padding: 10px;
		margin: 8px 0;
		border-radius: 5px;
		cursor: pointer;
		width: 100%;
		font-size: 10px;
		text-decoration: none;
		
		
	}
	
	.btn:hover {
		background-color: #fec20f;
	}
	
	input[type=button]{
		background-color: #1c1f4c;
		color: white;
		padding: 16px;
		margin: 8px 0;
		border-radius: 12px;
		cursor: pointer;
		width: 50%;
		font-size: 18px;
		text-decoration: none;
		overflow: hidden;
		
		
	}
	
	input[type=button]:hover {
		background-color: #fec20f;
	}
	
	.centerbtn{
		margin: auto;
		width: 15%;
		border: none;
		padding: 15px;
		
	}
	.center {
		margin: auto;
		width: 25%;
		border: none;
		padding: 10px;
	}
	.btn111{
		background-color: #1c1f4c;
		color: white;
		padding: 10px;
		margin: 8px 0;
		border-radius: 5px;
		cursor: pointer;
		width: 100%;
		font-size: 10px;
		text-decoration: none;	
	}
	
	.btn111:hover {
		background-color: #fec20f;
	}
	
	input[type=button]{
		background-color: #1c1f4c;
		color: white;
		padding: 5px;
		margin: 5px 0;
		border-radius: 12px;
		cursor: pointer;
		width: 50%;
		font-size: 18px;
		text-decoration: none;
		overflow: hidden;
		
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
	/*---------------*/

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
	
	
	</style>

</head>



<!---search---->
<center>
	<form action="" method="POST">
		<input type="text" name="id" placeholder="Enter AG ID to search"/> <br/>
		<input type="submit" name="search" value="search">
		</form>
		
		<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,'softmetriclife_insurance');
		
		if(isset($_POST['search']))
		{
			$id = $_POST['id'];
			
			$query = "SELECT * FROM agent where ag_id='$id' ";
			$query_run = mysqli_query($connection,$query);
			
			while($row = mysqli_fetch_array($query_run))
			{
				?>
					<form action="" method="POST">
					 <input type="hidden" name="ag_id" value="<?php echo $row['ag_id'] ?>"  /><br>
					 <input type="text" name="agent_name" value="<?php echo $row['agent_name'] ?>"  /><br>
					 <input type="text" name="nic_" value="<?php echo $row['nic'] ?>"  /><br>
					 <input type="text" name="email_" value="<?php echo $row['email'] ?>"  /><br>
					 <input type="text" name="contact_no"value="<?php echo $row['contact_no'] ?>"  /><br>
					 <input type="text" name="address_"value="<?php echo $row['address'] ?>"  /><br>
					 <input type="text" name="dob"value="<?php echo $row['dob'] ?>"  /><br>
					 <input type="text" name="gender"value="<?php echo $row['gender'] ?>"  /><br>
					</form>
				<?php
			}
		}
		?>
		
</center>

<div class="center">
<center>
<h1 class="heading">Agent Details</h1>
</div>
</div>
</center>
<center>

	<div class="container">
		<h2>users</h2>
<table class="ph_details"border:2px>
	<thead>
		<tr>
		<th>Agent Id</th>
		<th>Agent_Name</th>
		<th>Nic</th>
		<th>Email</th>
		<th>Contact_No</th>
		<th>Address</th>
		<th>Dob</th>
		<th>Gender</th>
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
					<td><?php echo $row['ag_id']; ?></td>
					<td><?php echo $row['agent_name']; ?></td>
					<td><?php echo $row['nic']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['contact_no']; ?></td>
					<td><?php echo $row['address']; ?></td>
					<td><?php echo $row['dob']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><a class="btn btn-info" href="agent update.php?ag_id=<?php echo $row['ag_id']; ?>">Edit</a><a class="btn btn-danger" href="agent_delete.php?ag_id=<?php echo $row['ag_id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>


<div class="centerbtn">
<?php	
		echo '<a href="Admin_agent.php?back" ><input type=button value=Back></a>';
        echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';
?>
</div>

<?php
    include_once('includes/footer.php');
?>
	
	

</body>	
</html>