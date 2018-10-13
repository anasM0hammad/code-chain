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
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  	<script src="js/script.js" ></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script src="../js/main.js"></script>
  <style type="text/css">
.mod-margin{
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


  </style>

</head>
<?php include 'code/inc.home.php'; ?>
<body>
<!-- nav here -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
  <a class="navbar-brand" href="#">Navbar</a>
  
</nav>
<!-- nav ends here -->

<div class="container w3-margin-top">
  <div class="row">
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