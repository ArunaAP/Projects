<?php 
require_once('connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['Username']) || empty($_POST['Password']))
       {
            header("location:Agent login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from agent where Username='".$_POST['Username']."' and Password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['Username']=$_POST['Username'];
                header("location:Agent welcome.php");
				
            }
            else
            {
                header("location:Agent login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
?>

