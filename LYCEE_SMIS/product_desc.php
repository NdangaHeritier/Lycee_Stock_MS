<?php
include 'connection.php';
$pid=$_GET['pid'];
$qry=mysqli_query($con,"select * from products where pro_id='$pid'");
$fetch=mysqli_fetch_array($qry);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $fetch['product_name']?></title>
	<link rel="stylesheet" href="styles/product_desc.css">
</head>
<body style="background-color: rgba(255, 255, 255, 0.8);">
<div class="main">
	<div class="identity">
		<div style="width: 350px;">
			<img src="images/rep.png" width="100" height="100">
		<div style="font: 25px arial black,sans-serif;color: rgb(237, 123, 70);border: 2px solid rgb(237, 123, 70);margin: 1rem;">
			<p>	 
		<?php echo $fetch['product_name'];?><br>
		<?php echo $fetch['Quantity']." ".$fetch['qnty_measures']." ";?>Available
	</p>
</div>
		</div>
	</div>
	<div class="actions">
		<div class="a">
			<a href="stock_in.php?pid=<?php echo $fetch['pro_id']?>" style="display: flex;">
			<img  style="margin-right: 1rem;" src="images/addn.png" width="30" height="30"> Add <?php echo $fetch['product_name']?> In Stock
		</a>
	</div>
		<div class="a">
			<a href="stock_out.php?pid=<?php echo $fetch['pro_id']?>" style="display: flex;">
				<img  style="margin-right: 1rem;" src="images/close.png" width="30" height="30">
			Remove <?php echo $fetch['product_name']?> From Stock
		</a>
	</div>
	</div>
</div>
</body>
</html>