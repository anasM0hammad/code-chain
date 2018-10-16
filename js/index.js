
var signup = document.querySelector("#sign_option") ;
var login = document.querySelector("#login_option") ;


 signup.onclick = function(){

	if(signup.style.color !== "white"){

	var login_form = document.querySelector("#login_form");
	var sign_form = document.querySelector("#sign_form");

    signup.style.color = "white" ;
    signup.style.textDecoration = "underline";

    login.style.color = "#E9ECEF" ;
    login.style.textDecoration = "none";

    sign_form.style.display="inherit";
    login_form.style.display = "none";

	}


}

login.onclick = function(){

	if(login.style.color !== "white"){

	var login_form = document.querySelector("#login_form");
	var sign_form = document.querySelector("#sign_form");

    login.style.color = "white" ;
    login.style.textDecoration = "underline";

    signup.style.color = "#E9ECEF" ;
    signup.style.textDecoration = "none";

    login_form.style.display="inherit";
    sign_form.style.display = "none";

	}


}



// VALIDATION OF THE SIGNUP FORM

  
    const sign_button = document.querySelector("#sign_button");
    const firstname = document.querySelector("#firstname");
    const lastname = document.querySelector("#lastname");
    const email = document.querySelector("#email");
    const password = document.querySelector("#password");
    const username = document.querySelector("#username");
     const formcontrol = document.querySelector(".form-control");

    var flag = 0 ;


     var valid_signup = function(){

      if(firstname.value == ""){
        firstname.style.borderColor = "#DC3545"; flag = 1 ;
      }
      else{
         firstname.style.borderColor = "#CED4DA";
         }
      
      if(lastname.value == ""){
        lastname.style.borderColor = "#DC3545";   flag = 1 ;
      }
      else{
         lastname.style.borderColor = "#CED4DA";
        }


      if(email.value==""){
        email.style.borderColor = "#DC3545" ;   flag = 1;
      }
      else
        email.style.borderColor = "#CED4DA" ; 


      if(password.value == ""){
         password.style.borderColor = "#DC3545"; flag = 1;
       }
       else{
         password.style.borderColor = "#CED4DA";
       }

      if(username.value == ""){
         username.style.borderColor = "#DC3545"; flag = 1 ;
       }
       else{
         username.style.borderColor = "#CED4DA";
       }

         

     if(flag){
      return false ;
    }

    else{
     return true ;
    }
  }


  // VALIDATION OF LOGIN FORM
