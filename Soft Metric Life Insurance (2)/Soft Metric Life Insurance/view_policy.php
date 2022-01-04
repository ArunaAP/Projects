<?php
    include_once('includes/header.php');
?>
<?php 
include "config.php";

//write the query to get data from users table

$sql = "SELECT * FROM policy";

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
	
	
	</style>

</head>


<!---search---->
<center>
	<form action="" method="POST">
		<input type="text" name="id" placeholder="Enter PH ID to search"/> <br/>
		<input type="submit" name="search" value="search">
		</form>
		
		<?php
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,'softmetriclife_insurance');
		
		if(isset($_POST['search']))
		{
			$id = $_POST['id'];
			
			$query = "SELECT * FROM policy where ph_id='$id' ";
			$query_run = mysqli_query($connection,$query);
			
			while($row = mysqli_fetch_array($query_run))
			{
				?>
					<form action="" method="POST">
					 <input type="hidden" name="p_id" value="<?php echo $row['p_id'] ?>"  /><br>
					 <input type="text" name="policy_type" value="<?php echo $row['policy_type'] ?>"  /><br>
					 <input type="text" name="term" value="<?php echo $row['term'] ?>"  /><br>
					 <input type="text" name="life_cover" value="<?php echo $row['life_cover'] ?>"  /><br>
					 <input type="text" name="pay_mode" value="<?php echo $row['pay_mode'] ?>"  /><br>
					 <input type="text" name="premium" value="<?php echo $row['premium'] ?>"  /><br>
					 <input type="text" name="ph_id"value="<?php echo $row['ph_id'] ?>"  /><br>
					</form>
				<?php
			}
		}
		?>
		
</center>
<center>
<div class="center">

<h1 class="heading">Policy Details</h1>
</div>
</div>
</center>
<center>

	<div class="ph_details">
		<h2>Users</h2>
<table class="ph_details">
	<thead>
		<tr>
		<th>Policy Id</th>
		<th>Policy Type</th>
		<th>Term</th>
		<th>Life Cover(Rs.)</th>
		<th>Pay Mode</th>
		<th>Premium</th>
		<th>PH ID</th>
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
					<td><?php echo $row['p_id']; ?></td>
					<td><?php echo $row['policy_type']; ?></td>
					<td><?php echo $row['term']; ?></td>
					<td><?php echo $row['life_cover']; ?></td>
					<td><?php echo $row['pay_mode']; ?></td>
					<td><?php echo $row['premium']; ?></td>
					<td><?php echo $row['ph_id']; ?></td>
					<td><a class="btn" href="update_policy.php?p_id=<?php echo $row['p_id']; ?>">Edit</a><a class="btn" href="delete_policy.php?p_id=<?php echo $row['p_id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>


<div class="centerbtn">
<?php	
     
		echo '<a href="Admin_policy.php?back" ><input type=button value=Back></a>';
        echo '<a href="admin logout.php?logout" ><input type=button value=Logout></a>';

?>
</div>
<?php
    include_once('includes/footer.php');
?>
	

</body>	
</html>