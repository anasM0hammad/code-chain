<?php 

include "../common/connection.php" ;

if(isset($_GET['username'])){

	$count = $_GET['count'];

  $username = $_GET['username'] ;

  $query = "SELECT * FROM usermodl29 WHERE username = '$username' " ;
  $result = mysqli_query($conn , $query);

  $flag="false" ;

  if($count>4)
  	$flag="true" ;

  while($row = mysqli_fetch_assoc($result)){
  	  $flag = "false";
  }

  echo json_encode($flag);
  
  
}



?>