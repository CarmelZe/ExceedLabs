<?php
	$ProjectName = $_POST['ProjectName'];
	$AssignedTo = $_POST['AssignedTo'];
	$AssignedBy = $_POST['AssignedBy'];
	$ChoosePriority = $_POST['ChoosePriority'];
	$TaskDescription = $_POST['TaskDescription'];

	//Database connection
	$conn = new mysqli('localhost','root','','exceedlabs');
	if($conn->connect_error){
		die('Connection Failed  : '.$conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("insert into assigntask(ProjectName,AssignedTo,AssignedBy,ChoosePriority,TaskDescription) values(?,?,?,?,?)");
		$stmt->bind_param("sssss",$ProjectName,$AssignedTo,$AssignedBy,$ChoosePriority,$TaskDescription);
		$stmt->execute();
		echo "Assigned Task Successfully...";
		$stmt->close();
		$conn->close();
	}
?>