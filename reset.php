<?php
ob_start();
require "config.php";


if ($_POST["newpassword"] = $_POST["confirmpassword"]) {  
	echo '<script type="text/javascript">
            window.onload = function () { alert("Password does not match."); }
		  </script>';
		  header("location: login.html");
} 

$sql="UPDATE register SET password='$_POST[newpassword]' WHERE email='$_POST[email]'";
/*redirect browser*/
header("Location: login.html");
?>