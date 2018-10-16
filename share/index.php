<!DOCTYPE html>
<html>
<head>
	<title>Code Chat</title>
  <?php 
      include "../common/common-code.php" ;
      topHeader() ;
   ?>

  <style type="text/css">
  
    .friend-box{
      border:none;
    }
     .friend-box li{
      border:none;
    }


   .friend-box i {
      font-size: 10px;
    }

    .margin{
      margin-top: 30px;
    }

    .chat-box{
      margin-top: 50px;
      margin-right: 10px;
      position: absolute;
      bottom: 0;
      width: 100%;

    }

    .card-header b {
      cursor: pointer;
    }

    #chat_body{
        height: 468px;
        display: none;
    }

   .chat-contain{
    position: relative;
   }

  </style>
 
</head>
<body>
<!-- nav here -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="index.php"><img src="../img/logo.png" width="30" height="30"> Code Chain</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav container justify-content-end">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../img/logo.png" width="27" height="27" style="border-radius: 50%;"> Mohammad Anas</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-user-circle"></i> Profile</a>
           <a class="dropdown-item" href="#"><i class="fas fa-envelope"></i> Messages</a>
          <a class="dropdown-item" href="#"><i class="fas fa-sliders-h"></i> Settings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="#"><i class="fas fa-globe"></i> About</a>
      </li>

       <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i> Bells</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Bell 1</a>
          <a class="dropdown-item" href="#">Bell 2</a>
          <a class="dropdown-item" href="#">Bell 3</a>
      </li>
    </ul>
  </div>
</nav>
  

<!-- nav ends here -->


<div class="row" style="height: 560px;">
  <!-- ONLINE FRIENDS BOX -->

  <div class="col-md-2 margin ">
     <div class="card friend-box">
      <div class="card-header friend-box" style="color: blue;"><b>Online Friends</b></div>
       <ul class="list-group friend-box" >
          <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
          <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
          <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
          <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
          <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
          <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
          <li class="list-group-item"><img src="../img/logo.png" height="24" width="24"> Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
          
       </ul>
    </div>
  </div>
  
 
  <!-- MAIN TEXT EDITOR PAGE -->
  <div class="col-md-7">
    
  </div>

  <!-- CHAT BOX PAGE -->
  <div class="col-md-3 chat-contain">
    <div class="card chat-box ">
    <div class="card-header"><b id="name_bar"><img src="../img/logo.png" height="24" width="24"> Zainul Abedin</b> <i class="fas fa-phone float-right"></i></div>
    <div class="card-body" id="chat_body">
      <!-- CHAT WRITING FORM -->
      <form class="form-inline" style=": 300px;">
      <div class="form-group mx-sm-3 mb-2">
        <input type="text" class="form-control">
      </div>
      <h1 ><a href=""><i class="fas fa-chevron-circle-right" style="margin-bottom: 8px;"></i></a></h1>
    </form>
    </div>
  </div>
  </div>
</div>


<script type="text/javascript">
   var name_bar = document.querySelector("#name_bar") ;
   var chat_body = document.querySelector("#chat_body") ;

   name_bar.onclick = function(){
    if(chat_body.style.display == "none"){    //CHATBOX IS OPEN
       chat_body.style.display = "inherit" ;
       chat_body.style.transition = "display 4s";

    }

    else{                              //CHAT BOX IS CLOSED
        chat_body.style.display = "none"; ;
         chat_body.style.transition = "display 4s";
    }


   }


</script>

</body>
</html>