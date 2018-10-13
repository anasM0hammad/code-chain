
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