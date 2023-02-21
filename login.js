function ValidimiFormes(){
  

    var NameInput = document.getElementById('Name').value;
    var PasswordInput = document.getElementById('password').value;
  
    var errorDiv=document.getElementById('error');
    if (NameInput === "") {
      errorDiv.innerText="Please enter your username !";
      document.getElementById("Name").focus();
      return false;
    }
  
  
    if (PasswordInput === "") {
      errorDiv.innerText="Password cannot be empty !";
      document.getElementById("password").focus();
      return false;
    }
  
   
  
  
 
    return true;
  }
  