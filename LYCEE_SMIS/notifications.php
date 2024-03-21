<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notifications</title>
    <link rel="stylesheet" type="text/css" href="notify.css">
   </head>
<body>
    <div class="main-div">
        <div class="header">
            <div class="icons">
                <img src="images/noti.png" alt="not found!" width="70" height="60">
            </div>
            <div class="title">
                Notifications for the stock Improvement.
            </div>
        </div>
        <div class="contents">
           <?php 
            $today=date('Y-m-d');
            $today_plus_7_days=date('Y-m-d',strtotime("+7 days"));
            $select_date=mysqli_query($con,"select products.*,stock_in.* from products,stock_in where products.pro_id=stock_in.pro_id and stock_in.expired_date between '$today' and '$today_plus_7_days'");
            if (mysqli_num_rows($select_date)) {
                while ($fetch_date=mysqli_fetch_array($select_date)) {
                    $pro=$fetch_date['pro_id'];
                    $T_product=$fetch_date['product_name'];
                    $T_id=$fetch_date['id'];
                    $T_in_date=$fetch_date['in_date'];
                    $T_amount=$fetch_date['amount_in'];
                    $T_measure=$fetch_date['qnty_measures'];
                    $select_outs=mysqli_query($con,"select sum(amount_out) as total_out from stock_out where pro_id='$pro' and out_date between '$T_in_date' and '$today'");
                    // $select_remains=mysqli_query($con,"select date_diff(expired_date-in_date) as remains from stock_in where id='$T_id'");
                    $fetch_outs=mysqli_fetch_array($select_outs);
                    // $fetch_remains=mysqli_fetch_array($select_remains);
                    $AmountToBeExp=$T_amount-$fetch_outs['total_out'];
                    //$remains_time=$fetch_date['expired_date']-$today;
                    if ($AmountToBeExp>0) {
                        ?>
                            <div class="noti">
                                <img src="images/exc.png" height="30" width="30">
                               There are <?php echo $AmountToBeExp." ".$T_measure ;?> of 
                               <?php echo $T_product ;?> that are going to be exipired in next
                                few days on <?php echo $fetch_date['expired_date'];?>. so that you're required to stock it out before it become exipired!
                            </div>
                        <?php
                    }
                }
            }else{
                ?>
                    <div class="noti">
                       <img src="images/close.png" height="30" width="30"> 
                       <div class="con">
                        There is no any notification found for stock improvement!!
                        </div>
            <?php
            }
           ?> 
        </div>
    </div>
</body>