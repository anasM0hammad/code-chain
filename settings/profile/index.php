<!DOCTYPE html>
<html>
<head>
	<title>Settings | profile</title>

    <style type="text/css">
    	
      .topitem{

      	border-top-left-radius: 34px;
      	border-top-right-radius: 34px;
      	border-bottom-left-radius: 34px;
      	border-bottom-right-radius: 34px;
      	background-color: #6CACEA;
      	color: #CCCECF;
      
      }

      .topitem li {
      	font-size: 25px;
      	margin-left: 20px;
      }

      .active i{
      	color: white;
      }

      .topitem a:hover{
      	color: white;
      }


    </style>


	<?php include '../../common/common-code.php';
	   
	topHeaderInner();
	include 'code/inc.profile.php';
	?>
	<style type="text/css">
		.list-group-item{
			line-height: 0.7;
		}
		.onthis{
			border-left: 3px solid brown;
		}
		.form-control{
			color: gray;
		}
	</style>
	
</head>
<body>
	<?php
	navInner();
	?>
	<div class="container">
		
			<?php topitem(); 
			editbio();
			?>
		
	</div>

</body>
</html>