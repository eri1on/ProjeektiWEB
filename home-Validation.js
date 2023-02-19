
function  Validation(){

const NameRegex=/^[A-Za-z]+[a-zA-Z]{1,}/;
const LastNameRegex=/^[A-Za-z]+[a-zA-Z]{1,}/;
const EmailRegex=/^[a-z0-9]+([_.-][a-z0-9]+)*@[a-z0-9]+([.-][a-z0-9]+)*\.[a-z]{2,3}$/;


var NameInput=document.getElementById('name').value;
var LastnameInput=document.getElementById('lastname').value;
var EmailInput=document.getElementById('email').value;


if(NameInput===""){
    alert("Please enter your name !")
    document.getElementById('name').focus();
    return false;
}

if(!NameRegex.test(NameInput)){
    alert("Name should only include letters, and have at least 2 characters");
    document.getElementById('name').focus();
    return false;
}

if(LastnameInput===""){
  alert("Please enter you lastname");
  document.getElementById('lastname').focus();
  return false;
}

if(!LastNameRegex.test(LastnameInput)){
     alert("Lastname should only include letters, and have at least 2 characters");
     document.getElementById('lastname').focus()
     return false;
}


if(EmailInput===""){
  alert("Email cannot be empty !");
  document.getElementById("email").focus();
  return false;
}

if(!EmailRegex.test(EmailInput)){
alert("Please enter a valid email address");
document.getElementById('email').focus();
return false;
}
   

alert("validation completed successfully");

}
/*  it clears the field input  when submit button is pressed

function  {
    document.getElementById("name").value = "";
    document.getElementById("lastname").value = "";
    document.getElementById("email").value = "";
    document.getElementById("textarea").value = "";
  }
  */