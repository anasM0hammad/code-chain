<?php


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
                    
                    
                  </ul>
              </div>






	<?php
}




function righthome(){ ?>

<!-- TO POST ANY NEWS OR SOMTHING -->
<form style="width: 85% ; margin-top: 40px;" class="container">
 <div class="form-group " >
    <label for="post"><b>Write and Say to Everyone</b></label>
    <textarea class="form-control" rows="3" name="post"></textarea>
  </div>
  <button type="button" class="btn btn-primary" name='submit'>Post</button>
</form>



	<?php for ($i=0; $i < 35; $i++) { ?> 
		
	 <div class="row mod-margin2">

        <div class="col-1">
          <img src="../img/anas.jpeg" width="100%;">
        </div>
        <div class="col-11">
          <p><b>Mohammad anas</b> start following <b>modkhalid</b><span style="color: lightgray;"><small> 4 hours ago</small></span></p>
          <div class="card">
            <div class="card-body">
              <h3 class="mod-line"><a href="" style="color: black;"><b>News Feed</b></a></h3>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum<span style="color: red;"> read more...</span><br>
              <h5 class="likes"><a href=""><i class="fas fa-thumbs-up"></i></a>
                <a href=""><i class="fas fa-heart"></i></a>
                <a href=""><i class="fas fa-comments"></i></a></h5>
            </div>
          </div>
        </div>
      </div>



	<?php

	}
}


?>