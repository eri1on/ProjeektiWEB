function ValidimiFormes() {
  

  const NameRegex = /^[a-zA-Z0-9_]{2,}$/;
  const EmailRegex = /^[a-z0-9]+([_.-][a-z0-9]+)*@[a-z0-9]+([.-][a-z0-9]+)*\.[a-z]{2,3}$/;
  const PasswordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;

  var NameInput = document.getElementById('Name').value;
  var EmailInput = document.getElementById('email').value;
  var PasswordInput = document.getElementById('password').value;

  var errorDiv=document.getElementById('error');

  if (NameInput.trim() === "") {
    errorDiv.innerText="Please enter your username !";
    document.getElementById("Name").focus();
    return false;
  }

  if (!NameRegex.test(NameInput)) {
   errorDiv.innerText="username should have at least 2 characters and it can contain numbers and ' _ ' symbol !";
    document.getElementById("Name").focus();
    return false;
  }

  if (EmailInput.trim() === "") {
    errorDiv.innerText="Email cannot be empty";
    document.getElementById("email").focus();
    return false;
  }

  if (!EmailRegex.test(EmailInput)) {
    errorDiv.innerText="Please enter a valid email address";
    document.getElementById("email").focus();
    return false;
  }

  if (PasswordInput.trim()=== "") {
    errorDiv.innerText="Password cannot be empty !";
    document.getElementById("password").focus();
    return false;
  }

  if (!PasswordRegex.test(PasswordInput)) {
    errorDiv.innerText="Password must be at least 8 characters long and contain at least one uppercase letter and one digit.";
    document.getElementById("password").focus();
    return false
  }

  if (PasswordInput.length < 8) {
    errorDiv.innerText="Password must be at least 8 characters long";
    document.getElementById("password").focus();
    return false;
  }

  alert("validation completed successfully");
  return true;
}





