<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
   <!-- EXTERNAL CSS FILE -->
  <link rel="stylesheet" type="text/css" href="./css/index.css">
    
    <title>Hacktoberfest</title>

   <!-- LOGO -->
   <link rel="icon" type="image/gif" href="img/logo.png">

  <!-- ANIMATE.CSSS -->
   <link rel="stylesheet" href =" https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

   
  <style type="text/css">
    
   body{

   background-image: url("img/background.jpg");
   background-position: top;
   background-size: cover;
   background-repeat: no-repeat;
  

}

.content{
  color: white;
  font-style: italic;
  padding: 40px; 
}

.content h2 {
  margin-top: 5px;
}

form{
    color: #36474F;
}

.reg_option{
    cursor: pointer;
}

.reg_option:hover{
    text-decoration: underline;
    color: white;
}


#login_option{
  color: #E9ECEF;
}

#sign_option{
    text-decoration: underline;
}

  </style>






    <title>Code Chain</title>
  </head>
  <body>
   
  
    <div class="row content" style="margin-top: 40px;">

      <!-- DESCRIPTION -->
      <div class="col-sm-8" >
        <img src="img/logo.png" height="150" width="150"  >
         <h2 id="head">Code Chain</h2><br>
        <p>A Real Time code Sharing Website with easy to <br> use User Interface. Code Chain is a Unique Web <br> Application  help you to code  with your friends <br> on the same  compiler with real time screen sharing.</p>

      </div>

      <!--  FORM -->

      <div class="col-sm-4">

         <div class="row" style="text-align: center;" >
                


             <!-- SIGN UP OPTION -->    
             <div class="col-sm-6" >
                <p class="reg_option" id="sign_option"><b>Sign Up</b></p>              
             </div>
                
              <!-- LOGIN OPTION  --> 
             <div class="col-sm-6" >
                 <p class="reg_option" id="login_option"><b>Login</b></p>
             </div>    
                
          
         </div>


       <!-- SIGN UP FORM -->
        <div class="card flipInY animated" id="sign_form">
        <div class="card-body">
          <form method="post" action="common/signup.php" id="from"  onsubmit="return valid_signup()"  >
              
              <div class="row">
                <div class="form-group col-md-6 ">
                    <label for="firstname"><b>First Name</b></label>
                  <input type="text" class="form-control" name="firstname" id="firstname">
                </div>
                <div class="form-group col-md-6 ">
                  <label><b>Last Name</b></label>
                  <input type="text" class="form-control" name="lastname" id="lastname">
                </div>
              </div>

             
                <div class="form-group ">
                    <label for="email"><b>Email</b></label>
                  <input type="email" class="form-control"  name="email" id="email">
                </div>
                <div class="form-group ">
                  <label><b>Password</b></label>
                  <input type="password" class="form-control" name="password" id="password">
                </div>
              
               
                <div class="form-group ">
                    <label for="username"><b>Username</b></label>
                  <input type="text" class="form-control" name="username" id="username"  onkeyup="check()">
                </div>

                <div class="form-group" id="username_alert">
                 <!-- <p id="username_alert"><span></span></p> -->
                </div>
               <br> 
              
              <button type="submit" class="btn btn-primary btn-sm btn-block" name="signup" id="sign_button" >Sign Up</button>
            </form>
        </div>
       </div>

       <!-- LOGIN FORM -->
        <div class="card flipInY animated" id="login_form" style="display: none;">
        <div class="card-body">
          <form method="post" action="common/login.php" onsubmit="return valid_login()">
              
                <div class="form-group ">
                    <label for="username"><b>Username</b></label>
                  <input type="text" class="form-control" name="login_username" id="username_l">
                </div>
                <div class="form-group ">
                  <label><b>Password</b></label>
                  <input type="password" class="form-control" name="login_password" id="password_l">
                </div>
                <br>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label" for="check" name="remember"><b>Remember Me<b></label>
                         <a href="" style="float: right;">Forgot Password ?</a>
                 </div>

               <br> 
              
              <button type="submit" class="btn btn-primary btn-sm btn-block" name="login">Login</button>
            </form>
        </div>
       </div>



      </div>
    </div>

    

    <script type="text/javascript">

     const username_alert = document.querySelector("#username_alert");

      var userCharCount = 0;

       document.onkeyup = function(event){
        
        if(event.keyCode == 8 && userCharCount > 0)
          userCharCount = userCharCount-2 ;

      }
     
      const checkUsername = async (username) =>{

       const call = await fetch(`async/valid_username.php?username=${username}&count=${userCharCount}`) ;

       const data = await call.json();

       return {data : data} ;

         
      }

      const check = ()=>{
        userCharCount++ ;
       checkUsername(username.value).then((result) => {
           
           if(result.data == "false"){
            username.style.borderColor = "#DC3545";

            if(userCharCount<4)
             username_alert.innerHTML = "<span style = 'color: #DC3545'>Username is short</span>";
            
            else
              username_alert.innerHTML = `<span style = "color: #DC3545">Username is Already Taken</span>`;
           }


           else{
            username.style.borderColor = "green";
            username_alert.innerHTML = `<span style = "color: green"> Username is Available</span>`;
           }
   
        console.log(result);



       })


 }



        
      // $("#username").keyup( checkUsername());      




    </script>
   
   <script type="text/javascript" src="js/index.js"></script>
    <!--JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
