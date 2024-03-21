<?php 
include "../connection.php";
$get_id=$_GET['tid'];
$qry=mysqli_query($con,"delete from classes where class_ID='$get_id'");
if ($qry==true) {
	header('location: classes_details.php');
}else{
	echo "can not delete this class";
}
?>