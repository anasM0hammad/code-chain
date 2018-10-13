<?php


function lefthome()
{
	?>




	<div class="card">
        <div class="card-header">
          <h5 class="card-title mod-line " ><b>ANAS </b><i class="fa fa-edit w3-right " style="cursor: pointer;" title="Edit profile"></i></h5>

        </div>
        <div class="card-body">
          
          <p class="text-muted mod-line">anas_123</p>
          <small class="card-text">"Think Twice, Code Once" Programmer | Developer | Guitarist </small>
          
        </div>
      </div>

      <!-- card bio ends -->

      <!-- card live here -->
              <div class="online mod-line">
                  <h3 class="mod-line mod-margin text-primary w3-border-bottom " style="padding-bottom: 10px;">Online Freinds</h3>
                  <ul class="list-group">
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    <li class="list-group-item">Mohd khalid<i class="fa fa-circle w3-right text-success"></i></li>
                    
                  </ul>
              </div>






	<?php
}




function righthome(){

	for ($i=0; $i < 35; $i++) { 
		
	
	?>

	 <div class="row mod-margin">
        <div class="col-1">
          <img src="../img/anas.jpeg" width="100%;">
        </div>
        <div class="col-11">
          <p><b>Mohammad anas</b> start following <b>modkhalid</b><span style="color: lightgray;"><small>4 hours ago</small></span></p>
          <div class="card">
            <div class="card-body">
              <h2 class="mod-line"><a href="" style="color: black;">mod/code</a></h2>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum<span style="color: red;">read more...</span>
            </div>
          </div>
        </div>
      </div>



	<?php

	}
}


?>