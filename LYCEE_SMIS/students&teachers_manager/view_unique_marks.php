<?php 
session_start();
if (isset($_SESSION['admin'])) {
    $lesson=$_GET['markId'];
include "../connection.php";
    $first=mysqli_query($con,"select lessons.*,classes.* from lessons, classes where lessons.lesson_ID='$lesson' and classes.class_ID=lessons.class_ID");
    $fetch_first=mysqli_fetch_array($first);
    $class=$fetch_first['class_ID'];
   ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Details</title>
    <link rel="stylesheet" type="text/css" href="../styles/school-details.css">
</head>
<body>
    <div class="main">
        <div class="head color2">
            <img src="../images/dots.png" width="3" height="13"> <a class="no">Set</a> Marks For Students In Senior <?php echo $fetch_first['ClassName'];?>
        </div>
        <div class="list">
            <div class="top padd li title color3">
               <b class="padd-right"> Module: </b><?php echo $fetch_first['Title'];?><b class="padd-left color2"> <?php echo $fetch_first['Credits'];?> </b> Credits
               <button onclick="window.print()" class="print-btn no">print</button>
            </div>
            <div class="li">
                <?php 
                    $second=mysqli_query($con,"select * from students where class_ID='$class'");
                    if (mysqli_num_rows($second)> 0) {
                        ?>
                        <table border='1'>
                            <tr>
                                <thead class="color2">
                                    <th>No</th>
                                    <th>Names</th>
                                    <th>CAT</th>
                                    <th>EXAM</th>
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
                                    <?php
                                    $student=$fetch_second['student_ID'];
                                    $third=mysqli_query($con,"select * from marks where student_ID='$student' and lesson_ID='$lesson'");
                                    $fetch_third=mysqli_fetch_array($third);
                                    if (is_array($fetch_third)) {
                                        $mark=$fetch_third['mark_ID'];
                                        if ($fetch_third['CAT']>=70) {
                                           echo "<a>".$fetch_third['CAT']."</a>";
                                        }else{
                                            echo "<a style='color: darkred;text-decoration: underline'>".$fetch_third['CAT']."</a>";
                                        }
                                        echo "<a href='edit_lesson_marks.php?markId=$mark' class='padd-left small no'>edit</a>";
                                    }else{
                                        echo "<i class='small no'>not set!</i>";
                                        echo "<a href='set_lesson_marks.php?markId=$student.$lesson' class='padd-left color3 small no'>set</a>"; 
                                    }
                                    ?>
                                </td>
                                <td>
                                                                        <?php
                                    $student=$fetch_second['student_ID'];
                                    $third=mysqli_query($con,"select * from marks where student_ID='$student' and lesson_ID='$lesson'");
                                    $fetch_third=mysqli_fetch_array($third);
                                    if (is_array($fetch_third)) {
                                        $mark=$fetch_third['mark_ID'];
                                       if ($fetch_third['EXAM']>=70) {
                                           echo "<a>".$fetch_third['EXAM']."</a>";
                                        }else{
                                            echo "<a style='color: darkred;text-decoration: underline'>".$fetch_third['EXAM']."</a>";
                                        }
                                        echo "<a href='edit_lesson_marks.php?markId=$mark' class='padd-left small no'>edit</a>";
                                    }else{
                                        echo "<i class='small no'>not set!</i>";
                                        echo "<a href='set_lesson_marks.php?markId=$student.$lesson' class='padd-left color3 small no'>set</a>"; 
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php
                            $n++;
                                }
                            ?>
                        </table>
                        <?php
                    }else{
                        echo "No students found!";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="foot padd-left">
        <?php
            $t=$_SESSION['admin'];
            $sel=mysqli_query($con,"select * from users where U_ID='$t'");
            $fett=mysqli_fetch_array($sel);
        ?>
       Printed By <?php echo $fett['role']." [".$fett['fullname']."] on ".date('D d/m/Y');?> 
    </div>
</body>
</html>

<?php
}else{
    header('location:../login.php');
}
?>