<?php 
session_start();
include "../connection.php";
if (isset($_SESSION['teacher']) || isset($_SESSION['admin'])) {
	$get_id=$_GET['markId'];
	$pre=floatval($get_id);
	$st=floor($pre);
	$less=$pre-$st;
	$lesson=substr($less, 2);
	echo "<a class='li color3 top button' href='set_lesson_marks.php?markId=$get_id'>refresh</a>";
	$select_details=mysqli_query($con,"select * from students where student_ID='$st'");
	$fetch_details=mysqli_fetch_array($select_details);

	$select_details2=mysqli_query($con,"select * from lessons where lesson_ID='$lesson'");
	$fetch_details2=mysqli_fetch_array($select_details2);
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registeration</title>
	<link rel="stylesheet" href="../styles/forms.css">
</head>
<body>
	<div class="main">
		<div class="head color2">
			<img src="../images/ok.png" width="13" height="13"> Set Marks Of Student <b><?php echo $fetch_details['FirstName']." ".$fetch_details['LastName']; ?></b> In <a class="color3"><?php echo $fetch_details2['Title']; ?></a>
		</div>
		<div class="list">
            <form method="POST" class="form color">
            	<div class="input-field top">
                	<label>CAT:</label>
                	<input type="text" name="cat" placeholder="Enter CAT marks" value="0" min="0" max="100">
                </div>
                <div class="input-field">
                	<label>EXAM:</label>
                	<input type="text" name="exam" placeholder="Enter Exam marks" value="0" min="0" max="100">
                </div>
                <div class="input-field bottom">
                	<label></label>
                	<input type="submit" name="save" value="set">
                </div>
            </form>
            <?php 
            	if (isset($_POST['save'])) {
            		$cat=$_POST['cat'];
            		$exam=$_POST['exam'];
            		if (is_numeric($cat) && is_numeric($exam)) {
            			$up=mysqli_query($con,"insert into marks values('','$st','$lesson','$cat','$exam')");
            			if ($up==true) {
            				if (isset($_SESSION['teacher'])) {
            					header('location:set_marks_for_student.php');
            				}else{
            					header('location:view_marks.php');
            				}
            			}else{
            				echo "error occured!";
            			}
            		}else{
            			echo "enter valid marks less than or equal to 100.";
            		}
          			
            	}
            ?>
		</div>
	</div>
</body>
</html>
<?php
}else{
	header('location:login.php');
}
?>