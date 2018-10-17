<?php
include 'hosting.php';
$conn = mysqli_connect($servername, $username, $password, $dbname);
        
     if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
function getId($session){
	$sender_id=$session;
	$sender_id=hex2bin($sender_id);
	$sender_id=base64_decode($sender_id);
	$sender_id=(($sender_id/5)-300)/5;
	return $sender_id;
}
function setId($value){
	$user_id=$value;
	$user_id=($user_id*5+300)*5;
	$user_id=base64_encode($user_id);
	$user_id=bin2hex($user_id);
	return $user_id;
}
?>