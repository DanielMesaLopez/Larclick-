<?php
session_start();

?>
<?php

include("db_conection.php");



if(isset($_POST['admin_login']))
{
    $admin_username=$_POST['admin_username'];
    $admin_password=$_POST['admin_password'];
	

    $check_admin="select * from admin WHERE admin_username='$admin_username' AND admin_password='$admin_password'";

 
    $run=mysqli_query($dbcon,$check_admin);

    if(mysqli_num_rows($run))
    {
	 echo "<script>alert('Estás ingresando exitosamente!')</script>";
       
 echo "<script>window.open('Admin/index.php','_self')</script>";
       
$_SESSION['admin_username']=$admin_username;



    }
    else
    {
        echo "<script>alert('nombre de usuario o contraseña incorrecta!')</script>";
		  echo "<script>window.open('index.php','_self')</script>";
		
		 exit();
		
    }
}
?>