<!DOCTYPE html>
<html>
<head>
	<title>Code Chain | Home</title>
  <?php 
      include "../common/common-code.php" ;
      topHeader() ;
   ?>

  <style type="text/css">
  .mod-margin{
    margin-top: 50px;
  }
  
  .mod-margin2{
    margin-top: 30px;
  }


  .list-group-item{
    border: 0px solid white;
    margin-left: 0px;
    padding-left: 0px;
    cursor: pointer;
  }
  .mod-underlin{
    text-decoration: underline;
  }

  .list-group{
    margin-left: 0px;
    padding-left: 0px;
  }
  
   .mod-line{
    line-height: 0.5;
  }
  .center{
      text-align: center;
   }
   .card-body{
    color: gray;
   }



   .content{
    padding-left: 20px;
    padding-right: 20px;

   }

   .likes i {
    margin-right: 6px;
   }



  </style>
 
</head>
<body>
<!-- nav here -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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


</body>
</html>