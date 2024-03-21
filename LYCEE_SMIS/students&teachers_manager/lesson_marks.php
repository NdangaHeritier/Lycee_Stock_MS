<?php 
$lesson=$_GET['lessonId'];
include "connection.php";
    $profile=mysqli_query($con,"select * from lessons where User_ID='$uid'");
    $fetchP=mysqli_fetch_array($profile);
    $myId=$fetchP['teacher_ID'];