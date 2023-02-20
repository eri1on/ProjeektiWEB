function ValidimiFormes(){
  

    var NameInput = document.getElementById('Name').value;
    var PasswordInput = document.getElementById('password').value;
  
    if (NameInput === "") {
      alert("Please enter your username !");
      document.getElementById("Name").focus();
      return false;
    }
  
  
    if (PasswordInput === "") {
      alert("Password cannot be empty !");
      document.getElementById("password").focus();
      return false;
    }
  
   
  
  
 
    return true;
  }
  