
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reports</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<style type="text/css">
		td, th{
			font-family: arial,sans-serif;
		}
		.a a{
			text-decoration: none;
			color: rgb(255, 70, 0);
			font-weight: 500;
			background: rgb(255, 240,220);
			border: solid 1px rgb(255,123, 70);
			margin-right: 120px;
			padding: 10px;
			border-radius: 8px;
		}
		.a a:hover{
			color: rgb(255,240,220);
			background: rgb(255,123, 70);
		}
	@media print{
		.a{display: none;

		}
		.aa{
			display: none;
		}
		.shadow{display: none;}
		table{width: 700px;}
	}
	</style>
</head>
<body>

<div class="main">
	
			<div class="shadow">
			<div style="background: rgb(255,240,220);padding: 30px;" class="pname">
			<div class="a">
				<a href="daily.php"> Daily Report</a>
				<a href="weekly.php">Weekly Report</a>
				<a href="monthly.php">Monthly Report</a>
				<a href="yearly.php">Yearly Report</a>
				
		</div>		
			
		</div>
	</div>
</div>

</body>
</html>