<?php
session_start();
if (isset($_SESSION['admin'])) {
    include('../connection.php');
    $uid=$_SESSION['admin'];
    $profile=mysqli_query($con,"select * from users where U_ID='$uid'");
    $fetchP=mysqli_fetch_array($profile);
   ?>

<html>
    <head>
        <title>LYCEE_ADMIN</title>
        <link rel="stylesheet" href="../styles/admins_index.css">
        <link rel="icon" href="../mis.png">
    </head>
    <body>
        <div class="main">
            <div class="left-pannel">
                <div class="logo">
                    <img src="../images/lyceelogo.png" width="100" height="100">
                    <div class="school-details">
                        <div class="school-name">
                            LYCEE DE MUHURA
                        </div>
                        <div class="school-location">
                            <img src="../images/loc.png" width="10" height="15">
                            <b>Gatsibo - Muhura - Taba.</b>
                        </div>
                    </div>
                </div>
                <div class="links">
                    <img class="bars" src="../images/bars.png" height="20" width="20">
                    <div class="a">
                        <img src="../images/link.png" width="20" height="15">
                        <a href="teachers_reg.php" target="mainframe">New Teacher</a>
                    </div>
                    <div class="a">
                        <img src="../images/link.png" width="20" height="15">
                        <a href="lessons_reg.php" target="mainframe">New Lesson</a>
                    </div>
                    <div class="a">
                        <img src="../images/link.png" width="20" height="15">
                        <a href="classes_reg.php" target="mainframe">New Class</a>
                    </div>
                    <div class="a">
                        <img src="../images/link.png" width="20" height="15">
                        <a href="students_reg.php" target="mainframe">New Student</a>
                    </div>
                    <div class="a">
                        <img src="../images/link.png" width="20" height="15">
                        <a href="student_details.php" target="mainframe">Track Student details</a>
                    </div>
                    <div class="a">
                        <img src="../images/link.png" width="20" height="15">
                        <a href="manage.php" target="mainframe">Manage</a>
                    </div>
                    <div class="a">
                        <img src="../images/link.png" width="20" height="15">
                        <a href="view_marks.php" target="mainframe">View Marks</a>
                    </div>
                </div>
            </div>
            <div class="right-pannel">
                <header style="">
                    <div class="profiles" style="display: flex;padding-left: 1rem;">
                       <a href="school-details.php" target="mainframe"> <img src="../images/home2.png" width="35" height="40"></a>
                        <div class="prof">
                            <a href="../account.php" target="mainframe">
                                <img src="<?php echo '../'.$fetchP['pic']?>" width="30" height="30" style="border: 2px solid  rgba(255, 240, 220, 1.0);border-radius: 50px;opacity: 0.8;"> <br>
                             <span><?php echo $_SESSION['user'];?></span>
                            </a>
                        </div>
                        <div style="margin-left: 2rem;">
                            <a href="../logout.php">
                                <img src="../images/lock.png" height="30" width="30">
                                <br><b style="padding: 5px;">Out</b></a>
                        </div>
                    </div>
                </header>
                <iframe src="school-details.php" name="mainframe"></iframe>
            </div>
        </div>
    </body>
</html>

<?php
}else{
    header('location:../login.php');
}
?>