<?php 
include'connection.php';
include'Report.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		.aa{
			text-decoration: none;
			background-color: rgb(255,123, 70);
			width: 100%;
			padding: 10px;
			
		}
		.aa a{
			text-decoration: none;
			color: rgb(255,220,255);
			margin-left: 90px;
			padding: 10px;
		}
		.aa a:hover{
			background: rgb(255,220,255);
			color: rgb(255,70, 0);
		}
	</style>
</head>
<body>
	<div class="aa">
	<a href="stock_out_week.php">Stock Out In This Week</a>
	<a href="stock_in_week.php">Stock In In This Week</a>
    </div>
</body>
</html>