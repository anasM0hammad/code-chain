<?php 

include "conncetion.php" ;

if(isset($_POST['post_submit'])){

 $title = $_POST['title'] ;
 $content = $_POST['content'];

 session_start();
 $userid = $_SESSION['MKohaanlaisd'];

 $userid = getid($userId) ;


 if(empty($title) || empty($content)){

 }

 else{

    $query = "INSERT INTO postmodl29 (userid , 'contents' , 'date' , title ) VALUES ($userid , '$content', now() , '$title')" ;
    $result = mysqli_query($conn , $query) ;

    if(!$result){
    	die("QUERY FAILED".mysqli_error($conn)) ;
    }

    else{
    	header("Location: ../post_editor/index.php?post_status=success");
    }

 }




}


?>