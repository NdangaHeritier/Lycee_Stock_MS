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
			<img src="../images/ok.png" width="13" height="13"> Register New Teacher In School
		</div>
		<div class="list">
            <form method="POST" class="form">
                <div class="input-field top">
                	<label>Full Name:</label>
                	<input type="text" name="fullname" placeholder="Enter Teacher Full Name!">
                </div>
                <div class="input-field">
                	<label>Email:</label>
                	<input type="email" name="email" placeholder="Enter Teacher email!">
                </div>
                <div class="input-field">
                	<label>Phone Number:</label>
                	<input type="text" name="phone" placeholder="Enter Teacher Phone Number!">
                </div>
                <div class="input-field">
                	<label>Password:</label>
                	<input type="password" name="password" placeholder="Create Teacher Password!">
                </div>
                <div class="input-field">
                	<label>Confirm Password:</label>
                	<input type="password" name="confirm_password" placeholder="Re-enter Teacher Password!">
                </div>
                <div class="input-field bottom">
                	<label></label>
                	<input type="submit" name="save" value="Register">
                </div>
            </form>
            <?php 
            	if (isset($_POST['save'])) {
            		$fullname=$_POST['fullname'];
            		$email=$_POST['email'];
            		$phone=$_POST['phone'];
            		$password=$_POST['password'];
            		$pass_confirmation=$_POST['confirm_password'];
            		$today=date('Y-m-d');
            		if ($password === $pass_confirmation) {
            			$q1=mysqli_query($con,"select * from users where phone_number='$phone' and password='$password'");
            			$f1=mysqli_fetch_array($q1);
            			if (is_array($f1)) {
            				echo "<div class='message'><a class='close' href='teachers_reg.php'>x</a><div class='contes'> User Found with $phone, please check another option.</div></div>";
            			}else{
            				$q2=mysqli_query($con,"insert into users(fullname,phone_number,password,role,reg_date) values('$fullname','$phone','$password','Teacher','$today')");
            				$q3=mysqli_query($con,"select * from users where phone_number='$phone' and password='$password'");
            				$f3=mysqli_fetch_array($q3);
            				if (is_array($f3)) {
            					$id=$f3['U_ID'];
            					$q4=mysqli_query($con,"insert into teachers values('','$fullname','$email','$today','$id')");
            					if ($q4==true) {
            						echo "<div class='message'><a class='close' href='teachers_reg.php'>x</a><div class='contes'> Teacher $fullname has registered successfully.</div></div>";
            					}
            					else{
            						echo "<div class='message'><a class='close' href='teachers_reg.php'>x</a><div class='contes'> An Error, occured!!.</div></div>";
            					}
            				}else{
            					echo "<div class='message'><a class='close' href='teachers_reg.php'>x</a><div class='contes'> Can not fetch the registered ID in User table.</div></div>";
            				}
            			}
            		}else{
            			echo "<div class='message'><a class='close' href='teachers_reg.php'>x</a><div class='contes'> Please! type The Same password in second password field.</div></div>";
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