<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Co-Workers</title>
	<link rel="stylesheet" href="style.css" />
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
			<div class="header"><h1>Co-Workers</h1></div>
			<div class="info">
				<div> <h4> </h4> </div>
			</div>
		</div>

<!-- the php code to view the table -->
		<div style="position:absolute; left:300px; top:180px;">
		<h3>Enter Keyword:</h3>
		<input type="taskdesc" name="Remark"><br><br>
		 <input type="submit" value="Search">
		</div>

		<table class="table" style="position:absolute; left:300px; top:330px; width:30%">
			<tr>
				<th><h1>Name</h1></th>
			</tr>

			<?php
				$conn = mysqli_connect("localhost", "root", "", "exceedlabs");
				if ($conn-> connect_error){
					die("Connection failed:". $conn-> connect_error);
				}

				$sql = "SELECT username from users";
				$result = $conn -> query($sql);

				if($result->num_rows>0){
					while($row = $result-> fetch_assoc()){
						echo "<tr><td>". $row["username"] ."</td><td>";
					}
				echo "</table>";
				}
				else {
					echo "0 result";
				}
				$conn-> close();
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