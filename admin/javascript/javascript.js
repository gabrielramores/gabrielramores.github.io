$('#select-driver').select2();

$('#select-vehicle').select2();


$(document).ready(function() {
    $('table.display').DataTable();
} );




function repairLocation(){

	var facilitated = document.getElementById('facilitated');
	var outsourced = document.getElementById('outsourced');

	facilitated.onclick = function(){
		facilitated.checked = true;
		outsourced.checked = false;
	}
	
	outsourced.onclick = function(){
		facilitated.checked = false;
		outsourced.checked = true;

	}

}



//    S H O W    P A S S W O R D  
function showPassword() {
  var x = document.getElementById("edit-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}



/**  B   A   C    K        T  O         T    O    P **/

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




// E D I T   U S E R    D E T A I L S 

function editInfo(){
  var first_name = document.getElementById('edit-first').value;
  var last_name = document.getElementById('edit-last').value;
  var id = document.getElementById('edit-id').value;
  var username = document.getElementById('edit-username').value;
  

  if (first_name != "" || last_name !="" || id !="" || username !="")  {
    document.getElementById('edit-driver').disabled= false;
  }
  else{
    document.getElementById('edit-driver').disabled= true;
  }
}



function editPassword (){
var password = document.getElementById('edit-password').value;

 if ((password!= "") && (password.length > 7)){
  document.getElementById('edit-driver').disabled= false;
}
else{
  document.getElementById('edit-driver').disabled= true;
  }

}


function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function isLetterKey(key) {
    var keycode = (key.which) ? key.which : key.keyCode;

    if ((keycode > 64 && keycode < 91) || (keycode > 96 && keycode < 123 || (event.charCode==32)))  
    {     
           return true;    
    }
    else
    {
        return false;
    }
         
}


function setSchedule(){
  var sched = document.getElementById('input-schedule').value;
  var ToDate = new Date();

  if (!sched) {
    document.getElementById('set-button').disabled = true;
  }else{
    document.getElementById('set-button').disabled = false;
  }

  if (new Date(sched).getTime()<ToDate.getTime()) {
    document.getElementById('set-button').disabled = true;
    return false;
  }else{
    document.getElementById('set-button').disabled = false;
    return true;
  }
   
}