<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pull Projects</title>
	<link rel="stylesheet" href="style.css">
	<!--to insert some icons-->

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="sidebar">
			<h2>ExceedLab</h2>
			<ul>
				<li><a href="homepage.php"><i class="fas fa-home"></i>Home</a></li>
				<li><a href="CoWorkers.php"><i class="fas fa-user"></i>Co-Workers</a></li>
				<li><a href="viewProject.php"><i class="fas fa-address-card"></i>Projects</a></li>
				<li><a href="Push.php"><i class="fas fa-project-diagram"></i>Push</a></li>
				<li><a href="AddRemark.php"><i class="fas fa-comment"></i>Add remark</a></li>
				<li><a href="Contact.html"><i class="fas fa-address-book"></i>Contact</a></li>
				<li><a href="viewRemark.php"><i class="fas fa-eye"></i>View Remark</a></li>
				<li><a href="login.php"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
			</ul>
		</div>
		<div class="main_content">
			<div class="header"><h1>Pull Project</h1></div>
			<div class="info">
				<div> <h4> </h4> </div>
			</div>
		</div>
	</div>

	<p><br/></p>
	<div class="container">
		<table class="table table-bordered" style="position:absolute; left:300px; top:200px; width:50%">
			<thead>
				<tr>
					
					<th><h1>Name</h1></th>
					<th><h1>Project Name</h1></th>
					<th><h1>Action</h1></th>
				</tr>
			</thead>
			<tbody>
				<?php
				include "pull.php";
				$stmt = $db->prepare("select * from uploaded_files");
				$stmt->execute();
				while($row = $stmt->fetch()){
				?>
				<tr>
		
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['ProjectName']?></td>
					<td class="text-center"><a href="download.php?id<?php echo $row['id']?>" class="btn btn-primary">Download</a></td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>

	<nav>
		<div class="logo">
			
		</div>
		<ul>
			<li><a href="CREATEPROJECT.html"><i class="fas fa-plus" aria-hidden="true"></i>Create Project</a></li>
			<li><a href="AssignTask.php"><i class="fas fa-tasks"></i>Assign Task</a></li>
			<li><a href="PullProject.php"><i class="fas fa-download"></i>Pull Project</a></li>
			<li><a href="AssignedTasks.php"><i class="fas fa-eye"></i>Assigned Tasks</a></li>
		</ul>
	</nav>

</body>
</html>