<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LYCEE STOCK</title>
	<link rel="stylesheet" href="index.css">
	<style type="text/css">
		body{
			background-image: url('images/back.png');
			background-repeat: repeat;
			background-clip: border-box;
			background-size: auto;
		}
		.lycee{
			color: rgb(237, 123, 70);
			font: 40px arial black,sans-serif;
			text-shadow: 1px 1px 2px rgb(100, 50, 0);
		}
		center{
			background-color: rgba(0, 0, 0, 0.1);
			padding: 5rem;
		}
		.start{
			padding: 5rem;
		}
		.start .start-button{
			height: 86px;
			font: 20px arial black,sans-serif;
			width: 300px;
			border: none;
			box-shadow: 2px 2px 5px 1px rgb(100, 50, 0);
			border-radius: 5px;
			background-color: rgba(237, 123, 70, 1.0);
			color: white;
		}

	</style>
</head>
<body style="margin: 0px;">
<header>
	<div class="logo">
		<div class="img" style="background-color: white;padding: 5px;width: 100px;border-left: 20px double rgb(237, 123, 70);padding-left: 16px;">
		<img src="images/lyceelogo.png" height="55" width="60">
	</div>
	</div>
	<div class="profiles" style="padding-left: 2rem;padding-top:1rem">
			<a href="login.php" target="mainframe">
				<button type="button">Login</button>
			</a>
	</div>
</header>
<center>
	<div class="lycee">
	LYCEE SAINT ALEXANDRE SAULI DE MUHURA STOCK INFORMATION MANAGEMENT SYSTEM
</div>
<div class="start">
	<a href="a_index.php"><button class="start-button">Start Now!</button></a>
</div>
</center>
</body>
</html>