<?php
require "config.php";

if (!preg_match($pattern, $email) ){  
	echo '<script type="text/javascript">
            window.onload = function () { alert("Email is not valid."); }
		  </script>';
      header("location: registration.html");
} 

if ($_POST["contact"] == 10) {  
	echo '<script type="text/javascript">
            window.onload = function () { alert("Enter atleast 10 digits"); }
		  </script>';
      header("location: registration.html");
} 


$sql="INSERT INTO register (fname, lname, email, contact, password) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[contact]','$_POST[password]')";

if($link->query($sql) === true)
{
	header("location: login.html");
}
else
{
  echo "ERROR: Could not able to execute $sql.".$link->error;
}
$link->close(); 
?>