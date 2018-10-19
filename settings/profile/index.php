<!DOCTYPE html>
<html>
<head>
	<title>Settings | profile</title>
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