	<?php 
 session_start();
 if (isset($_SESSION['bursar'])) {
 	include('connection.php');
 	$uid=$_SESSION['bursar'];
 	$profile=mysqli_query($con,"select * from users where U_ID='$uid'");
 	$fetchP=mysqli_fetch_array($profile);
 	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LYCEE STOCK</title>
	<style type="text/css">
		.products{padding: 13px;display: flex;background-color:  rgba(255, 240, 220, 1.0);
			position: fixed; right: 0px;}
		.products a,.links a{
			color: rgb(250, 100, 0);font: 14px arial black,sans-serif;text-decoration: none;
		}
		.pro{margin-left: 2rem;text-align: center;bborder: 1px solid blue;padding: 1rem 2rem 1rem 2rem;}
		.main{display: flex; margin-top: 7rem;}
		iframe{width: 80%;border: none;height: 450px;}
		.links{width: 19%;background-color:  rgba(235, 220, 200, 1.0);}
		.a{
			padding: 1rem;background-color: rgba(250, 250, 250, 0.3);border-bottom: 2px solid rgb(250, 100, 0);margin-top: 4px;
		}
		/*a{color: rgb(250, 100, 0);font: 14px arial black,sans-serif;text-decoration: none;}
		header{background-color: rgba(250, 100, 0, 1.0);display: flex;}
		.logo{width: 100%; height: 100%;
padding-bottom: 0px;
		}

		.profiles{background-color:  rgba(255, 240, 220, 1.0);width: 15%;color: rgb(250, 100, 0);font: 13px arial black,sans-serif;text-align: center;border-right: 25px double rgb(250, 100, 0);}
		.profiles img,.profiles b{padding: 6px;
		}
		.profiles p.out{padding: 3px; 
			 position: absolute; margin-left: 0px;
			 top: 0px;}*/
		</style>
	<link rel="stylesheet" href="index.css">
</head>
<body style="background: rgba(255, 240, 220, 1.0);margin: 0px;">
<header>
	<div class="logo">
		<div class="img" style="background-color: white;padding: 5px;width: 100px;border-left: 20px double rgb(237, 123, 70);padding-left: 16px;">
		<img src="images/lyceelogo.png" height="55" width="60">
	</div>
	</div>
	<div class="profiles" style="display: flex;padding-left: 1rem;">
		<div>
			<a href="account.php" target="mainframe">
				<img src="<?php echo $fetchP['pic']?>" width="30" height="30" style="border: 2px solid  rgba(255, 240, 220, 1.0);border-radius: 50px;opacity: 0.8;"> <br>
			 <b><?php echo $_SESSION['user'];?></b>
			</a>
			</div>
		<div style="margin-left: 2rem;">
			<a href="logout.php">
				<img style="padding-top: 10px;" src="images/lock.png" height="30" width="30">
				<br><b style="padding: 5px;">OUT</b></a>
		</div>
	</div>
</header>
<div class="products">	
<a href="Avaliable_stock.php" target="mainframe">
		<div class="pro">
			<div>
				<img src="images/prin.PNG" width="43" height="40">
			</div>				
		</div>
		<a href="report.php" target="mainframe">
		<div class="pro">
			<div>
				<img src="images/print.PNG" width="43" height="40">
			</div>				
		</div>
	</a>
	<a href="search.php" target="mainframe">
		<div class="pro">
			<div>
				<img src="images/stock.png" width="43" height="40">
			</div>				
		</div>
	</a>
		<a href="notifications.php" target="mainframe">
		<div class="pro">
			<div>
				<img src="images/exc.JPG" width="43" height="40">
			</div>				
		</div>
	</a>
			
		
</div>
<div class="main">
	<div class="links">
		<div class="a" style="display: flex;">
			<img src="images/prin.png" height="30" width="30" style="margin-right: 1rem;">
			<a class="link" target="mainframe" href="avaliable_stock.php">Check available Stock</a>
		</div>
			<div class="a" style="display: flex;">
			<img src="images/stock.png" height="30" width="30" style="margin-right: 1rem;">
			<a class="link" target="mainframe" href="search.php">Transactions</a>
		</div>
		<div class="a" style="display: flex;">
			<img src="images/print.png" height="30" width="30" style="margin-right: 1rem;">
			<a class="link" target="mainframe" href="report.php">Stock Reports</a>
		</div>
		<div class="a" style="display: flex;">
			<img src="images/exc.png" height="30" width="30" style="margin-right: 1rem;">
			<a class="link" target="mainframe" href="notifications.php">Notifications</a>
		</div>

	</div>
	<iframe src="Avaliable_stock.php?" name="mainframe"></iframe>
</div>
</body>
</html>
 <?php 
 }else{
 	header('location:login.php');
 }
?>