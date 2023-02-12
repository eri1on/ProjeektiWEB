function ValidimiFormes() {
    const NameRegex = /^[A-Za-z]+[a-zA-Z]{1,}/;
    const LastnameRegex = /^[A-Za-z]+[a-zA-Z]{1,}/;
    const EmailRegex = /^[a-z A-Z 0-9]+\w[_.-]?\w+@[a-z]+.[a-z]{2,3}/;
    const PasswordRegex = /^[A-Z a-z 0-9 ?!/.]+\w[A-Z a-z 0-9 ?!/.]/;
  
    var NameInput = document.getElementById('Name').value;
    var LastNameInput = document.getElementById('lastname').value;
    var EmailInput = document.getElementById('email').value;
    var PasswordInput = document.getElementById('password').value;
  
    if (NameInput === "") {
      alert("Please enter your name !");
      document.getElementById("Name").focus();
      return false;
    }
  
    if (!NameRegex.test(NameInput)) {
      alert("The name can contain only letters and have at least 2 characters !");
      document.getElementById("Name").focus();
      return false;
    }
  
    if (LastNameInput === "") {
      alert("Please enter your lastname !");
      document.getElementById("lastname").focus();
      return false;
    }
  
    if (!LastnameRegex.test(LastNameInput)) {
      alert("Last name can contains only letters and have at least 2 characters !");
      document.getElementById("lastname").focus();
      return false;
    }
  
    if (EmailInput === "") {
      alert("Email cannot be empty");
      document.getElementById("email").focus();
      return false;
    }
  
    if (!EmailRegex.test(EmailInput)) {
      alert("Please enter a valid  email address");
      document.getElementById("email").focus();
      return false;
    }
  
    if (PasswordInput === "") {
      alert("Password cannot be empty !");
      document.getElementById("password").focus();
      return false;
    }
      if(!PasswordRegex.test(PasswordInput)){
          alert("Please enter a valid Password !!");
          document.getElementById("password").focus;
          return false
      }

      if (PasswordInput.length < 8) {
        alert("Password must be at least 8 characters long");
        document.getElementById("password").focus();
        return false;
    }
    

    alert("validation completed successfully");
}
