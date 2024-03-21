<?php 
include'connection.php';
include'daily.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stock in</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" href="styles/stock_in_week.css">
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
	$today=date('Y-m-d');
	include'connection.php';
	$no=1;
	$select=mysqli_query($con,"select products.*,stock_in.*,sum(amount_in) as total_amount_in from products,stock_in where in_date='$today' and products.pro_id=stock_in.pro_id group by(stock_In.pro_id)");
	if(mysqli_num_rows($select)>0){
		?>
		
		<button onclick="window.print()"  class="print-btn"><img  class="img" style="border: transparent;outline: transparent;
		width: 40px;margin-right:20% ;" src="images/print2.PNG"></button><br>
	

		<div class="ncontainer-table" >
			<table class="table table-bordered table-css" style="background: rgb(248, 221, 184);border-color: black;" border="1">
			<tr style="text-align:center"><th colspan="6">
				Report of Stock in <?php echo $today;?></th></tr>
		<tr style="background-color:gray">
		<th>No</th>
		<th>Product Name</th>
		<th>Amount_in</th>
		<th>In_date</th>
		
	</tr>
<?php 
	while($fetch=mysqli_fetch_array($select)){

		?>
		<tr>
			<td><?php echo $no;?></td>
			<td><?php echo $fetch['product_name'];?></td>
			<td><?php echo $fetch['total_amount_in']." ".$fetch['qnty_measures'];?></td>
			<td><?php echo $fetch['in_date'];?></td>
			
		</tr>

		<?php
		$no++;
	}

}
else{
     echo"<p><i>No stock_In operation made to day</i></p>";
}
	?>
	</table>
</div>

</body>
</html>