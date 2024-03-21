<?php 
include "../connection.php";
$get_id=$_GET['tid'];
$qry=mysqli_query($con,"delete from teachers where teacher_ID='$get_id'");
if ($qry==true) {
	header('location: teacher_details.php');
}else{
	echo "can not delete this teacher";
}
?>