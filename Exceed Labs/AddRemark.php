<?php

 	$hostname = "localhost";
 	$username = "root";
 	$password = "";
 	$databaseName = "exceedlabs";

 	$connect = mysqli_connect($hostname, $username, $password, $databaseName);

 	$query = "SELECT pname FROM `createproject`";
 	$query1 = "SELECT username FROM `users`";
 	$query2 = "SELECT * FROM `users`";

 	$result1 = mysqli_query($connect, $query);
 	$result2 = mysqli_query($connect, $query1);
 	$result3 = mysqli_query($connect, $query2)

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
			<div class="header"><h1>Add Remark</h1></div>
			<div class="info">
				<div> <h4> </h4> </div>
			</div>
		</div>
	</div>

<div style="position: absolute; left:250px; top:180px;">
	<form action="remark.php" method="POST">

 <!-- to select project name -->
 <h4> Choose Project </h4>
 <select name="ProjectName">
 	<?php while($row1 = mysqli_fetch_array($result1)):;?>
 	<option value="<?php echo $row1["pname"];?>"><?php echo $row1["pname"];?></option>
 	<?php endwhile;?>
 </select>

 <h4> Person Assigned on the Project </h4>
 <select name="username">
 	<?php while($row1 = mysqli_fetch_array($result2)):;?>
 	<option value="<?php echo $row1["username"];?>"><?php echo $row1["username"];?></option>
 	<?php endwhile;?>
 </select>

 <h4>Screenshot</h4> 
     <input type="file" name="file" id="upload" required>
    <!--  <button name="upload" class="btn">Upload</button> -->

	<h4>Add Remark:</h4>
		<input type="taskdesc" name="Remark"><br><br>
		 <input type="submit" value="Save">

</form>
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