<!DOCTYPE html>
<html>
<head>
	<title>Code Chain | Home</title>
	<?php include '../common/common-code.php';topHeader();?>
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