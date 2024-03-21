<?php 
include'connection.php';
include'monthly.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="styles/stock_out_month.css">
	<style type="text/css">
		@media print{
			.aa{
				display: none;
			}
			button{
				display: none;
			}
		}
	</style>
</head>
<body>
	<?php
	$from=date('Y-m-d',strtotime('-1 month')); 

	$to=date('Y-m-d');
	
	$no=1;
	$select=mysqli_query($con,"select products.*,stock_out.*,sum(amount_out) as total_amount_out from products,stock_out where stock_out.out_date between '$from' and '$to' and products.pro_id=stock_out.pro_id group by (stock_out.pro_id)");
	if(mysqli_num_rows($select)>0){
		?>
		<button onclick="window.print()" class="print-btn" title="PRINT"><img 
		class="img" src="images/print2.PNG"></button><br>
		<div class="container-table" >
			<table class="table table-bordered table-css" style="background: rgb(248, 221, 184);border-color: black;" border="1">
			<tr style="text-align:center"><th colspan="6">
				Report of Stock Out <?php echo $to;?></th></tr>
		<tr style="background-color:gray" class="tabel-row">
		<th>No</th>
		<th>Product Name</th>
		<th>Amount_out</th>
		
	</tr>
<?php 
	while($fetch=mysqli_fetch_array($select)){

		?>
		<tr class="tabel-row tabel-row-products">
			<td style="padding-left:10px;"><?php echo $no;?></td>
			<td style="padding-left:10px;"><?php echo $fetch['product_name'];?></td>
			<td style="padding-left:10px;"><?php echo $fetch['total_amount_out']." ".$fetch['qnty_measures'];?></td>
			
			
		</tr>

		<?php
		$no++;
	}
}
else{
     echo"<h4 style='color:gray'><i>No stock_out operation made in this month</i></h4>";
}
	?>
	</table>
	</div>
</body>
</html>