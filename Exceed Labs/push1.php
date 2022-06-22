<?php

 	$hostname = "localhost";
 	$username = "root";
 	$password = "";
 	$databaseName = "exceedlabs";

 	$connect = mysqli_connect($hostname, $username, $password, $databaseName);

 	$query = "SELECT id,pname FROM `createproject`";
 	$query1 = "SELECT id,username FROM `users`";
 	$query2 = "SELECT id,username FROM `users`";

 	$result1 = mysqli_query($connect, $query);
 	$result2 = mysqli_query($connect, $query1);
 	$result3 = mysqli_query($connect, $query2)

 ?>
