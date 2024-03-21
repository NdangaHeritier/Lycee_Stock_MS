<?php 
session_start();
include "../connection.php";
if (isset($_SESSION['admin'])) {
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
			<img src="../images/ok.png" width="13" height="13"> Register New Lesson For Students
		</div>
		<div class="list">
            <form method="POST" class="form">
                <div class="input-field top">
                	<label>Lesson Title:</label>
                	<input type="text" name="title" placeholder="Enter Lesson title!">
                </div>
                <div class="input-field">
                	<label>Select Teacher Of Lesson:</label>
                	<select name="teacher">
                		<?php
                			$select_class=mysqli_query($con,"select * from teachers");
                			while ($fetch_class=mysqli_fetch_array($select_class)) {
                				?>
                				<option value="<?php echo $fetch_class['teacher_ID'];?>">Teacher [<?php echo $fetch_class['FullName'];?>]</option>
                				<?php
                			}
                		?>
                	</select>
                </div>
                <div class="input-field">
                	<label>Select Class:</label>
                	<select name="class">
                		<?php
                			$select_class=mysqli_query($con,"select * from classes");
                			while ($fetch_class=mysqli_fetch_array($select_class)) {
                				?>
                				<option value="<?php echo $fetch_class['class_ID'];?>">Senior <?php echo $fetch_class['ClassName'];?></option>
                				<?php
                			}
                		?>
                	</select>
                </div>
                <div class="input-field">
                	<label>Credits:</label>
                	<input type="number" name="credits" placeholder="Enter lesson credits!">
                </div>
                <div class="input-field bottom">
                	<label></label>
                	<input type="submit" name="save" value="Register">
                </div>
            </form>
            <?php 
            	if (isset($_POST['save'])) {
            		$title=$_POST['title'];
            		$class=$_POST['class'];
            		$teacher=$_POST['teacher'];
            		$credits=$_POST['credits'];
            			$q1=mysqli_query($con,"select * from lessons where Title='$title' and class_ID='$class'");
            			$f1=mysqli_fetch_array($q1);
            			if (is_array($f1)) {
            				echo "<div class='message'><a class='close' href='lessons_reg.php'>x</a><div class='contes'> $title Lesson Found with in THis class, please check another option.</div></div>";
            			}else{
            				
            					$q4=mysqli_query($con,"insert into lessons values('','$title','$class','$teacher','$credits')");
            					if ($q4==true) {
            						echo "<div class='message'><a class='close' href='lessons_reg.php'>x</a><div class='contes'> Lesson ---$title--- has registered successfully.</div></div>";
            					}
            					else{
            						echo "<div class='message'><a class='close' href='lessons_reg.php'>x</a><div class='contes'> An Error, occured!!.</div></div>";
            					}
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