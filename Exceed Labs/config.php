<?php
$server = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "exceedlabs";

$conn = mysqli_connect($server, $dbuser, $dbpass, $database);
if(!$conn){
	die("<script>alert('Connection Failed.')</script>");
}
?>