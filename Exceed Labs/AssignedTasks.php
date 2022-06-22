<?php
	include "AssignedTaskConnection.php";

	if(isset($_GET['id'])) {
		$id=$_GET['id'];
		$delete=mysqli_query($conection,"DELETE FROM assigntask WHERE `id`='$id'");
		header("location:AssignedTasks.php");
		die();
	}

	$select="select * from assigntask";
	$query=mysqli_query($conection,$select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Exceed Labs</title>
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
			<div class="header"><h1>Assigned Tasks</h1></div>
			<div class="info">
				<div> <h4> </h4> </div>
			</div>
		</div>

		<div style="position:absolute; left:300px; top:180px;">
		<h3>Enter Keyword:</h3>
		<input type="taskdesc" name="Remark"><br><br>
		 <input type="submit" value="Search">
		</div>

		<table class="table" style="position:absolute; left:300px; top:330px; width:60%">
			<tr>
				<!--<th>id</th>   <td>".$result['id']."</td>-->
				<th>Project Name</th>
				<th>Assigned To</th>
				<th>Assigned By</th>
				<th>Priority</th>
				<th>Task Description</th>
				<th>Status</th>
			</tr>

			<?php 
				$num=mysqli_num_rows($query);
				if($num>0)
				{
					while($result=mysqli_fetch_assoc($query)){
						echo "
						<tr>
							
							<td>".$result['ProjectName']."</td>
							<td>".$result['AssignedTo']."</td>
							<td>".$result['AssignedBy']."</td>
							<td>".$result['ChoosePriority']."</td>
							<td>".$result['TaskDescription']."</td>
							<td>
								<a href='AssignedTasks.php?id=".$result['id']."' class='btn btn-primary'>Finished Task</a>
							</td>
						</tr>
						";
					}
				}
			?>
				
			
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