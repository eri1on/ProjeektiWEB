function ValidimiFormes(){
  

    const NameRegex = /^[A-Za-z]+[a-zA-Z]{1,}/;
    const PasswordRegex = /^[A-Z a-z 0-9 ?!/.]+\w[A-Z a-z 0-9 ?!/.]/;
    var NameInput = document.getElementById('Name').value;
    var PasswordInput = document.getElementById('password').value;
  
    if (NameInput === "") {
      alert("Please enter your username !");
      document.getElementById("Name").focus();
      return false;
    }
  
    if (!NameRegex.test(NameInput)) {
      alert("username can contain only letters and have at least 2 characters !");
      document.getElementById("Name").focus();
      return false;
    }
 
  
    if (PasswordInput === "") {
      alert("Password cannot be empty !");
      document.getElementById("password").focus();
      return false;
    }
  
    if (!PasswordRegex.test(PasswordInput)) {
      alert("Please enter a valid Password !!");
      document.getElementById("password").focus();
      return false
    }
  
    if (PasswordInput.length < 8) {
      alert("Password must be at least 8 characters long");
      document.getElementById("password").focus();
      return false;
    }
  
    alert("validation completed successfully");
    return true;
  }
  