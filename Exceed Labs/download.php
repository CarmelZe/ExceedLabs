<?php
include "pull.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$stat = $db->prepare("select * from uploaded_files where `id`=?");
	$stat->bindParam(1, $id);
	$stat->execute();
	$data = $stat->fetch();

	$file = 'uploads/'.$data['name'];

		header("location:download.php");
		die();
	if(file_exists($file)){

	//header("location:download.php");
		header("Content-Description: File Transfer");
		header("Content-Type: application/zip");
		header("Content-Disposition: attachment");
		//header("Expires: 0");
		header("Cache-Control: public");
		//header("Pragma: public");

		//header('Content-Length: '.filesize($file));
		//octet-stream
		readfile($file);
		exit;
	}

	else
	{
		echo "This File Does not exist.";
	}
}
?>