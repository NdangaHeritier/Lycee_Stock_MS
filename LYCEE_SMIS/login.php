<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<title>LOGIN</title>
	<style type="text/css">
		input{
			padding: 15px;border-radius: 10px;width: 100%;
			background-color: RGB(255,250,220);
			border:solid 1px RGB(255,123, 70) ;
			color: black;outline: none;

		}
		label{
			font-weight: 700;
		}
	</style>
</head><br><br>
<body style="background: RGB(255,240,220);color: indianred;" class="container">
	
	<div style="border-radius: 10px;position: absolute;top: 15%;right: 30%;padding: 50px;border:solid 1px rgb(255,123, 70);" class="shadow">
	<form style="text-align:center;" method="POST">
<!------------------login--------------------------------------->
		<P style="color:RGB(255,123, 70);font-weight: 1000;font-family: 'poppins',sans-serif;font-size: 40px;">Log in</P>
		<label style="color:  rgb(255,123, 70);">Phone Number:</label>
		<input type="text" name="tel" placeholder="enter phone number" minlength="10" maxlength="10">
		
		<br><br>
		<label style="color: rgb(255,123, 70);">Password:</label>
		<input type="password" name="password" placeholder="enter password">
		
		<br><br>
		<input style="background-color:rgb(255,123, 70);" type="submit" name="sub" value="login">

	</form>

	<?php
	if(isset($_POST['sub'])){
		
		
		$tel=$_POST['tel'];
		
		$pass=$_POST['password'];
		
		
		$con=mysqli_connect('localhost','root','','lycee_smis');
		$sel=mysqli_query($con,"select * from users where phone_number='$tel' and password='$pass'");
		$fetch=mysqli_fetch_array($sel);
if(is_array($fetch)){
			$_SESSION['user']=$fetch['fullname'];
			$_SESSION['tel']=$fetch['phone_number'];
			$_SESSION['role']=$fetch['role'];
if($fetch['role']==='Store Keeper'){
			$_SESSION['skeeper']=$fetch['U_ID'];
	header("location:a_index.php");
}
else if($fetch['role']==='Cashier'){
			$_SESSION['bursar']=$fetch['U_ID'];
	header("location:b_index.php");
}
else if($fetch['role']==='DOS'){
	$_SESSION['admin']=$fetch['U_ID'];
header("location:students&teachers_manager/admins_index.php");
}
else if($fetch['role']==='Head Master'){
	$_SESSION['admin']=$fetch['U_ID'];
header("location:students&teachers_manager/admins_index.php");
}
else if($fetch['role']==='Teacher'){
	$_SESSION['teacher']=$fetch['U_ID'];
header("location:students&teachers_manager/teachers_index.php");
}
else{
	echo "Unspecified roles!!!!";
}

		}else{
		echo "<b>the specified inputs does not found in system!</b>";
	}
		
	}
	?>
</div><br><br>
</body>
</html>
