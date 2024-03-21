<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Avaliable Product</title>
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap.css"> -->
	<link rel="stylesheet" href="styles/Avaliable_stock.css">
</head>
<body>
	<div class="hidden-div">
		AVAILABLE STOCK OF LYCEE SAINT ALEXANDRE SAULI DE MUHURA
	</div>
	<div class="container">
	<div class="container-pic container-item">
<img class="image-available" src="images/av.png"><P>
</div>
			<?php 
		$n=1;
		$connect=mysqli_connect('localhost','root','','lycee_smis');
		//$select=mysqli_query($connect,"select products.product_name,(stock_in.amount_kg-stock_out.amount_kg) as amount,(stock_in.amount_kg-stock_out.amount_kg)/25 as stack from products,stock_in,stock_out where products.pro_id=stock_in.pro_id and products.pro_id=stock_out.pro_id order by product_name asc");
		$select=mysqli_query($connect,"select products.*,stock_in.* from products,stock_in where products.pro_id=stock_in.pro_id and products.Quantity>0 GROUP BY stock_in.pro_id");

		if(mysqli_num_rows($select)>0){
			?>
			<div class="container-table container-item">
	<table class="table table-bordered table-css" border="1">
		
		<tr class="tabel-row">
			<th>No</th><th>PRODUCT</th><th>AMOUNT</th><th>SACKS(25KG)</th>
		</tr>
<?php
		while($fetch=mysqli_fetch_array($select)){
		if ($fetch['qnty_measures']== 'kgs') {
				$av=floor($fetch['Quantity']/25);
				$remains=$fetch['Quantity']%25;
				$unit="sacks";
			}else{
				$av=floor($fetch['Quantity']/20);
				$remains=$fetch['Quantity']%20;
				$unit="Jellycans";
			}	

		?>
		<tr class="tabel-row tabel-row-products">
<td style="padding-left:10px;"><?php echo $n;?></td>
<td style="padding-left:10px;"><?php echo $fetch['product_name'];?></td>
<td style="padding-left:10px;"><?php echo $fetch['Quantity']." ".$fetch['qnty_measures'];?></td>
<?php 
	if ($remains>0) {
		if($av==0){
			?>
			<td style="padding-left:10px;"><?php echo $fetch['Quantity']." ".$fetch['qnty_measures'];?></td>
			<?php
		}
		else{
			?>
			<td style="padding-left:10px;"><?php echo "$av $unit and $remains ".$fetch['qnty_measures'];?></td>
			<?php
		}
	}
	else{
		?>
		<td style="padding-left:10px;"><?php echo "$av $unit";?></td></tr>
		<?php 
	}
	$n++; 
}
?>
	</table>
</div>
<div class="container-btn container-item">
	<button class="btn btn-DANGER print-btn" onclick="window.print()">PRINT</button>
</div>
<?php
}
else{
	?>
	<div style='color: rgb(255,100,0);font: 16px arial black,sans serif;background-color: rgba(100,50,0,0.1);padding: 2rem'>
		<img src="images/remv.png" width="50"height="50" style="border-radius: 50px;border: 1px solid rgb(255, 100, 0);padding: 2px;">
		<b style="padding: 1rem;">There Is No Available Products Found In Stock!!</b>
	</div>
	<?php
}
?>


</div>
</body>
</html>