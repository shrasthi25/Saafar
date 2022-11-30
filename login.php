<?php
ob_start();
require "config.php";

$email = $_POST["email"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  

if (!preg_match ($pattern, $email) ){  
	echo '<script type="text/javascript">
            window.onload = function () { alert("Email is not valid."); }
		  </script>';
    header("location: login.html");
} 


$sql="SELECT * FROM register WHERE email='$_POST[email]' and password='$_POST[password]'";
header("Location: index.html");
/*$res=$link->query($sql);
$numrows=mysqli_num_rows($res);
if($numrows==1)
{
	session_start();
	$_SESSION['sess_user']=$_POST[n];
	/*redirect browser
	header("Location: index.html");
}
else
{
	echo "<br><b> INVALID USER";
}
$link->close(); */
?>



