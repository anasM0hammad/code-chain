<?php
// this code will check whether user login or not 
session_start();
if(!isset($_SESSION['MKohaanlaisd'])){
	echo "error";
	return;
}
// this condition will check request send by index page now its decoded into plain string /by some algorith....
if(isset($_REQUEST['agent'])){
	include '../common/connection.php';
	$agent=getId($_REQUEST['agent']);
	$sender=getId($_SESSION['MKohaanlaisd']);
	$sql="INSERT INTO freindrequestmodl29 (senderid,recieverid) values ('$sender','$agent')";
	if(mysqli_query($conn,$sql)){
		echo "requested";
	}else{
		echo "try again";
	}
}
session_write_close();