
function LoginShowPassword() {
  var x = document.getElementById("floatingPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


var mybutton = document.getElementById("scrolltop-button");
window.onscroll = function() {scrollFunction()};


function scrollFunction() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    mybutton.style.display = "block";
  }
  else{
    mybutton.style.display = "none";
  }
}

function ScrollTopFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
  
}


