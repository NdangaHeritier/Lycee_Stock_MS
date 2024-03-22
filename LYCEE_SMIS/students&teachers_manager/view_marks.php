<?php 
session_start();
if (isset($_SESSION['admin'])) {
    $teacher=$_SESSION['admin'];
include "../connection.php";
    $first=mysqli_query($con,"select classes.*, teachers.* from teachers, classes where classes.classTeacher=teachers.teacher_ID");
    $fetch_first=mysqli_fetch_array($first);
   ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Details</title>
    <link rel="stylesheet" type="text/css" href="../styles/school-details.css">
    <link rel="stylesheet" type="text/css" href="../styles/forms.css">
</head>
<body>
    <div class="main">
        
        <div class="no">
            <div class="form no">
                <div class="head no">
            <img src="../images/ok.png" width="13" height="13"> Change Class
        </div>

            <?php 
                if (isset($_POST['search-button'])) {
                    $class=$_POST['class'];
                    
                }else{
                    $class=$fetch_first['class_ID'];
                }
            ?>
                <form method="POST">
                    <div class="input-field">
                       <select name="class">
                        <?php
                            $select_class1=mysqli_query($con,"select * from classes where class_ID='$class'");
                            $fetch_class1=mysqli_fetch_array($select_class1);
                            ?>
                        <option value="<?php echo $fetch_class1['class_ID'];?>">Senior <?php echo $fetch_class1['ClassName'];?></option>
                        <?php
                            $select_class=mysqli_query($con,"select * from classes where class_ID != '$class'");
                            while ($fetch_class=mysqli_fetch_array($select_class)) {
                                ?>
                                <option value="<?php echo $fetch_class['class_ID'];?>">Senior <?php echo $fetch_class['ClassName'];?></option>
                                <?php
                            }
                        ?>
                    </select>
                        <button type="submit" name="search-button">
                            <img src="../images/search.png" width="30" height="30">
                        </button>
                    </div>
                </form>
        </div>
    </div>
    <div class="main">
        <?php
            $first_a=mysqli_query($con,"select classes.*, teachers.* from teachers, classes where classes.class_ID='$class' and classes.classTeacher=teachers.teacher_ID");
            $fetch_firsta=mysqli_fetch_array($first_a);



    // find number of lessons for this class.....

    $find=mysqli_query($con,"select count(*) as number_of_lessons from lessons where class_ID='$class'");
    $second=mysqli_query($con,"select students.*,sum(marks.average_marks) as avrg from students,marks where students.class_ID='$class' and students.student_ID=marks.student_ID GROUP BY marks.student_ID order by marks.average_marks desc");
    $fetch_number=mysqli_fetch_array($find);
    $number_of_lessons=$fetch_number['number_of_lessons'];
    if ($number_of_lessons>0 && mysqli_num_rows($second)> 0) {
        ?>
        <div class="head color2">
            <img src="../images/dots.png" width="3" height="13" class=""> Marks For Students In Senior <?php echo $fetch_firsta['ClassName'];?>
        </div>
        <div class="list">
            <div class="top padd li title color3">
               <b class="padd-right"> All Modules Per-Term
               <button onclick="window.print()" class="print-btn no">print</button>
            </div>
            <div class="li">
                <?php 
                    
                    if (mysqli_num_rows($second)> 0) {
                        ?>
                        <table border='1'>
                            <tr>
                                <thead class="color2">
                                    <th>Rank</th>
                                    <th>Names</th>
                                    <th>Marks(%)</th>
                                    <th>Decision</th>
                                </thead>
                            </tr>
                            <?php 
                                $n=1;
                                $total_marks=0;
                                while($fetch_second=mysqli_fetch_array($second)){
                            ?>
                            <tr class="color padd">
                                <td><?php echo $n;?></td>
                                <td><?php echo $fetch_second['FirstName']." ".$fetch_second['LastName'];?></td>
                                <td>
                                    <?php
                                    $student=$fetch_second['student_ID'];
                                    $third=mysqli_query($con,"select sum(CAT) as cat, sum(EXAM) as exam from marks where student_ID='$student'");
                                    $fetch_third=mysqli_fetch_array($third);
                                    if (is_array($fetch_third)) {
                                        $marks=(($fetch_third['cat']/$number_of_lessons)+($fetch_third['exam']/$number_of_lessons))/2;
                                        $total_marks+=$marks;
                                        if ($marks>=70) {
                                           echo "<div>".number_format($marks,2)."</div>";
                                        }else{
                                            echo "<div style='color: darkred;text-decoration: underline'>".number_format($marks,2)."</div>";
                                        }
                                    }else{
                                        echo "<i class='small no'>not set!</i>";
                                        echo "<a href='set_lesson_marks.php?markId=$student.$lesson' class='padd-left color3 small no'>set</a>"; 
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($marks >= 70) {
                                        echo "PASS";
                                    }else{
                                        echo "FAIL";
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
            <div class="b">
                <div class="li color2">Class Performance</div>
                <div class="li color3">
                    <img src="../images/level.png" height="100" width="100">
                    <div class="cl font2">
                    <?php
                    $counts=mysqli_query($con,"select count(*) as nn from students where class_ID='$class'");
                    $qry3=mysqli_query($con,"select * from lessons where class_ID='$class'");
                    $ft_count=mysqli_fetch_array($counts);
                        $class_avg=number_format($total_marks/$ft_count['nn'],2);
                        echo "$class_avg %";
                    ?>
                    </div>
                </div>
            </div>
            <div class="detail top no">
                    <div class="li title color2">
                        View Unique Lesson's marks In S<?php echo $fetch_firsta['ClassName']; ?>
                    </div>
                        <?php
                            while ($fetch_query3=mysqli_fetch_array($qry3)) {
                        ?>
                            <div class="li color">
                                <img src="../images/right.png" width="20" height="20">
                                <a href="view_unique_marks.php?markId=<?php echo $fetch_query3['lesson_ID'];?>" class="contents padd color medium">
                                    <?php echo $fetch_query3['Title']; ?> With <b><?php echo $fetch_query3['Credits']; ?></b> Credits.
                                </a>
                            </div>
                        <?php
                            }
                        ?>
            </div>
        </div>
        <?php
            }else{
            ?>
            <div class="li padd-left color2">
              Can not show marks for class without any lesson studied or<b class="padd-left padd-right"> marks set </b>within!  
            </div>
            <?php
            }
        ?>
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