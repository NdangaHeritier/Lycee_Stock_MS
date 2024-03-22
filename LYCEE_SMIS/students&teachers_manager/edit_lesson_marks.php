<?php 
session_start();
include "../connection.php";
if (isset($_SESSION['teacher']) || isset($_SESSION['admin'])) {
	$get_id=$_GET['markId'];
	$select_details=mysqli_query($con,"select students.*,lessons.*,marks.* from students,lessons,marks where marks.mark_ID='$get_id' and students.student_ID=marks.student_ID and lessons.lesson_ID=marks.lesson_ID");
	$fetch_details=mysqli_fetch_array($select_details);
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
		<div class="head">
			<img src="../images/ok.png" width="13" height="13"> Modify Marks Of Student <?php echo $fetch_details['FirstName']; ?> In <?php echo $fetch_details['Title']; ?>
		</div>
		<div class="list">
            <form method="POST" class="form">
            	<div class="input-field top">
                	<label>CAT:</label>
                	<input type="text" name="cat" placeholder="Enter CAT marks" value="<?php echo $fetch_details['CAT']; ?>">
                </div>
                <div class="input-field top">
                	<label>EXAM:</label>
                	<input type="text" name="exam" placeholder="Enter Exam marks" value="<?php echo $fetch_details['EXAM']; ?>">
                </div>
                <div class="input-field bottom">
                	<label></label>
                	<input type="submit" name="save" value="save">
                </div>
            </form>
            <?php 
            	if (isset($_POST['save'])) {
            		$cat=$_POST['cat'];
            		$exam=$_POST['exam'];
            		if (is_numeric($cat) && is_numeric($exam)) {
            			$up=mysqli_query($con,"update marks set CAT='$cat',EXAM='$exam' where mark_ID='$get_id'");
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