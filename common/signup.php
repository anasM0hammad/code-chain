<?php 

include "connection.php" ;

echo "Page";

if(isset($_POST['signup'])){

 echo "Hello";

  $modl29_firstname = $_POST['firstname'];
  $modl29_lastname = $_POST['lastname'] ;
  $modl29_username = $_POST['username'] ;
  $modl29_password = $_POST['password'] ;
  $modl29_email = $_POST['email'] ;

  $modl29_firstname = mysqli_real_escape_string($conn , $modl29_firstname) ;
  $modl29_lastname = mysqli_real_escape_string($conn , $modl29_lastname) ;
  $modl29_username = mysqli_real_escape_string($conn , $modl29_username) ;
  $modl29_password = mysqli_real_escape_string($conn , $modl29_password) ;
  $modl29_email = mysqli_real_escape_string($conn , $modl29_email) ;

  $crypted_password=crypt($modl29_password,'$2a$10$JpwzO05wgRHG0dhuaPBaOU$');

  $query = "INSERT INTO usermodl29 (firstname, lastname, email, password, username) VALUES ('{$modl29_firstname}', '{$modl29_lastname}', '{$modl29_email}', '{$crypted_password}', '{$modl29_username}')" ;

  $result = mysqli_query($conn , $query) ;

  if(!$result){

  	die("QUERY FAILED") ;
  }

  else{
  	header("Location: ../home/") ;
  }




}



?>