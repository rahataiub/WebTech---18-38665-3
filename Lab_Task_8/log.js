function uservalid(){
	var username = document.getElementById("username");

	if(username.value == null ||username.value == "" ){
		document.getElementById("nameErr1").style.opacity=1;
	}
	else
	{
		document.getElementById("nameErr1").style.opacity=0;
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




