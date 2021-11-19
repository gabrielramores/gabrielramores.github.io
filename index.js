function myFunction(){
	window.location.href="home.html";
}

function showPassword() {
	var x = document.getElementById("floatingPassword");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}