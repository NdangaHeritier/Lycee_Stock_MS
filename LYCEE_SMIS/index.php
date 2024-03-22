<?php 
session_start();
include 'connection.php';
$select_info1=mysqli_query($con,"select count(*) as n_students from students");
$fetch_info1=mysqli_fetch_array($select_info1);
$select_info2=mysqli_query($con,"select count(*) as n_teachers from teachers");
$fetch_info2=mysqli_fetch_array($select_info2);
$select_info3=mysqli_query($con,"select count(*) as n_classes from classes");
$fetch_info3=mysqli_fetch_array($select_info3);
$select_info4=mysqli_query($con,"select count(*) as n_lessons from lessons");
$fetch_info4=mysqli_fetch_array($select_info4);
$select_info5=mysqli_query($con,"select count(*) as n_staffs from users");
$fetch_info5=mysqli_fetch_array($select_info5);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LYCEE STOCK</title>
	<link rel="stylesheet" href="styles/index.css">
	<style type="text/css">
		body{
			background-image: url('images/back.png');
			background-repeat: repeat;
			background-clip: border-box;
			background-size: auto;
		}
		.lycee{
			color: rgb(255, 240, 220);
			font: 40px arial black,sans-serif;
			text-shadow: 2px 2px 2px rgb(50, 20, 0);
		}
		center{
			background-color: rgba(50, 30, 20, 0.7);
			padding: 5rem;
		}
		.start{
			padding-top: 5rem;
		}
		.start .start-button{
			height: 86px;
			font: 20px arial black,sans-serif;
			width: 300px;
			border: none;
			box-shadow: 2px 2px 5px 1px rgb(100, 50, 0);
			border-radius: 5px;
			background-color: rgba(237, 123, 70, 1.0);
			color: white;
		}
		.details{
			display: flex;
			margin-top: 2rem;
		}
		.details .part{
			padding: 3rem;
			border: 0.5px solid silver;
			background-color: rgba(73, 44, 15, 0.5);
			margin-left: 5px;
			border-radius: 10px;
			box-shadow: 0px 0px 5px -1px black;
		}
		.details .part:hover{
			background-color: rgba(73, 44, 15, 1.0);
			padding-top: 5rem;
			padding-bottom: 5rem;
		}
		.details .part .info{
			font: 40px arial black, sans-serif;
			color: rgb(237, 123, 70);
		}
		.details .part .label{
			font: 30px arial black, sans-serif;
			color: rgb(255, 243, 250);
		}
	</style>
</head>
<body style="margin: 0px;">
<header>
	<div class="logo">
		<div class="img" style="background-color: white;padding: 5px;width: 100px;border-left: 20px double rgb(237, 123, 70);padding-left: 16px;">
		<img src="images/lyceelogo.png" height="55" width="60">
	</div>
	</div>
	<div class="profiles" style="padding-left: 2rem;padding-top:1rem">
			<a href="login.php">
				<button type="button">Login</button>
			</a>
	</div>
</header>
<center>
	<div class="lycee">
	LYCEE SAINT ALEXANDRE SAULI DE MUHURA SCHOOL INFORMATION MANAGEMENT SYSTEM
</div>
<div class="start">
	<div class="details">
	<div class="part">
		<div class="info">
			<?php echo $fetch_info1['n_students'];?>
		</div>
		<div class="label">
			Students
		</div>
	</div>
	<div class="part">
		<div class="info">
			<?php echo $fetch_info2['n_teachers'];?>
		</div>
		<div class="label">
			Teachers
		</div>
	</div>
	<div class="part">
		<div class="info">
			<?php echo $fetch_info3['n_classes'];?>
		</div>
		<div class="label">
			Classes
		</div>
	</div>
	<div class="part">
		<div class="info">
			<?php echo $fetch_info4['n_lessons'];?>
		</div>
		<div class="label">
			Lessons
		</div>
	</div>
	<div class="part">
		<div class="info">
			<?php echo $fetch_info5['n_staffs'];?>
		</div>
		<div class="label">
			Total Staffs
		</div>
	</div>
</div>
	<!-- <a href="a_index.php"><button class="start-button">Start Now!</button></a> -->
</div>

</center>
</body>
</html>