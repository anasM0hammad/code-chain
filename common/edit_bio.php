               <?php

          include "connection.php";
     		//QUERY TO INSERT IN BIO TABLE

          if(isset($_POST['add_bio'])){

            $email = $_POST['email'];
            $bio = $_POST['bio'];
            $date = $_POST['date'];
            $num = $_POST['number'];
            $city = $_POST['city'];
            $country = $_POST['country'];
            $ins = $_POST['ins'];
            $desig = $_POST['desig'];

            session_start() ;
            $userid = $_SESSION['MKohaanlaisd'];

            $userid = getId($userid);


            $query = "INSERT INTO biomodl29 (userid , dob , phonenumber, city, country, institute, designation) VALUES ($userid, '$date', '$num', '$city', '$country', '$ins', '$desig')" ;

            $result = mysqli_query($conn , $query);

            if(!$result){
            	die("FAILED");
            }
            else{
                header("Location: ../settings/profile/?bio_updated=true");
              
            }



          }


?>