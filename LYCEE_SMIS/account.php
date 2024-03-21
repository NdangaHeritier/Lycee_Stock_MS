<?php 
 session_start();
 if (isset($_SESSION['role'])) {
 	include('connection.php');

 	//------ seeking for real user identification code....-----



 	if (isset($_SESSION['skeeper'])) {
 		$uid=$_SESSION['skeeper'];
 	}
 	elseif (isset($_SESSION['admin'])) {
 		$uid=$_SESSION['admin'];
 	}
 	elseif (isset($_SESSION['teacher'])) {
 		$uid=$_SESSION['teacher'];
 	}
 	else{
 		$uid= null;
 	}
 	


 	//----selecting and fetching user existing details-----


 	$profile=mysqli_query($con,"select * from users where U_ID='$uid'");
 	$fetchP=mysqli_fetch_array($profile);
 	$pass=$fetchP=['password'];
 	?>
 	<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EDIT ACCOUNT</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
        input, select{width: 100%;padding: 8px;border: none;border-bottom: 3px solid rgb(237, 123, 70);margin: 1rem 3px 2px 3px;border-radius: 4px;color: rgb(80, 90, 100);}
        input[type=password]:focus,input[type='number']:focus,input[type='text']:focus, select:focus{
            border: none;border-bottom: 5px solid rgb(10, 100, 230);outline: none;border-radius: 5px;box-shadow: 0px 0px 20px -1px silver;
        }
        input[type='submit']{background-color: rgba(237, 123, 70, 1.0);border: none;border-radius: 5px;padding: 10px;font-size: 16px;}
        h3{color: rgb(10, 100, 230);font: 22px arial,sans-serif;}
        body{background-color: rgba(255, 240, 220, 1.0);}
        .row{background-color: rgba(107, 23, 70, 0.2); color: rgb(0, 0, 0);font: 14px arial,sans-serif;font-weight: bold;}
        .det{padding: 5px;}
        .det2{padding: 5px;color: rgb(70, 80, 90);}
        form{background-color: rgba(50, 30, 0, 0.2);border: 0.5px solid rgb(237, 123, 70);margin-top: 1rem;border-radius: 4px;}
        form .b{
        	margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="row p-2">
	<?php 
          $qry=mysqli_query($con,"select * from users where U_ID='$uid'");
          $fetch=mysqli_fetch_array($qry);
		?>
		<div class="img col-sm-4">
		<img src="<?php echo $fetch['pic'];?>" class="rounded-circle shadow" style="border: 1px solid rgb(237, 123, 70);" width="80" height="80">
	</div>
		<div class="col-sm-2">
			<div class="det"><?php echo $fetch['role'] ?></div>
			<div class="det2"> <?php echo $fetch['fullname'] ?></div>
		</div>
		<div class="col-sm-6">
			<div class="det">Phone N0: </div>
			<div class="det2"><?php echo $fetch['phone_number'] ?></div>
		</div>
</div>
<form method="POST" class="px-4 pb-2 w-50 offset-2 shadow" enctype="multipart/form-data">
	<div class="p-4" style="background-color: rgba(237, 123, 70, 1.0);color: rgb(255, 255, 250);"><b>Change Your Profile Info:</b></div>
	<b>Fullnames:</b><input type="text" name="fullname" value="<?php echo $fetch['fullname'] ?>">
	<b>Phone Number:</b><input type="tel" name="phone" value="<?php echo $fetch['phone_number'] ?>" minlength="10" maxlength="10">
	<b>Password:</b><input type="text" name="password" value="<?php echo $fetch['password'] ?>"><br>
	<input type="submit" name="save" value="SAVE">
</form>
<form method="POST" class="px-4 pb-2  w-50 offset-2 shadow" enctype="multipart/form-data">
	<b>Profile Picture:</b><br>
	<img src="<?php echo $fetch['pic'];?>" class="rounded-circle shadow" style="border: 1px solid rgb(237, 123, 70);" width="80" height="80">

	<input type="file" name="pic" accept=".png,.jpg" value="<?php echo $fetch['pic'] ?>">
	<input type="submit" name="save2" value="SAVE">
</form>
	<?php
	if(isset($_POST['save'])){
		
		$ufname=$_POST['fullname'];
		$phone=$_POST['phone'];
		$pass=$_POST['password'];

		$ins=mysqli_query($con,"update users set fullname='$ufname',phone_number='$phone',password='$pass' where U_ID='$uid'");
		if ($ins==true) {
			?>
<div style="background-color: rgba(0, 60, 60, 1.0);position: absolute;top: 5rem;left: 7rem;padding: 2rem;color: whitesmoke;font-weight: bold;font-family: arial,sans-serif;">
	<div><a class="btn btn-sm btn-outline-danger float-end" href="account.php">X</a></div>
	<div>Your Profile Info have updated Successfully!</div>
	<div>
		<a class="text-info text-decoration-none" href="avaliable_stock.php">Leave Page</a>
		<a class="text-danger text-decoration-none offset-1" href="account.php">Close</a></div>
</div>
			<?php
		}else{ 
			?>
			<div style="background-color: rgba(0, 60, 60, 1.0);position: absolute;top: 5rem;left: 7rem;padding: 2rem;">
	<div><a class="btn btn-sm btn-outline-warning" href="account.php">X</a></div>
	<div>Your Profile Info have not updated Successfully!</div>
	<div><a href="avaliable_stock.php">Leave Page</a><a href="account.php">Close</a></div>
</div>
		<?php 
	}
	}

	//profile picture

	if(isset($_POST['save2'])){
		
		$profile=$_FILES['pic']['tmp_name'];
		$path="profiles/".$_FILES['pic']['name'];
		move_uploaded_file($profile, $path);
		$ins=mysqli_query($con,"update users set pic='$path' where U_ID='$uid'");
		if ($ins==true) {
			?>
<div style="background-color: rgba(0, 60, 60, 1.0);position: absolute;top: 5rem;left: 7rem;padding: 2rem;color: whitesmoke;font-weight: bold;font-family: arial,sans-serif;">
	<div><a class="btn btn-sm btn-outline-danger float-end" href="account.php">X</a></div>
	<div>Your Profile Info have updated Successfully!</div>
	<div>
		<a class="text-info text-decoration-none" href="search.php">Leave Page</a>
		<a class="text-danger text-decoration-none offset-1" href="account.php">Close</a></div>
</div>
			<?php
		}else{ 
			?>
			<div style="background-color: rgba(0, 60, 60, 1.0);position: absolute;top: 5rem;left: 7rem;padding: 2rem;">
	<div><a class="btn btn-sm btn-outline-warning" href="account.php">X</a></div>
	<div>Your Profile Info have not updated Successfully!</div>
	<div><a href="search.php">Leave Page</a><a href="account.php">Close</a></div>
</div>
		<?php 
	}
	}
	
	?>
	

</center>
</div>
</body>
</html>
<?php 
}
else{
	header('location:login.php');
}