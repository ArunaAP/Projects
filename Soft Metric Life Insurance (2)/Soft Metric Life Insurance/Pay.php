<?php

require_once('connection.php');
require_once('login_validation.php');
?>

<?php
    include_once('includes/header.php');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Soft Metric Life Insurance</title>
	<link rel="stylesheet" href="styles.css">
  

  <style>
        	input[type=button]{
		background-color: #1c1f4c;
		color: white;
		cursor: pointer;
		font-size: 14px;
		text-decoration: none;
		overflow: hidden;
		border-radius: 5px;
		width: 100px;
		margin-right: 10px;	
        height:30px;
	}
	
	input[type=button]:hover {
		background-color: #fec20f;
	}
    .payForm{
    padding: 0px 5% 20px 5%;
    box-shadow: 0 5px 20px gray;
    margin: 25px auto ;
    align-items: center;
    width: 70%;
    height: 115%;
  }
  .payForm .paybtn{
    width:  20%;
    height: 40px;
    padding: 8px 10px;
    font-size:  15px;
    background:  #1c1f4c;
    cursor: pointer;
    display: inline;
    color: white;
    margin-top: 2px;
    border: 0;
    align-items: center;
    float: right;

    
  }
  .paybtn:hover{
    background-color: #fec20f;
  }
  </style>
	</head>


<!--------------------------------------------------------->
<center>
<?php
if(isset($_SESSION['Username']))
    {
		
        echo ' Welcome ' . $_SESSION['Username'].'<br/>';
    }
?>
 </center>   

<div class="payForm">
    <h2 class="payheader">Pay online</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <div class="row">
        <label >Enter Policyholder ID</label>
        <input type="text" name="ph_id" require class="inpt" required> <br>
    </div>

    <div class="row">
        <label >Select policy type</label>
        <select name="policytype" class='inpt' required>
            <option value="Golden Infinity">Golden Infinity</option>
            <option value="Silver Journey">Silver Journey</option>
            <option value="Bronze Pensioner">Bronze Pensioner</option>
        </select><br>
    </div>

   
<hr>
    <h3>Payment information</h3><br><br>

    <div class="row">
    <label >Select Payment type</label >
        <select name="pay_method" class="inpt02" required> 
            <option value="VISA">VISA</option>
            <option value="MASTER">MASTER</option>
            <option value="PAYPAL">PAYPAL</option>
        </select><img src="Images/payicon.jpg" alt="payicon" width="160px" height="48px" style="padding-left:20px" ><br>
    </div>

    <div class="row">
        <label >Card Number</label>
        <input type="text" name="crd_num" placeholder="0000 0000 0000 0000" required class="inpt" > <br>
    </div>  
        <div class="row">
        <label >Expiry Date</label>
        <input type="text" name="expdate" placeholder="mm/yy" required class="inpt" > 
     </div>
        <div class="row">
        <label >CV code</label>
        <input type="text" name="CVcode" placeholder="CVC" required class="inpt" > 
    </div>
<hr>
<div class="row">
        <label >Enter Amount</label>
        <input type="text" name="pay_amount"  class="inpt" placeholder="Rs." required> <br>
    </div>   <br>


        <button type="submit" name="pay" class="paybtn"> PAY</button> 
        <?php		
        echo '<a href="paymenu.php" ><input type=button value=Back></a>';
?>   
          
<br><br>
    </form>

</div>



<?php

if(isset($_POST["pay"]))
{
$ph_id =$_POST["ph_id"];
$pay_amount =$_POST["pay_amount"];
$pay_method =$_POST["pay_method"];


$sql = "INSERT INTO payment(ph_id,pay_amount,pay_method)VALUES('$ph_id','$pay_amount','$pay_method')";
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
