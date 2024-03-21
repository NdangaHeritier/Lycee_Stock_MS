<?php
include'connection.php';
$pid=$_GET['pid'];
$qry3=mysqli_query($con,"select * from products where pro_id='$pid'");
$fetchp=mysqli_fetch_array($qry3);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>STOCK_OUT</title>
	<link rel="stylesheet" href="styles/stock_out.css">
</head>
<body style="background: rgba(255, 255, 255, 0.8);">
<div class="container">
	<div class="container-item-img">
		<img src="images/remv.png" alt="">
		<div style="font: 25px arial black,sans-serif;color: rgb(237, 123, 70);border: 2px solid rgb(237, 123, 70);margin: 1rem;">
	<p>	 
		<?php echo $fetchp['product_name'];?><br>
		<?php echo $fetchp['Quantity']." ".$fetchp['qnty_measures']." ";?>Available
	</p>
</div>
	</div>
	
	<center>
	<form method="POST">
		<h3>Remove <?php echo $fetchp['product_name'];?> from Stock</h3>

<b style="color: rgb(250, 100, 0);">AMOUNT:</b><br>
<input type="number" class="remove-product" name="quantity" placeholder="Enter quantity in kilograms" required><br>
<b style="color: rgb(250, 100, 0);">REASON:</b><br>
<select name="reason" class="remove-product" required>
	<option value="students feedings">Students feedings</option>
	<option value="players recuperation">Players recuperation</option>
	<option value="Teachers feedings">Teachers feedings</option></select><br>
<b style="color: rgb(250, 100, 0);">PERIOD_OF_USE:</b><br>
<select name="period" class="remove-product" required>
	<option value="Morning">Morning</option>
	<option value="Noon">Noon</option>
	<option value="After noon">After noon</option></select><br><br>
<input type="submit" class="submit-btn" name="out" value="Stock out">
</form>
<?php
if(isset($_POST['out'])){
	$pamount=floatval($_POST['quantity']);
	$today=date('Y-m-d');
	$reason=$_POST['reason'];
	$period=$_POST['period'];
	$qry1=mysqli_query($con,"select * from products where pro_id='$pid'");
	$fet=mysqli_fetch_array($qry1);
	$select_todays_out=mysqli_query($con,"select sum(amount_out) as outs from stock_out where pro_id='$pid' and out_date='$today'");
	$stockout= false;
	while($fetch_todays_out= mysqli_fetch_array($select_todays_out)){
	$pname=$fetchp['product_name'];
	$pm=$fetchp['qnty_measures'];
	if ($fet['Quantity']< $pamount) {
		echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
		    the available quantity of <b>".$fet['product_name']."</b> is less than your stock out amount specified!</div></div>";
	}else{
		if ($reason=='students feedings') {
			if ($fet['product_name']=="Beans") {
				$remains=80-$fetch_todays_out['outs'];
				if ($pamount<=$remains) {

					$newA=$fet['Quantity']-$pamount;
					$out=mysqli_query($con,"update products set Quantity='$newA' where pro_id='$pid'");
					$stockout=mysqli_query($con,"insert into stock_out values('','$pid','$pamount','$today','$reason','$period')");	
				}else{
					echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
					    You can not remove $pamount $pm of $pname from stock this day try another option to remove!</div></div>";
				}
			}
			elseif ($fet['product_name']=="Sugar") {
				$remains=10-$fetch_todays_out['outs'];
				if ($pamount<=$remains) {

					$newA=$fet['Quantity']-$pamount;
					$out=mysqli_query($con,"update products set Quantity='$newA' where pro_id='$pid'");
					$stockout=mysqli_query($con,"insert into stock_out values('','$pid','$pamount','$today','$reason','$period')");	
				}else{
					echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
					    You can not remove $pamount $pm of $pname from stock this day try another option to remove!</div></div>";
				}
			}
			elseif ($fet['product_name']=="Rice") {
				$remains=125-$fetch_todays_out['outs'];
				if ($pamount<=$remains) {

					$newA=$fet['Quantity']-$pamount;
					$out=mysqli_query($con,"update products set Quantity='$newA' where pro_id='$pid'");
					$stockout=mysqli_query($con,"insert into stock_out values('','$pid','$pamount','$today','$reason','$period')");	
				}else{
					echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
					    You can not remove $pamount $pm of $pname from stock this day try another option to remove!</div></div>";
				}
			}
			elseif ($fet['product_name']=="Maize Flour") {
				$remains=125-$fetch_todays_out['outs'];
				if ($pamount<=$remains) {

					$newA=$fet['Quantity']-$pamount;
					$out=mysqli_query($con,"update products set Quantity='$newA' where pro_id='$pid'");
					$stockout=mysqli_query($con,"insert into stock_out values('','$pid','$pamount','$today','$reason','$period')");	
				}else{
					echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
					    You can not remove $pamount $pm of $pname from stock this day try another option to remove!</div></div>";
				}
			}elseif ($fet['product_name']=="salt") {
				$remains=8-$fetch_todays_out['outs'];
				if ($pamount<=$remains) {

					$newA=$fet['Quantity']-$pamount;
					$out=mysqli_query($con,"update products set Quantity='$newA' where pro_id='$pid'");
					$stockout=mysqli_query($con,"insert into stock_out values('','$pid','$pamount','$today','$reason','$period')");	
				}else{
					echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
					    You can not remove $pamount $pm of $pname from stock this day try another option to remove!</div></div>";
				}
			}
			elseif ($fet['product_name']=="Oil") {
				$remains=4-$fetch_todays_out['outs'];
				if ($pamount<=$remains) {

					$newA=$fet['Quantity']-$pamount;
					$out=mysqli_query($con,"update products set Quantity='$newA' where pro_id='$pid'");
					$stockout=mysqli_query($con,"insert into stock_out values('','$pid','$pamount','$today','$reason','$period')");	
				}else{
					echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
					    You can not remove $pamount $pm of $pname from stock this day try another option to remove!</div></div>";
				}
			}
			elseif ($fet['product_name']=="Pollage Flour") {
				$remains=25-$fetch_todays_out['outs'];
				if ($pamount<=$remains) {

					$newA=$fet['Quantity']-$pamount;
					$out=mysqli_query($con,"update products set Quantity='$newA' where pro_id='$pid'");
					$stockout=mysqli_query($con,"insert into stock_out values('','$pid','$pamount','$today','$reason','$period')");	
				}else{
					echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
					    You can not remove $pamount $pm of $pname from stock this day try another option to remove!</div></div>";
				}
			}
			else{
				echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
				    This Item($pname) is not yet allowed to be removed from stock!</div></div>";
			}
		}
		elseif($reason=="Players recuperation"){
			if ($fet['product_name']=="Sugar") {
				$remains=2-$fetch_todays_out['outs'];
				if ($pamount<=$remains) {

					$newA=$fet['Quantity']-$pamount;
					$out=mysqli_query($con,"update products set Quantity='$newA' where pro_id='$pid'");
					$stockout=mysqli_query($con,"insert into stock_out values('','$pid','$pamount','$today','$reason','$period')");	
				}else{
					echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
					    You can not remove $pamount $pm of $pname from stock this day try another option to remove!</div></div>";
				}
			}
			elseif ($fet['product_name']=="Maize Flour") {
				$remains=2-$fetch_todays_out['outs'];
				if ($pamount<=$remains) {

					$newA=$fet['Quantity']-$pamount;
					$out=mysqli_query($con,"update products set Quantity='$newA' where pro_id='$pid'");
					$stockout=mysqli_query($con,"insert into stock_out values('','$pid','$pamount','$today','$reason','$period')");	
				}else{
					echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
					    You can not remove $pamount $pm of $pname from stock this day try another option to remove!</div></div>";
				}
			}else{
				echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
				    You can not remove $pname from stock for $reason!</div></div>";
			}
		}else{
			echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
			    Other Options($reason) can not make stokout at this time!</div></div>";
		}
	    }
	}
	if($stockout== true){
		echo "<div class='message'><a class='close' href='stock_out.php?pid=$pid'>x</a><div class='contes'>
		    $pamount $pm of $pname is removed from stock successfully!
		    </div></div>";
	}
	}
	?>
</center>
</div></body></html>
