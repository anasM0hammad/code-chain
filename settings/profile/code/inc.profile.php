<?php

	function topitem(){
		?>
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8" style="text-align: center;margin-top: 35px;">
				<!-- <h1>hello mod khaud</h1> -->
				<div class="w3-card-2 btn-group">
					<button type="button" class="btn btn-white">Apple</button>
					  <button type="button" class="btn btn-white">Samsung</button>
					  <button type="button" class="btn btn-white">Sony</button>
					  <button type="button" class="btn btn-white">Samsung</button>
					  <button type="button" class="btn btn-white">Sony</button>
					  <button type="button" class="btn btn-white">Samsung</button>
					  <button type="button" class="btn btn-white">Sony</button>
					  <button type="button" class="btn btn-white">Samsung</button>
					  <button type="button" class="btn btn-white">Sony</button>

				</div>
			</div>
			<div class="col-md-2">
				
			</div>

		</div>


<?php	} 




	function editbio(){
		?>
		<h3  style="margin-top: 40px;">Public profile</h3>
			 <hr > 
		<div class="row">

			<div class="col-7 w3-margin-top">
				<?php 

              if(isset($_GET['bio_updated'])){

                if($_GET['bio_updated']==='true'){
                	echo  "<div class='alert alert-success' role='alert'>Updated Successfully</div> ";
                }

              }


			?>


               <form action="../../common/edit_bio.php" method="post">
              				
				<div style="line-height: .7;" class="w3-margin-top">
					<p><b>Name<span class="text-danger">*</span></b></p>
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="name">
					</div>
					

				</div>


				<div style="line-height: .7;">
					<p><b>Public email</b></p>
					<div class="input-group mb-3">
					  
					  <input type="email" class="form-control" style="width: 50%;" name="email">
					</div>
					

				</div>


				<div style="line-height: .7;">
					<p><b>Bio</b></p>
					<div class="input-group mb-3">
					  
					  <textarea type="text" class="form-control" style="width: 50%;" name="bio"></textarea>
					</div>
					

				</div>
				<div style="line-height: .7;">
					<p><b>Date of Birth</b></p>
					<div class="input-group mb-3">
					  
					  <input type="date" class="form-control" name="date" >
					</div>
					

				</div>


				<div style="line-height: .7;" class="w3-margin-top">
					<p><b>Phone Number</b></p>
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="number">
					</div>
					

				</div>


				<div style="line-height: .7;" class="w3-margin-top">
					<p><b>City</b></p>
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="city">
					</div>
					

				</div>
				<div style="line-height: .7;" class="w3-margin-top">
					<p><b>Country</b></p>
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="country">
					</div>
					

				</div>
				<div style="line-height: .7;" class="w3-margin-top">
					<p><b>Institute</b></p>
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="ins">
					</div>
					

				</div>
				<div style="line-height: .7;" class="w3-margin-top">
					<p><b>Designation</b></p>
					<div class="input-group mb-3">
					  <input type="text" class="form-control" name="desig">
					</div>
					

				</div>
                
                <br><br>
				<button class="btn btn-primary btn-lg btn-block" style="border-radius: 0;" name='add_bio' type="submit"><i class="fas fa-plus-circle" ></i> Add Bio</button>
				<br><br><br>
          </form>
           
			</div>  <!-- BIO COL ENDED -->



			<div class="col-1"></div>

			<div class="col-4 w3-margin-top">
				
					<img src="../../img/logo.png" class="mx-auto d-block w3-card-4" style="width: 50%;border-radius: 50%;">
					<button class="btn btn-outline-primary w3-margin-top mx-auto d-block" style="width: 50%;" type="submit" name='up_image'>Upload image</button>

					<br><br><br><br><br><br>

					<button class="btn btn-success btn-lg mx-auto d-block" style="width: 50%; border-radius: 0;"><i class="fab fa-github"></i> Connect</button>
					<br>
					<button class="btn btn-primary btn-lg mx-auto d-block" style="width: 50%; border-radius: 0;"><i class="fab fa-linkedin"></i> Connect</button>




			</div>
		</div>   <!-- ROW ENDED -->

		<div class="footer" style="background-color: blue">
			
        

		</div>



		<?php
	}
?>