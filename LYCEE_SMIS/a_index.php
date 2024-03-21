<?php 
 session_start();
 if (isset($_SESSION['skeeper'])) {
    include('connection.php');
    $uid=$_SESSION['skeeper'];
    $profile=mysqli_query($con,"select * from users where U_ID='$uid'");
    $fetchP=mysqli_fetch_array($profile);
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LYCEE STOCK</title>
    <link rel="stylesheet" href="index.css">
</head>
<body style="background-image: url('images/back.png');margin: 0px;">
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
             <span><?php echo $_SESSION['user'];?></span>
            </a>
            </div>
        <div style="margin-left: 2rem;">
            <a href="logout.php">
                <img style="padding-top: 10px;" src="images/lock.png" height="30" width="30">
                <br><b style="padding: 5px;">Out</b></a>
        </div>
    </div>
</header>
<div class="products">
    <?php 
        $qry=mysqli_query($con,"select * from products order by product_name asc");
        while ($fetch=mysqli_fetch_array($qry)) {
            ?>
            <a href="product_desc.php?pid=<?php echo $fetch['pro_id']?>" target="mainframe">
            <div class="pro">
                <div>
                    <img src="images/products.png" width="70" height="50">
                </div>
                <div><?php echo $fetch['product_name']?></div>
            </div>
            <?php
        }
    ?>
</div>
<div class="main">
    <div class="links">
        <div class="a" style="display: flex;">
            <img src="images/prin.png" height="30" width="30" style="margin-right: 1rem;">
            <a class="link" target="mainframe" href="avaliable_stock.php">Check available Stock</a>
        </div>
            <div class="a" style="display: flex;">
            <img src="images/stock.png" height="30" width="30" style="margin-right: 1rem;">
            <a class="link" target="mainframe" href="Search.php">Transactions</a>
        </div>
        <div class="a" style="display: flex;">
            <img src="images/print.png" height="30" width="30" style="margin-right: 1rem;">
            <a class="link" target="mainframe" href="stock_in_today.php">Stock Reports</a>
        </div>
        <div class="a" style="display: flex;">
            <img src="images/addn.png" height="30" width="30" style="margin-right: 1rem;">
            <a class="link" target="mainframe" href="register_new.php">Add New Product To Stock</a></div>
        <div class="a" style="display: flex;">
            <img src="images/exc.png" height="30" width="30" style="margin-right: 1rem;">
            <a class="link" target="mainframe" href="notifications.php">Notifications</a>
        </div>

    </div>
    <iframe src="search.php" name="mainframe"></iframe>
</div>
</body>
</html>
 <?php 
 }else{
    header('location:login.php');
 }
?>