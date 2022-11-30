<?php
$link = mysqli_connect("localhost:3308", "root", "root123", "Safar");
if($link === false)
{
  die("ERROR: Could not connect.".$link->connect_error);
}
else
{
	//echo "Connection is established successfully Host information is saved : ".$link->host_info;
}
?>