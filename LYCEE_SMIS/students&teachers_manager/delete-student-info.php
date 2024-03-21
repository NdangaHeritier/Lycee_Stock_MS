<?php 
include "../connection.php";
$get_id=$_GET['tid'];
$qry=mysqli_query($con,"delete from students where student_ID='$get_id'");
if ($qry==true) {
	header('location: student_details.php');
}else{
	echo "can not delete this student";
}
?>