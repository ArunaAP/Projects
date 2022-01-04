<?php
    include_once('includes/header.php');
?>

<?php
require_once('Agent login_validation.php');


if(isset($_POST['submit']))
{
    $_SESSION['Username']=$_POST['Username'];
    $query = "SELECT * FROM claim WHERE Username LIKE '%".$Username."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM claim";
    $search_result = filterTable($query);
}

function filterTable($query)
{
    $con = mysqli_connect("localhost", "root", "", "softmetriclife_insurance");
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}



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
		width: 100%;
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
	

<div class="center">

<center>
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome ' . $_SESSION['Username'].'<br/>';
?>

<h1 class="heading">Claim Details</h1>
</div>
</div>
</center>
<table class="ph_details">
      <thead>
        <tr>
          <th>CL_ID</th>
          <th>CLAIM_TYPE</th>
		  <th>CLAIM_AMOUNT</th>
          <th>CL_DATE</th>
		  <th>PH_ID</th>
                 </tr>
      </thead>
	  <tbody>
<?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['cl_id'];?></td>
					<td><?php echo $row['claim_type'];?></td>
                    <td><?php echo $row['cl_amount'];?></td>
                    <td><?php echo $row['cl_date'];?></td>
                    <td><?php echo $row['ph_id'];?></td>
                                   </tr>
                <?php endwhile;?>
		 </tbody>
    </table>		

<?php mysqli_close($con);?>
<br><br>

<div class="centerbtn">
<?php	
		echo '<a href="Agent welcome.php" ><input type=button value=Back></a>';	
        echo '<a href="logout agent.php?logout" ><input type=button value=Logout></a>';
    }
    else
    {
        header("location:Home page.php");
    }
?>
</div>
	
<?php
    include_once('includes/footer.php');
?>
</body>	
</html>

