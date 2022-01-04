<?php
require_once('connection.php');

$ph_id =$_POST["ph_id"];
$pay_amount =$_POST["pay_amount"];
$pay_methord =$_POST["pay_method"];


$sql = "INSERT INTO payment(ph_id,pay_amount,pay_methord) VALUES('$ph_id','$pay_amount','$pay_methord')";
if($con->query($sql)){
    echo "Inserted successfully";
    }
    else{
    echo "Error:". $con->error;
    }
    
    $con->close();
    
?>
