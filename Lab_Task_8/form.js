function uservalid(){
	var username = document.getElementById("username");

	if(username.value == null ||username.value == "" ){
		document.getElementById("usererr").style.opacity=1;
	}
	else
	{
		document.getElementById("usererr").style.opacity=0;
	}
}

function passvalid(){
	var password = document.getElementById("password");

	if(password.value == "" || password.value == null){
		document.getElementById("passerr").style.opacity=1;
	}
	else
	{
		document.getElementById("passerr").style.opacity=0;
	}
}



function cpvalid(){
	var password = document.getElementById("password");

	if(password.value == "" || password.value == null){
		document.getElementById("cperr").style.opacity=1;
	}
	else
	{
		document.getElementById("cperr").style.opacity=0;
	}
}







function namevalid(){
	var name = document.getElementById("name");

	if(name.value == null ||name.value == "" ){
		document.getElementById("nameerr").style.opacity=1;
	}
	else
	{
		document.getElementById("nameerr").style.opacity=0;
	}
}

function emailvalid(){
	var email = document.getElementById("email");

	if(email.value == "" || email.value == null){
		document.getElementById("emailerr").style.opacity=1;
	}
	else
	{
		document.getElementById("emailerr").style.opacity=0;
	}
}










function dobvalid(){
	var dob = document.getElementById("dob");

	if(dob.value == null ||dob.value == "" ){
		document.getElementById("doberr").style.opacity=1;
	}
	else
	{
		document.getElementById("doberr").style.opacity=0;
	}
}
