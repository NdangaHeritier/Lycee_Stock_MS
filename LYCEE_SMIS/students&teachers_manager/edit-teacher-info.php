<?php 
session_start();
include "../connection.php";
if (isset($_SESSION['admin'])) {
	$get_id=$_GET['tid'];
	$select_details=mysqli_query($con,"select users.*, teachers.* from users, teachers where teachers.teacher_ID='$get_id' and users.U_ID=teachers.User_ID");
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
			<img src="../images/ok.png" width="13" height="13"> Modify Details Of Teacher, <?php echo $fetch_details['FullName']; ?>			

			<a href="edit-teacher-info.php?tid=<?php echo $fetch_details['teacher_ID']; ?>">refresh</a> 
		</div>
		<div class="list">
            <form method="POST" class="form">
                <div class="input-field top">
                	<label>Full Name:</label>
                	<input type="text" name="fullname" placeholder="Enter Teacher Full Name!" value="<?php echo $fetch_details['FullName']; ?>">
                </div>
                <div class="input-field">
                	<label>Email:</label>
                	<input type="email" name="email" placeholder="Enter Teacher email!" value="<?php echo $fetch_details['Email']; ?>">
                </div>
                <div class="input-field">
                	<label>Phone Number:</label>
                	<input type="text" name="phone" placeholder="Enter Teacher Phone Number!" value="<?php echo $fetch_details['phone_number']; ?>">
                </div>
                <div class="input-field">
                	<label>Password:</label>
                	<input type="password" name="password" placeholder="Create Teacher Password!" value="<?php echo $fetch_details['password']; ?>">
                </div>
                <div class="input-field">
                	<label>Confirm Password:</label>
                	<input type="password" name="confirm_password" placeholder="Re-enter Teacher Password!" value="<?php echo $fetch_details['password']; ?>">
                </div>
                <div class="input-field bottom">
                	<label></label>
                	<input type="submit" name="save" value="Save">
                </div>
            </form>
            <?php 
            	if (isset($_POST['save'])) {
            		$fullname=$_POST['fullname'];
            		$email=$_POST['email'];
            		$phone=$_POST['phone'];
            		$password=$_POST['password'];
            		$user=$fetch_details['User_ID'];
            		$pass_confirmation=$_POST['confirm_password'];
            		$today=date('Y-m-d');
            		if ($password === $pass_confirmation) {
            			$q1=mysqli_query($con,"select * from users where phone_number='$phone' and password='$password' and U_ID <> '$user'");
            			$f1=mysqli_fetch_array($q1);
            			if (is_array($f1)) {
            				echo "<div class='message'><a class='close' href='teacher_details.php'>x</a><div class='contes'> User Found with $phone, please check another option.</div></div>";
            			}else{
            				$q2=mysqli_query($con,"update users set fullname='$fullname',phone_number='$phone',password='$password' where U_ID='$user'");
            					$id=$user;
            					$q4=mysqli_query($con,"update teachers set FullName='$fullname',Email='$email' where User_ID='$id' and teacher_ID='$get_id'");
            					if ($q4==true) {
            						header('location:teacher_details.php');
            					}
            					else{
            						echo "<div class='message'><a class='close' href='teacher_details.php'>x</a><div class='contes'> An Error, occured!!.</div></div>";
            					}
            			}
            		}else{
            			echo "<div class='message'><a class='close' href='teacher_reg.php'>x</a><div class='contes'> Please! type The Same password in second password field.</div></div>";
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