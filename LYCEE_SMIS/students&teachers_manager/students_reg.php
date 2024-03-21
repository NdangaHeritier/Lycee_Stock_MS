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
			<img src="../images/ok.png" width="13" height="13"> Register New Student In School
		</div>
		<div class="list">
            <form method="POST" class="form">
                <div class="input-field top">
                	<label>First Name:</label>
                	<input type="text" name="fname" placeholder="Enter student First Name!">
                </div>
                <div class="input-field top">
                	<label>Last Name:</label>
                	<input type="text" name="lname" placeholder="Enter student Last Name!">
                </div>
                <div class="input-field">
                	<label>Select Sex:</label>
                	<select name="sex">
                		<option>Male</option>
                		<option>Female</option>
                	</select>
                </div>
                <div class="input-field">
                	<label>Select Date Of Birth:</label>
                	<input type="date" name="dob">
                </div>
                <div class="input-field">
                	<label>Select Student's Class:</label>
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
                <div class="input-field bottom">
                	<label></label>
                	<input type="submit" name="save" value="Register">
                </div>
            </form>
            <?php 
            	if (isset($_POST['save'])) {
            		$fname=$_POST['fname'];
            		$lname=$_POST['lname'];
            		$sex=$_POST['sex'];
            		$dob=$_POST['dob'];
            		$class=$_POST['class'];
          
            			$q1=mysqli_query($con,"select * from students where FirstName='$fname' and LastName='$lname' and class_ID='$class'");
            			$f1=mysqli_fetch_array($q1);
            			if (is_array($f1)) {
            				echo "<div class='message'><a class='close' href='students_reg.php'>x</a><div class='contes'>student $fname $lname Found with in the same class, please check another option.</div></div>";
            			}else{
     
            					$q4=mysqli_query($con,"insert into students values('','$fname','$lname','$sex','$dob','$class','$today')");
            					if ($q4==true) {
            						echo "<div class='message'><a class='close' href='students_reg.php'>x</a><div class='contes'> student $fname has registered successfully.</div></div>";
            					}
            					else{
            						echo "<div class='message'><a class='close' href='students_reg.php'>x</a><div class='contes'> An Error, occured!!.</div></div>";
            					
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