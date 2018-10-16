
<?php include "hosting.php" ?>

<?php 

$conn = mysqli_connect($servername , $username, $password, $dbname);

if(!$conn){
	die("CONNECTION FAILED") ;
}



?>