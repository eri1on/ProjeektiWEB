function valido(){

var email=document.getElementById('email').value

if(email==('')){
console.log(confirm('email cannot be null'));
}


var password=document.getElementById('password').value
if(password==('')){
 console.log(confirm('password cannot be null'));
}

var name =document.getElementsByClassName('name').value
if(name==null||name==('')){
console.log(confirm('name cannot be null'))
return false;
}
var lastname = document.getElementsByClassName('lastname').value
if(lastname ==null||lastname==('')){
    console.log(confirm('lastName cannot be null'))
}
else{
 console.log(confirm('te dhenat jane rregull'));
}





}
