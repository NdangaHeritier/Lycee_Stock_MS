<?php 
session_start();
include "../connection.php";
if (isset($_SESSION['admin'])) {
	$get_id=$_GET['tid'];
	$select_details=mysqli_query($con,"select * from classes where class_ID='$get_id'");
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
			<img src="../images/ok.png" width="13" height="13"> Modify Details Of Senior <?php echo $fetch_details['ClassName']; ?> Class
		</div>
		<div class="list">
            <form method="POST" class="form">
                <div class="input-field top">
                	<label>Class Name:</label>
                	<input type="text" name="classname" placeholder="Enter class Name [remember that class name start with 'Senior']!" value="Senior <?php echo $fetch_details['ClassName']; ?>">
                </div>
                <div class="input-field">
                	<label>Change class Teacher:</label>
                	<select name="teacher">
                		<?php
                			$tr=$fetch_details['ClassTeacher'];
                			$select_class1=mysqli_query($con,"select * from teachers where teacher_ID='$tr'");
                			$fetch_class1=mysqli_fetch_array($select_class1);
                			?>
                		<option value="<?php echo $fetch_class1['teacher_ID'];?>">Teacher [<?php echo $fetch_class1['FullName'];?>]</option>
                		<?php
                			$select_class=mysqli_query($con,"select * from teachers where teacher_ID != '$tr'");
                			while ($fetch_class=mysqli_fetch_array($select_class)) {
                				?>
                				<option value="<?php echo $fetch_class['teacher_ID'];?>">Teacher [<?php echo $fetch_class['FullName'];?>]</option>
                				<?php
                			}
                		?>
                	</select>
                </div>
                <div class="input-field bottom">
                	<label></label>
                	<input type="submit" name="save" value="save">
                </div>
            </form>
            <?php 
            	if (isset($_POST['save'])) {
            		$classname=$_POST['classname'];
            		$classteacher=$_POST['teacher'];
          			if (substr($classname, 0, 6) == "Senior") {
          				
            			$q1=mysqli_query($con,"select * from classes where ClassName='$classname' and ClassName<>'$old'");
            			$f1=mysqli_fetch_array($q1);
            			if (is_array($f1)) {
            				echo "<div class='message'><a class='close' href='#'>x</a><div class='contes'>class Senior $classname Found with in our class list, please check another option.</div></div>";
            			}else{
     							$classN=trim(substr($classname, 7));
            					$q4=mysqli_query($con,"update classes set ClassName='$classN',ClassTeacher='$classteacher' where class_ID='$get_id'");
            					if ($q4==true) {
            						header('location:classes_details.php');
            					}
            					else{
            						echo "<div class='message'><a class='close' href='classes_reg.php'>x</a><div class='contes'> An Error, occured!!.</div></div>";
            					
            					}
            			}
          			}else{
          				echo "<div class='message'><a class='close' href='classes_reg.php'>x</a><div class='contes'> Class Name Must Start With \\ Senior \\.</div></div>";
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