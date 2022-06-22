<?php
	$pname = $_POST['pname'];
	$pdate = $_POST['pdate'];

	//Database connection
	$conn = new mysqli('localhost','root','','exceedlabs');
	if($conn->connect_error){
		die('Connection Failed  : '.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into createproject(pname,pdate) values(?,?)");
		$stmt->bind_param("ss",$pname,$pdate);
		$stmt->execute();
		echo "Project Created Successfully...";
		$stmt->close();
		$conn->close();
	}
?>