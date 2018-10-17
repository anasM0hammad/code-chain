<?php
include "../common/connection.php";

function lefthome()
{
	?>




	<div class="card" style="margin-top: 30px;">
        <div class="card-header">
          <h5 class="card-title mod-line " ><b>Mohammad Anas </b><i class="fa fa-edit w3-right " style="cursor: pointer;" title="Edit profile"></i></h5>
          <p class="text-muted mod-line">anas_123</p>
        </div>
        <div class="card-body">
        
          <small class="card-text">"Think Twice, Code Once" <br> Programmer | Developer | Guitarist </small>
          
        </div>
      </div>

      <!-- card bio ends -->

      <!-- card live here -->
              <div class="online mod-line">
                  <h5 class="mod-line mod-margin text-primary w3-border-bottom " style="padding-bottom: 10px;"><b>Online Friends</b></h5>
                  <ul class="list-group">
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    
                    
                  </ul>
              </div>






	<?php
}




function righthome(){ ?>

  <?php // SCRIPT TO DISPLAY ALL POST
   GLOBAL $conn ;
    $userid = $_SESSION['MKohaanlaisd'];
    $userid = getid($userid) ;

     $query = "SELECT * FROM postmodl29 WHERE userid = $userid " ;
     $result = mysqli_query($conn, $query) ;

     if(mysqli_num_rows($result)==0){
      echo "<div class='alert alert-danger' role='alert'><b>No Post Now</b></div>";
     }

     else{

      while($row = mysqli_fetch_assoc($result)){

        $content = $row['contents'];
        $date = $row['date'];
        $title = $row['title'];

       ?> 
		
	 <div class="row mod-margin2">

        <div class="col-1">
          <img src="../img/anas.jpeg" width="100%;" data-trigger="hover" data-toggle="popover"  title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">
        </div>
        <div class="col-11">
          <p><b>Mohammad anas</b> start following <b>modkhalid</b><span style="color: lightgray;"><small> 4 hours ago</small></span></p>
          <div class="card">
            <div class="card-body">

              <h3 class="mod-line"><a href="" style="color: black;"><b><?php echo $title;?></b></a></h3><?php echo $content; ?><span style="color: red;"> read more...</span><br>

              <h5 class="likes"><a href=""><i class="fas fa-thumbs-up"></i></a>
                <a href=""><i class="fas fa-heart"></i></a>
                <a href=""><i class="fas fa-comments"></i></a></h5>
            </div>
          </div>
        </div>
      </div>



	<?php
    }  // else end
	}   //loop ends
}    //function ends


?>