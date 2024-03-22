<?php 
session_start();
include '../connection.php';
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
            <div class="banner">
                <img src="../images/hehe.png" width="20" height="30">
                <a>Search Teacher's Information</a>
            </div>
            <div class="detail">
                <div class="form">
                <form method="POST">
                    <div class="input-field">
                        <input type="text" name="search-field2" placeholder="Type Teacher's [Email Or Fullname] To Search">
                        <button type="submit" name="search-button2">
                            <img src="../images/search.png" width="30" height="30">
                        </button>
                    </div>
                </form>
                <div class="search-results">
                    <?php 
                        if (isset($_POST['search-button2'])) {
                            $search_field=$_POST['search-field2'];
                            $qry=mysqli_query($con,"select teachers.*, classes.* from teachers,classes where teachers.FullName='$search_field' or teachers.Email='$search_field' And teachers.teacher_ID=classes.ClassTeacher");
                            
                            $fetch_query=mysqli_fetch_array($qry);
                            if (is_array($fetch_query)) {
                                $class=$fetch_query['User_ID'];
                                $teacher=$fetch_query['teacher_ID'];
                                $qry2=mysqli_query($con,"select * from users where U_ID='$class'");
                                $qry3=mysqli_query($con,"select lessons.*, classes.* from lessons, classes where lessons.teacher_ID='$teacher' And classes.class_ID=lessons.class_ID");
                                $fetch_query2=mysqli_fetch_array($qry2);
                                $cur_year=date('Y');
                                ?>
                                <div class="details">
                                    <div class="fullname">
                                        <img src="../images/user.png" width="30" height="30">
                                        Tr, <?php echo $fetch_query['FullName']; ?>
                                    </div>
                                    <div class="other padd">
                                        <p><b>Phone Number: </b>+25 <?php echo $fetch_query2['phone_number']; ?></p>
                                        <p>A Class Teacher In  <b>Senior <?php echo $fetch_query['ClassName']; ?></b></p>
                                        <p><b>Email: </b><?php echo $fetch_query['Email']; ?></p>
                                        <div class="top">
                                           <?php
                                                while ($fetch_query3=mysqli_fetch_array($qry3)) {
                                                    ?>
                                                    <div class="li">
                                                        <img src="../images/right.png" width="35" height="30">
                                                        <div class="contents padd">
                                                            Teaches <b><?php echo $fetch_query3['Title']; ?></b> In <b>S<?php echo $fetch_query3['ClassName']; ?></b>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                           ?>
                                        </div>
                                    </div>
                                    <div class="go li top">
                                        <a href="edit-teacher-info.php?tid=<?php echo $fetch_query['teacher_ID'];?>">edit</a>
                                        <a href="delete-teacher-info.php?tid=<?php echo $fetch_query['teacher_ID'];?>">delete</a>
                                    </div>
                                </div>
                                
                                <?php
                            }else{
                                echo "<i> <b>Teacher Not found!</b> No data matches with your seach <b><< $search_field >></b></i>";
                            }
                        }
                    $cur_year=date('Y');
                    ?>
                    <div class="li top color2">

                        <div class="all w2">All Registered Teachers</div>
                        <div class="btn">
                            <button onclick="window.print()" class="print-btn no">print</button>
                        </div>
                    </div>
                    <div class="li">
                <?php 
                    $second=mysqli_query($con,"select * from teachers");
                    if (mysqli_num_rows($second)> 0) {
                        ?>
                        <table border='1'>
                            <tr>
                                <thead class="color2">
                                    <th>No</th>
                                    <th>Names</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th class="no"></th>
                                </thead>
                            </tr>
                            <?php 
                                $n=1;
                                while($fetch_second=mysqli_fetch_array($second)){
                            ?>
                            <tr class="color padd medium">
                                <td><?php echo $n;?></td>
                                <td><?php echo $fetch_second['FullName'];?></td>
                                <td>
                                    <?php echo $fetch_second['Email'];?>
                                </td>
                                <td>
                                   <?php
                                        $user=$fetch_second['User_ID'];  
                                        $sel=mysqli_query($con,"select * from users where U_ID='$user'");
                                        $fsel=mysqli_fetch_array($sel);
                                        echo $fsel['phone_number'];
                                    ?> 
                                </td>
                                <td class="no">
                                    <a class="button small" href="edit-teacher-info.php?tid=<?php echo $fetch_second['teacher_ID'];?>">edit</a>
                                    <a class="button small color3" href="delete-teacher-info.php?tid=<?php echo $fetch_second['teacher_ID'];?>">delete</a>
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