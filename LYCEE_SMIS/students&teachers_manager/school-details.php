<?php 
session_start();
include '../connection.php';
$select_info1=mysqli_query($con,"select count(*) as n_students from students");
$fetch_info1=mysqli_fetch_array($select_info1);
$select_info2=mysqli_query($con,"select count(*) as n_teachers from teachers");
$fetch_info2=mysqli_fetch_array($select_info2);
$select_info3=mysqli_query($con,"select count(*) as n_classes from classes");
$fetch_info3=mysqli_fetch_array($select_info3);
$select_info4=mysqli_query($con,"select count(*) as n_lessons from lessons");
$fetch_info4=mysqli_fetch_array($select_info4);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School Details</title>
	<link rel="stylesheet" type="text/css" href="../styles/school-details.css">
</head>
<body>
<div class="main">
	<div class="head">
		<img src="../images/dots.png" width="3" height="13"> School Details
	</div>
    <div class="boxes">
        <div class="part">
            <div class="banner">
                <img src="../images/hehe.png" width="20" height="30">
                <a>Number Of Registered Students</a>
            </div>
            <div class="detail">
                <?php echo $fetch_info1['n_students'];?>
            </div>
        </div>
        <div class="part">
            <div class="banner">
                <img src="../images/hehe.png" width="20" height="30">
                <a>Number Of Working Teachers</a>
            </div>
            <div class="detail">
                <?php echo $fetch_info2['n_teachers'];?>
            </div>
        </div>
        <div class="part">
            <div class="banner">
                <img src="../images/hehe.png" width="20" height="30">
                <a>Number Of Open Class Rooms</a>
            </div>
            <div class="detail">
                <?php echo $fetch_info3['n_classes'];?>
            </div>
        </div>
        <div class="part">
            <div class="banner">
                <img src="../images/hehe.png" width="20" height="30">
                <a>Total Lessons Available</a>
            </div>
            <div class="detail">
                <?php echo $fetch_info4['n_lessons'];?>
            </div>
        </div>
    </div>
</div>
</body>
</html>