<?php
include'connection.php'; 
$pid=$_GET['pid'];
$qr=mysqli_query($con,"select * from products where pro_id='$pid'");
$fetch1=mysqli_fetch_array($qr);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STOCK_IN</title>
	<link rel="stylesheet" href="styles/stock_in.css">
</head>
<body>
	<center>
<div class="mai">
	<div class="details">
		<img src="images/ad.png" height="200" width="200">
		<div style="font: 25px arial black,sans-serif;color: rgb(237, 123, 70);border: 2px solid rgb(237, 123, 70);margin: 1rem;">
			<p><?php echo $fetch1['product_name'];?></p>
			<p style="font-size: 20px;">
				<img src="images/av.png" width="30" height="30">
				<?php echo $fetch1['Quantity']." ".$fetch1['qnty_measures'];?> Available</p>
		</div>	
	</div>
	<form method="POST">
		<h3>Entry <?php echo $fetch1['product_name'];?> Into Stock</h3>
<b style="color: rgb(237, 123, 70);">AMOUNT:</b><br><input type="number" name="kilogram" placeholder="Enter the quantity!!!"><br><br>
<b style="color: rgb(237, 123, 70);">EXP_DATES:</b><br><input type="date" name="dates" placeholder="Enter Product expired date"><br><br>
<input type="submit" name="sub" value="Add into stock">
</form>
</div>
<?php
if(isset($_POST['sub'])){
	$amount=$_POST['kilogram'];
	$date=date('y-m-d');
	$exp=$_POST['dates'];
	$pro=$fetch1['pro_id'];
	$qry=mysqli_query($con,"select * from products where pro_id='$pid'");
	$fetch=mysqli_fetch_array($qry);
	$pname=$fetch['product_name'];
	$pm=$fetch['qnty_measures'];
	$new=$fetch['Quantity']+intval($amount);
	$qry1=mysqli_query($con,"insert into stock_in(pro_id,amount_in,in_date,expired_date) values('$pro','$amount','$date','$exp')");
	$qry2=mysqli_query($con,"update products set quantity='$new' where pro_id='$pro'");
	if($qry2=='true'){
		echo "<div class='message'><a class='close' href='stock_in.php?pid=$pid'>x</a><div class='contes'> $amount $pm of $pname have be successfully added into stock! Now There are $new $pm of $pname in your stock.</div></div>";
	}
	else{

		echo "<div class='message'><a class='close' href='stock_in.php?pid=$pid'>x</a><div class='contes'> $amount $pm of $pname have not added in stock due to programs error. Sorry!!</div></div>";
	}
} 
?>		
</body>
</html>
</center>