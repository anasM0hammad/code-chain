<!DOCTYPE html>
<html>
<head>
  <title>Code Chain | Home</title>
 <?php include '../common/common-code.php'; topHeader(); ?>
<link rel="icon" type="image/gif" href="../img/logo.png">

  <!-- CKEDITOR -->
   <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>

  <style type="text/css">
  #hint{
    max-height: 200px;width: 400px;background-color: white;border: 1px solid gray;overflow: auto;padding-left: 5px;
  }
  .notification-container{
    position: absolute;
    z-index: 999;
    width: 400px;
    right: 0px;
    height: 400px;
    background-color: white;
    overflow: auto;
    margin-top: 10px;
    display: none;
  }

.spinner {
  margin: 100px auto 0;
  width: 70px;
  text-align: center;
}
.spinner > div {
  width: 18px;
  height: 18px;
  background-color: #333;
  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}
.spinner .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}
.spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0) }
  40% { -webkit-transform: scale(1.0) }
}
@keyframes sk-bouncedelay {
  0%, 80%, 100% { 
    -webkit-transform: scale(0);
    transform: scale(0);
  } 40% { 
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
  }
}
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
   /*.search-bar:hover{
    width: 50%;
   }*/
  </style>

</head>

<?php
// will check whether user login or not
// this code will check whether user login or not 
session_start();

if(!isset($_SESSION['MKohaanlaisd'])){
  echo "login please";
  return;
}
session_write_close();
?>
<?php include '../home/code/inc.home.php'; ?>
<body>
<!-- nav here -->

<?php nav();?>
  

<!-- nav ends here -->

<div class=" w3-margin-top">
  <div class="row content" id="mainbody">
    <!-- bio and online people div start -->
    <div class="col-md-3" style="height: 600px;overflow: auto;">
      <?php lefthome();  ?>
    </div>


    <!-- bio ends here -->
    <div class="col-md-9" style="height: 600px;overflow:auto;">
  
      <h2 style="text-align: center;"><b><i class="far fa-clipboard"></i> Write Anything You Want..</b></h2> 
      <hr>
  
      <!-- HANDLING GET REQUEST -->
      <?php 

      if(isset($_GET['post_status'])){
        
        if($_GET['post_status']=='success'){
          echo "<div class='alert alert-success' role='alert'><b>Your Post Added Successfully.</b></div>";
        }
         else if($_GET['post_status']=='empty'){
          echo "<div class='alert alert-danger' role='alert'><b>Enter Requied Fields</b></div>";
         }

      }



      ?>


      <form class="container" method="post" action="../common/accept_post.php">
       <div class="form-group">
          <label for="title"><b>Post Title</b></label>
          <input type="text" class="form-control" name="title"> 
       </div>

        <div class="form-group">
          <label for="post Editor"><b>Start Writing Here</b></label>
          <textarea class="form-control" id="editor" rows="7" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block" style="border-radius: 0" name="post_submit"><i class="far fa-paper-plane"></i> Add Post</button>

      </form>   
   

    <script type="text/javascript">
      
      CKEDITOR.replace( 'content' ); 


    </script>

    </div>
  </div>
</div>

</body>







<script type="text/javascript">
counter=0;
function searchpeople(input) {
  str=input.value;
    if(str.length>1){
    $.get("../async/searchpeople.php?query="+str,function(data,status){
      document.getElementById('hint').innerHTML=data;
      // alert(status);
      
    });
    }else{
      document.getElementById('hint').innerHTML="";
    }
}
function requestForConnect(str,obj){
  console.log(str);
  $.get("../async/connect-request.php?agent="+str,function(data,status){
    obj.innerHTML=data;
  });
}
function requestCancel(str,obj){
  if(confirm("Are you sure?")){
    $.get("../async/cancel-request.php?agent="+str,function(data,status){
    obj.innerHTML=data;
  });
  }
  // alert("modkhalid");
}
var not=document.getElementById('showNotification');
not.onclick = ()=>{
  block=document.getElementById('notification');
  if(counter%2==0){
    block.style.display="block";
    block.style.transition="3s";
    counter=1;
  }else{
    block.style.display="none";
    counter=0;
  }
  notificationData=document.getElementById('notificationData');
  notificationData.innerHTML='<div class="spinner">  <div class="bounce1"></div>  <div class="bounce2"></div>  <div class="bounce3"></div></div>';
}
var bod=document.getElementById('mainbody');
bod.onclick=()=>{
  document.getElementById('notification').style.display="none";
  counter=0;
  document.getElementById('hint').innerHTML="";
}
</script>
</html>