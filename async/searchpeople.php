<?php
session_start();
if(isset($_REQUEST['query'])){
	$query=$_REQUEST['query'];
	include '../common/connection.php';
	$sql="SELECT * FROM usermodl29 where username like '%$query%' or firstname like '%$query%' or lastname like '%$query%' ";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
			$reciever_id=$row['userid'];
			$user_id=setId($row['userid']);
			
			$my_id=getId($_SESSION['MKohaanlaisd']);
			// session_write_close();
			// query to check the freindship status
			// if its 0 ==> You sent the freind request
			// if it is 1 ==> u are freing 
			// else(-1) u can send the request to that user
			$sql1="SELECT * FROM freindrequestmodl29 where senderid='$my_id' and recieverid='$reciever_id'";
			$result1=mysqli_query($conn,$sql1);
			$freind_ship_status=-1;
			if(mysqli_num_rows($result1)>0){
				if($col=mysqli_fetch_assoc($result1)){
					$freind_ship_status=$col['status'];
				}
			}
			// ending of check status here
			// now itis HTML representation
			?>

			<div class="row w3-border-bottom " style="width: 100%;">
				
				<div class="col-8 w3-padding-left">
					<p style="font-size: 15px;"><b><?=$row['username']?></b> <small><?=$row['firstname']?> <?=$row['lastname']?></small></p>

				</div>
				<div class="col-4">

					<?php if($freind_ship_status==-1){ 
					?>
					<button class="w3-right w3-input bg-success" onclick="requestForConnect('<?=$user_id?>',this)">connect</button>
					<?php 
					}else if($freind_ship_status==0){
						?>
						<button class="w3-right w3-input bg-warning" onclick="requestCancel('<?=$user_id?>',this)">Requested</button>
						<?php 
					}else if($freind_ship_status==1){
						?>
						<button class="w3-right w3-input bg-primary" onclick="disconnect('<?=$user_id?>',this)">connected</button>
						<?php 
					}else{
						?>
						<button class="w3-right w3-input" onclick="unBlockMe('<?=$user_id?>',this)">Error</button>
						<?php 
					}
					?>
				</div>
			</div>



			<?php
		}
	}else{
		echo "user not found <b>$query</b>";
	}
}
?>