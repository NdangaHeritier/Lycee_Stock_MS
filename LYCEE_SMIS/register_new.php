<?php
include'connection.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTER NEW</title>
	<link rel="stylesheet" href="styles/register_new.css">
</head>
<body style="background:rgba(255, 255, 255, 0.8);">
<div class="container">
	<div class="container-item-img">
		<img src="images/ad.png" >
	</div>
	<center>
		<div class="container-item">
			<form method="POST">
		<h3>Register new product</h3>
<b style="color: rgb(250, 100, 0);">PRODUCT_NAME:</b><br>
<input type="text" class="insert-product" name="product" placeholder="Enter new product name!!!" required><br><br>
<b style="color: rgb(250, 100, 0);">QUANTITY_MEASURES:</b><br>
<select name="measure" class="select">
<option value="kgs">kgs</option>
<option value="littre">Ltrs</option></select><br><br>		
<input type="submit" class="submit" name="save" value="Register">
</form>
		</div>

<?php
if(isset($_POST['save'])){
	$name=$_POST['product'];
	$measure=$_POST['measure'];
	$qty=0;
	$qry1=mysqli_query($con,"select * from products where product_name='$name'");
	$fetch=mysqli_fetch_array($qry1);
	if(is_array($fetch)){
		echo "<div class='message'><a class='close' href='register_new.php'>x</a><div class='contes'> $name Already exists in stock. if ayou want to perform stock_in to this product! select it in top pannel to perform!</div></div>";
	}
		else{
	$qry2=mysqli_query($con,"insert into products(pro_id,product_name,quantity,qnty_measures) values('','$name','$qty','$measure')");	
	if($qry2=='true'){
		echo "<div class='message'><a class='close' href='register_new.php'>x</a><div class='contes'> $name have been added on stock products list successfully! Now you can start add it in your stock.</div></div>";
	}else{
		echo "<div class='message'><a class='close' href='register_new.php'>x</a><div class='contes'>Registeration of new products in stock has gone down due to programs error. Sorry!!</div></div>";
	}
	}}
	?>
	
	</div>
</body>
</html>
</center>