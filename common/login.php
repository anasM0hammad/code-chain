<?php
include 'connection.php';
if(isset($_POST['login'])){
	$modl29_username=$_POST['login_username'];
	$modl29_password=$_POST['login_password'];
	
	$crypted_password=crypt($modl29_password,'$2a$10$JpwzO05wgRHG0dhuaPBaOU$');

	$sql="SELECT * FROM usermodl29 where username='$modl29_username' and password='$crypted_password'";
	echo $crypted_password;

	$result=mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result)>0){
		if($row=mysqli_fetch_assoc($result)){
			
			session_start();
			$_SESSION['MKohaanlaisd']=$username;
			echo "loading...";
		}
	}
	else{
		echo "Please enter valid username or password";
	}
}



