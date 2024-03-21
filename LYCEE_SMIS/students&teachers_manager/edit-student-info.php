<?php 
session_start();
include "../connection.php";
if (isset($_SESSION['admin'])) {
	$get_id=$_GET['tid'];
	$select_details=mysqli_query($con,"select * from students where student_ID='$get_id'");
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
			<img src="../images/ok.png" width="13" height="13"> Modify Details Of <?php echo $fetch_details['LastName']; ?> Student			

			<a href="edit-student-info.php?tid=<?php echo $fetch_details['student_ID']; ?>">refresh</a> 
		</div>
		<div class="list">
            <form method="POST" class="form">
                <div class="input-field top">
                	<label>First Name:</label>
                	<input type="text" name="fname" placeholder="Enter student First Name!" value="<?php echo $fetch_details['FirstName']; ?>">
                </div>
                <div class="input-field top">
                	<label>Last Name:</label>
                	<input type="text" name="lname" placeholder="Enter student Last Name!" value="<?php echo $fetch_details['LastName']; ?>">
                </div>
                <div class="input-field">
                	<label>Select Sex:</label>
                	<select name="sex">
                		<?php 
                			if ($fetch_details['Sex']=='Male') {
                				?>
                		<option>Male</option>
                		<option>Female</option>
                		<?php
                			}else{
                				?>
                		<option>Female</option>
                		<option>Male</option>
                		<?php
                			}
                		?>
                		<option>Male</option>
                		<option>Female</option>
                	</select>
                </div>
                <div class="input-field">
                	<label>Select Date Of Birth:</label>
                	<input type="date" name="dob" value="<?php echo $fetch_details['DOB']; ?>">
                </div>
                <div class="input-field">
                	<label>Select Student's Class:</label>
                	<select name="class">
                		<?php
                			$tr=$fetch_details['class_ID'];
                			$select_class1=mysqli_query($con,"select * from classes where class_ID='$tr'");
                			$fetch_class1=mysqli_fetch_array($select_class1);
                			?>
                		<option value="<?php echo $fetch_class1['class_ID'];?>">Senior <?php echo $fetch_class1['ClassName'];?></option>
                		<?php
                			$select_class=mysqli_query($con,"select * from classes where class_ID != '$tr'");
                			while ($fetch_class=mysqli_fetch_array($select_class)) {
                				?>
                				<option value="<?php echo $fetch_class['class_ID'];?>">Senior <?php echo $fetch_class['ClassName'];?></option>
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
            		$fname=$_POST['fname'];
            		$lname=$_POST['lname'];
            		$sex=$_POST['sex'];
            		$dob=$_POST['dob'];
            		$class=$_POST['class'];
     
            					$q4=mysqli_query($con,"update students set FirstName='$fname',LastName='$lname',Sex='$sex',DOB='$dob',class_ID='$class' where student_ID='$get_id'");
            					if ($q4==true) {
            						header('location:student_details.php');
            					}
            					else{
            						echo "<div class='message'><a class='close' href='#'>x</a><div class='contes'> An Error, occured!!.</div></div>";
            					
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