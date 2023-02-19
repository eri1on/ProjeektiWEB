function ValidimiFormes() {
  const NameRegex = /^[A-Za-z]+[a-zA-Z]{1,}/;
  const LastnameRegex = /^[A-Za-z]+[a-zA-Z]{1,}/;
  const EmailRegex = /^[a-z0-9]+([_.-][a-z0-9]+)*@[a-z0-9]+([.-][a-z0-9]+)*\.[a-z]{2,3}$/;
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
}

var submitBtn = document.getElementById("submit-btn");
submitBtn.addEventListener("click", function(event) {
  event.preventDefault();
  ValidimiFormes();
});


/*

You can prevent the default behavior of the submit button and keep the form fields filled with the values the user has entered by 
using the event.preventDefault() method.
To do this, you can pass the event object to your ValidimiFormes function, and call preventDefault() on that object when the validation fails.






var submitBtn = document.getElementById("submit-btn"); - This line of code finds the HTML element with the id of submit-btn and assigns it 
to the variable submitBtn.

submitBtn.addEventListener("click", function(event) { - This line of code adds an event listener to the submitBtn element for the click event.
   When the button is clicked, the function inside the second parameter will be executed.

event.preventDefault(); - This line of code prevents the default behavior of the submit button, which is to refresh the page. 
Instead, the function will be executed without refreshing the page.

ValidimiFormes(); - This line of code calls the ValidimiFormes function that you have defined to perform form validation.





*/