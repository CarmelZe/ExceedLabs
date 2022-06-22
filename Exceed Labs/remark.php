<?php
	$ProjectName = $_POST['ProjectName'];
	$Remark = $_POST['Remark'];
	$username = $_POST['username'];

	//Database connection
	$conn = new mysqli('localhost','root','','exceedlabs');
	if($conn->connect_error){
		die('Connection Failed  : '.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into remark(ProjectName,Remark,username)values(?,?,?)");
		$stmt->bind_param("sss",$ProjectName,$Remark,$username);
		$stmt->execute();
		echo "Remark Added...";
		$stmt->close();
		$conn->close();
	}
?>