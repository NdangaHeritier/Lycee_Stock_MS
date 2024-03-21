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
	<link rel="stylesheet" href="styles/stock_in_month.css">
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
	include'connection.php';
	$no=1;
	$select=mysqli_query($con,"select products.*,stock_in.*,sum(stock_in.amount_in) as total_amount_in from products,stock_in where stock_in.in_date between '$from' and '$to' and products.pro_id=stock_in.pro_id group by (stock_In.pro_id)");
	
	if(mysqli_num_rows($select)>0){
		?>
		<button onclick="window.print()" class="print-btn"><img class="img" src="images/print2.PNG" width="35" height="35"></button>

<!-------------------------table------------------------------------->

		<table style="border:solid black 1px;background: rgb(248, 221, 184);border-color: black;" class="table table-bordered table-css">
			<tr style="text-align:center" class="tabel-row">
			<th colspan="6">
				Report of Stock in From <?php echo $from;?> to <?php echo $to;?></th></tr>
		<tr style="background-color:gray">
		<th>No</th>
		<th>Product Name</th>
		<th>Amount_in</th>
		
		
	</tr>
<?php 
	while($fetch=mysqli_fetch_array($select)){

		?>
		<tr class="tabel-row tabel-row-products">
			<td><?php echo $no;?></td>
			<td><?php echo $fetch['product_name'];?></td>
			<td><?php echo $fetch['total_amount_in']." ".$fetch['qnty_measures'];?></td>
			
			
		</tr>

		<?php
		$no++;
	}
}
else{
     echo"<p><i>No stock_out operation made in this month</i></p>";
}
	?>
	</table>

</body>
</html>