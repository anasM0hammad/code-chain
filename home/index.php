<!DOCTYPE html>
<html>
<head>
	<title>Code Chain | Home</title>
	<meta charset="utf-8">

  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  	<script src="js/script.js" ></script>

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script src="../js/main.js"></script>

  <!-- LOGO -->
  <link rel="icon" type="image/gif" href="../img/logo.png">

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
<?php include 'code/inc.home.php'; ?>
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

<div class=" w3-margin-top">
  <div class="row content">
    <!-- bio and online people div start -->
    <div class="col-md-3" style="height: 600px;overflow: auto;">
      <?php lefthome();  ?>
    </div>


    <!-- bio ends here -->
    <div class="col-md-9" style="height: 600px;overflow:auto;">
   
      <?php righthome(); ?>

    </div>
  </div>
</div>




</body>
</html>