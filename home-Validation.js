
function  Validation(){

const NameRegex=/^[A-Za-z]+[a-zA-Z]{1,}/;
const LastNameRegex=/^[A-Za-z]+[a-zA-Z]{1,}/;
const EmailRegex=/^[a-z0-9]+([_.-][a-z0-9]+)*@[a-z0-9]+([.-][a-z0-9]+)*\.[a-z]{2,3}$/;
const PhoneRegex=/^\d{9,10}$/;

var NameInput=document.getElementById('name').value;
var LastnameInput=document.getElementById('lastname').value;
var EmailInput=document.getElementById('email').value;
var PhoneInput=document.getElementById('telephone').value;
var MessageInput=document.getElementById('message').value;




if(NameInput.trim()===""){
    alert("Please enter your name !")
    document.getElementById('name').focus();
    return false;
}

if(!NameRegex.test(NameInput)){
    alert("Name should only include letters, and have at least 2 characters");
    document.getElementById('name').focus();
    return false;
}


if(LastnameInput.trim()===""){
  alert("Please enter you lastname");
  document.getElementById('lastname').focus();
  return false;
}

if(!LastNameRegex.test(LastnameInput)){
     alert("Lastname should only include letters, and have at least 2 characters");
     document.getElementById('lastname').focus();
     return false;
}


if(PhoneInput.trim()===""){
    alert("Please enter you Phone Number !");
    document.getElementById('telephone').focus();
    return false;
}
if(!PhoneRegex.test(PhoneInput)){
  alert("Phone number can contains only numbers and have 9 or 10 digits");
  document.getElementById('telephone').focus();
  return false;
}


if(EmailInput.trim()===""){
  alert("Email cannot be empty !");
  document.getElementById("email").focus();
  return false;
}

if(!EmailRegex.test(EmailInput)){
alert("Please enter a valid email address");
document.getElementById('email').focus();
return false;
}
   
if(MessageInput.trim()===""){
  alert("Please enter a message !!");
  document.getElementById("message").focus();
  return false;

}

alert("Message sent successfully");

}
