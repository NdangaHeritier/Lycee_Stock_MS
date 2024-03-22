<?php 
session_start();
include '../connection.php';
$cur_year=date('Y');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>School Details</title>
	<link rel="stylesheet" type="text/css" href="../styles/details.css">
</head>
<body>
<div class="main">
	<div class="head">
		<img src="../images/dots.png" width="3" height="13"> Manage School Details
	</div>
    <div class="boxes">
        <div class="part">
            <div class="banner no">
                <img src="../images/hehe.png" width="20" height="30">
                <a>Search Student's Information</a>
            </div>
            <div class="detail">
                <div class="form">
                <form method="POST">
                    <div class="input-field">
                        <input type="text" name="search-field" placeholder="Type Student's [FirstName, LastName Or Fullname] To Search">
                        <button type="submit" name="search-button">
                            <img src="../images/search.png" width="30" height="30">
                        </button>
                    </div>
                </form>
                <div class="search-results">
                    <?php 
                        if (isset($_POST['search-button'])) {
                            $search_field=$_POST['search-field'];
                            $qry=mysqli_query($con,"select *, year(DOB) as year from students where FirstName='$search_field' or LastName='$search_field' or concat(FirstName,' ',LastName)='$search_field'");
                            
                            $fetch_query=mysqli_fetch_array($qry);
                            if (is_array($fetch_query)) {
                                $class=$fetch_query['class_ID'];
                                $qry2=mysqli_query($con,"select classes.*, teachers.* from classes, teachers where classes.ClassTeacher=teachers.teacher_ID and classes.class_ID='$class'");
                                $fetch_query2=mysqli_fetch_array($qry2);
                                ?>
                                <div class="details padd">
                                    <div class="fullname">
                                        <img src="../images/user.png" width="30" height="30">
                                        <?php echo $fetch_query['FirstName']." ".$fetch_query['LastName']; ?>
                                    </div>
                                    <div class="other padd">
                                        <p><b>Class: </b>S<?php echo $fetch_query2['ClassName']; ?></p>
                                        <p><b>Class Teacher: </b><?php echo $fetch_query2['FullName']; ?></p>
                                        <p><b>Sex: </b><?php echo $fetch_query['Sex']; ?></p>
                                        <p>
                                           <b>Age: </b><?php  echo intval($cur_year)-intval($fetch_query['year']); ?>
                                        </p>
                                    </div>
                                </div>
                                
                                <?php
                            }else{
                                echo "<i> <b>Student Not found!</b> No data matches with your seach <b><< $search_field >></b></i>";
                            }
                        }
                        
                    ?>
                    <div class="li top color2">

                        <div class="all w2">All Registered Students</div>
                        <div class="btn">
                            <button onclick="window.print()" class="print-btn no">print</button>
                        </div>
                    </div>
                    <div class="li">
                <?php 
                    $second=mysqli_query($con,"select *, year(DOB) as year from students");
                    if (mysqli_num_rows($second)> 0) {
                        ?>
                        <table border='1'>
                            <tr>
                                <thead class="color2">
                                    <th>No</th>
                                    <th>Names</th>
                                    <th>Sex</th>
                                    <th>Age</th>
                                </thead>
                            </tr>
                            <?php 
                                $n=1;
                                while($fetch_second=mysqli_fetch_array($second)){
                            ?>
                            <tr class="color padd">
                                <td><?php echo $n;?></td>
                                <td><?php echo $fetch_second['FirstName']." ".$fetch_second['LastName'];?></td>
                                <td>
                                    <?php echo $fetch_second['Sex'];?>
                                </td>
                                <td>
                                   <?php  echo intval($cur_year)-intval($fetch_second['year']); ?> 
                                </td>
                            </tr>
                            <?php
                            $n++;
                                }
                            ?>
                        </table>
                        <?php
                    }else{
                        echo "No data found!";
                    }
                ?>
            </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>