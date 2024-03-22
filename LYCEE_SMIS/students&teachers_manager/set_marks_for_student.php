<?php
session_start();
if (isset($_SESSION['teacher'])) {
    include('../connection.php');
    $uid=$_SESSION['teacher'];
    $profile=mysqli_query($con,"select * from teachers where User_ID='$uid'");
    $fetchP=mysqli_fetch_array($profile);
    $myId=$fetchP['teacher_ID'];
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
			<img src="../images/dots.png" width="3" height="13"> Set Marks For Students In My Lessons
		</div>
	    <div class="list">
            <div class="top">
            </div>
            <?php
            	$select_lessons=mysqli_query($con,"select classes.*, lessons.* from classes, lessons where classes.class_ID=lessons.class_ID and lessons.teacher_ID='$myId'");
            	if (mysqli_num_rows($select_lessons)>0) {
            	while($fetch_lessons=mysqli_fetch_array($select_lessons)){
            ?>
            	<div class="li">
            	<img src="../images/right.png" width="28" height="23">
            	<div class="li-detail">
            		<a href="lesson_marks.php?lessonId=<?php echo $fetch_lessons['lesson_ID'] ?>">
            			<div>
            				<span><?php echo $fetch_lessons['Title'];?></span>
            				<b class="mleft">With <?php echo $fetch_lessons['Credits'];?> Credits</b>
            			</div>
            			<div class="cl">
            				In Senior <?php echo $fetch_lessons['ClassName'];?>
            			</div>
            		</a>
            	</div>
            </div>
            <?php
            	}
            }else{
            		echo "no data found!";
            	}
            ?>
	    </div>
	</div>
</body>
</html>

<?php
}else{
    header('location:../login.php');
}
?>