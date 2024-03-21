<?php 
include'connection.php';
include'weekly.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="styles/stock_out_week.css">
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
	$from=date('Y-m-d',strtotime('-1 week')); 

	$to=date('Y-m-d');
	
	$no=1;
	$select=mysqli_query($con,"select products.*,stock_out.*,sum(amount_out) as total_amount_out from products,stock_out where stock_out.out_date between '$from' and '$to' and products.pro_id=stock_out.pro_id group by (stock_out.pro_id)");
	if(mysqli_num_rows($select)>0){
		?>
		<button onclick="window.print()" class="print-btn"><img class="img" src="images/print2.PNG"></button><br>
			<table class="table table-bordered table-css">
			<tr style="text-align:center"><th colspan="6">
				Report of Stock Out From <?php echo $from .' to '.$to;?></th></tr>
		<tr style="background-color:gray">
		<th>No</th>
		<th>Product Name</th>
		<th>Amount_out</th>
		
	</tr>
<?php 
	while($fetch=mysqli_fetch_array($select)){

		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $fetch['product_name'];?></td>
			<td><?php echo $fetch['total_amount_out']." ".$fetch['qnty_measures'];?></td>
			
			
		</tr>

		<?php
		$no++;
	}
}
else{
     echo"<h4 style='color:gray'><b><i>No stock_out operation made in this week</i><b></h4>";
}
	?>
	</table>

</body>
</html>