<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>search</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		body{
			background: 255, 240, 220;
		}
		
		input{
			padding: 18px;
			border-radius: 30px 0px 0px 30px;
			border: solid RGB(255,123, 70) 1px;
			outline: none;
			width: 810px;
			text-align: center;
			font-size: 15px;
			font-weight: 500;
			color: gray;

		}
		p{
			font-weight: 800;
			color: RGB(255,123, 70);
			font-size: 25px;
			padding: 5px;

		}
		button{
			background: RGB(255,123, 70);
			font-size: 15px;
			font-weight: 500;
			color: rgb(255,240,220);
			padding: 18px;
			border-radius: 0px 30px 30px 0px;
			outline: none;
			border: solid RGB(255,123, 70) 1px;

		}
		.row .col-lg-6{
			
			border-radius: 5px;
			margin-left: 5px;
			width: 48%;
		}
		.row .col-lg-6 h6{
			color: rgba(100, 0, 20, 1.0);

		}
	
	.head{
			background: rgb(255,123, 70);
			padding-top: 0px;
			font-weight: 600;
			color: white;
			text-align: left;

		}
		.content{
			color: black;
			text-align: justify;
			display: flex;
			font: 14px arial,sans-serif;
			margin-top: 3px;
			width: 100%;
		}
	</style>
</head>
<body class="container">
	<center>
	<br>
	<form method="POST">
		<input type="search" name="search" placeholder="Type Product Name Here To Search Product Transaction!">
		<button type="submit" name="sub" value="search">SEARCH</button><br><br>
	</form>
	<?php 
	include'connection.php';
	if(isset($_POST['sub'])){
	$search=$_POST['search'];
	$select=mysqli_query($con,"select products.*,stock_in.* from products,stock_in where products.product_name='$search' and products.pro_id=stock_in.pro_id");
	$select2=mysqli_query($con,"select products.*,stock_out.* from products,stock_out where products.product_name='$search' and products.pro_id=stock_out.pro_id");
	if(mysqli_num_rows($select)){
	?>
	
<div class="row ">
	<h6><i>Result for "<?php echo $search;?>" Transaction</i></h6>
		<div style="border:solid 0.5px rgb(255,123, 70);
		background:  rgb(255,240,220);" class="col-lg-6">
		<div class="head">
			<img src="images/exc.png" height="46" width="50" alt="">
			<a style="padding:4px">Entry Transactions history of <?php echo $search; ?></a>
		</div>
		   <div style="height: 300px;overflow: auto;">	   
		   <?php 
		   		while($fetch=mysqli_fetch_array($select)){ 
		  		$amount=floor($fetch['amount_in']);
		  	?>
		  	<div class="content" style="border-bottom: 1px solid rgb(110, 120, 130);">
			 	<img style="width:40px;height: 40px" src="images/addd.png">
			 	<div style="width: 100%;margin-left: 5px;padding: 5px;color: rgb(70, 80, 90);">
					On <?php echo $fetch['in_date'];?> there are <?php echo $amount;?> <?php echo $fetch['qnty_measures'];?> of <?php echo $fetch['product_name'];?> added in the stock.
		
			 </div>
			</div>	
		
		<?php 
		  }
		   ?>
		
			
	</div>

</div>

	<div style="border:solid 0.5px RGB(255,123, 70);background:  rgb(255,240,220);" class="col-lg-6">
	 <div class="pp">
	 <div class="head">
			<img src="images/exc.png" height="46" width="50" alt="">
			<a style="padding:4px">Exit Transactions history of <?php echo $search; ?></a>
		</div>
		<div style="height: 300px;overflow: auto;">
	 <?php 
		   		while($fetch=mysqli_fetch_array($select2)){
		   ?>
		  <div class="content" style="border-bottom: 1px solid rgb(110, 120, 130);">
			 	<img style="width:40px;height: 40px" src="images/rem.png">
			 	<div style="margin-left: 5px;padding: 5px;color: rgb(70, 80, 90); ">
			 		On <?php echo $fetch['out_date'];?> you've Removed
			 	<?php echo $fetch['amount_out'];?> <?php echo $fetch['qnty_measures'];?> of <?php echo $fetch['product_name'];?> from stock
			 	For <?php echo $fetch['reason'];?> at <?php echo $fetch['period_of_use'];?>
			 </div>
		</div>
		<?php 
		   		}
		  ?>

		</div>
	</div>
	</div>		
<?php
}
else{
echo " <i>product called $search is not available in stock</p>";
}
}

?>
</center>

</body>
</html>