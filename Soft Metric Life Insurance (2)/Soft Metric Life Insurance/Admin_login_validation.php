<?php 
require_once('Admin_connection.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['Username']) || empty($_POST['Password']))
       {
            header("location:Admin login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from admin_login where Username='".$_POST['Username']."' and Password='".$_POST['Password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['Username']=$_POST['Username'];
                header("location:Admin_welcome.php");
				
            }
            else
            {
                header("location:Admin login.php?  Invalid= Please Enter Correct User Name and Password");
            }
       }
    }
?>

