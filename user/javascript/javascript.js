
         
$(document).ready(function() {
    $('table.display').DataTable();
} );



// S I D E B A R     N A V I G A T I O N
function openSidenav() {
  document.getElementById("sidenavBar").style.width = "300px";
  document.getElementById("open-btn").style.visibility = "hidden";      
}

function closeSidenav() {
  document.getElementById("sidenavBar").style.width = "0";
  document.getElementById("open-btn").style.visibility = "visible";
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





//   H  O  M  E       I   N  T  E R  F A  C  E         N  A  V  I  G  A  T  I  O  N

function canoreco(){
  document.getElementById('canoreco').scrollIntoView({
    behavior: 'smooth',
    block: 'center',
    inline: 'center'
  });

  document.getElementById("sidenavBar").style.width = "0";
  document.getElementById("open-btn").style.visibility = "visible";
}


function motorpool(){
  document.getElementById('motorpool').scrollIntoView({
    behavior: 'smooth',
    block: 'center',
    inline: 'center'
  });
  document.getElementById("sidenavBar").style.width = "0";
  document.getElementById("open-btn").style.visibility = "visible";
}

function vision(){
  document.getElementById('vision').scrollIntoView({
    behavior: 'smooth',
    block: 'center',
    inline: 'center'
  });
  document.getElementById("sidenavBar").style.width = "0";
  document.getElementById("open-btn").style.visibility = "visible";
}

function mission(){
  document.getElementById('mission').scrollIntoView({
    behavior: 'smooth',
    block: 'center',
    inline: 'center'
  });
  document.getElementById("sidenavBar").style.width = "0";
  document.getElementById("open-btn").style.visibility = "visible";
}


function goals(){
  document.getElementById('goals').scrollIntoView({
    behavior: 'smooth',
    block: 'start',
    inline: 'center'
  });
  document.getElementById("sidenavBar").style.width = "0";
  document.getElementById("open-btn").style.visibility = "visible";


}





 
//    F O R M    1   F U N C T I O N S 

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



function form1(){
  var current_reading = document.getElementById("current-reading").value;
  var value = parseInt(current_reading);
  var next_value = value + 10000;

  if (current_reading.length > 4){
    document.getElementById('next-reading').value= next_value;
  }
  else{
    document.getElementById('next-reading').value="";
  }

  if (value > 10000) {
    document.getElementById("submit-form1").disabled = false;
  }
  else{
    document.getElementById("submit-form1").disabled = true;
  }
}


//     F O R M   2   F U N C T I O N S 
function form2(){

  var other = document.getElementById('other-reason');
  var break_system = document.getElementById('break-system');
  var fix_tires = document.getElementById('fix-tires');
  var electrical_system = document.getElementById('electrical-system');
  var fix_lights = document.getElementById('fix-lights');
  var specify_other = document.getElementById('specify-other');


  if (break_system.checked == true || fix_tires.checked == true || electrical_system.checked == true || fix_lights.checked == true) {
    document.getElementById('submit-form2').disabled = false;
  }
  else{
    document.getElementById('submit-form2').disabled = true;
  }

  if(other.checked == true){
    document.getElementById('specify-other').disabled = false;
  }
  else{
    document.getElementById('specify-other').disabled = true;
    document.getElementById('specify-other').value = '';
  }

  if (specify_other.disabled == false) {
    if (specify_other.value != "") {
      document.getElementById('submit-form2').disabled = false;
    }
    else{
      document.getElementById('submit-form2').disabled = true;
    }
  }
  
} 

 




//     F O R M   3   F U N C T I O N S 
function form3(){
  var expiration_date = document.getElementById('expirationDate').value;
  var ToDate = new Date();

  if (!expiration_date) {
    document.getElementById('submit-form3').disabled = true;
  }else{
    document.getElementById('submit-form3').disabled = false;
  }

  if (new Date(expiration_date).getTime()<ToDate.getTime()) {
    document.getElementById('submit-form3').disabled = true;
    return false;
  }else{
    document.getElementById('submit-form3').disabled = false;
    return true;
  }
   
}




//   S H O W       P A S S W O R D 

function showPassword() {
  var x = document.getElementById("edit-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

  var y = document.getElementById("confirm-password");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}






// E D I T   U S E R    D E T A I L S 

function editInfo(){
  var first_name = document.getElementById('edit-first').value;
  var last_name = document.getElementById('edit-last').value;
  var email = document.getElementById('edit-email').value;
  var contact = document.getElementById('edit-contact').value;
  var address = document.getElementById('edit-address').value;
  var username = document.getElementById('edit-username').value;
  

  if (first_name != "" || last_name !="" || email !="" || contact !="" || address !="" || username !="")  {
    document.getElementById('save-changes').disabled= false;
  }
  else{
    document.getElementById('save-changes').disabled= true;
  }
}

function editPassword(){
var password = document.getElementById('edit-password').value;
var confirm_password = document.getElementById('confirm-password').value;

 if (password.length > 7){
    document.getElementById("confirm-password").disabled  = false;  
  }
  else{
    document.getElementById("confirm-password").disabled = true;
    document.getElementById("confirm-password").value = "";
    document.getElementById('save-changes').disabled= true;
  }

  if (confirm_password == password){
    document.getElementById('save-changes').disabled= false;
  }
  else if (confirm_password == "") {
    document.getElementById('save-changes').disabled= true;
  }
  else{
    document.getElementById('save-changes').disabled= true;
  }

}

