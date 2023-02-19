<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>


    <link rel="stylesheet" href="signup-style.css">


</head>
<body id="login-body">

  <header>
    <h1 class="title"><em>Welcome to <strong>CSE</strong></em></h1><br>


    </header>



<div class="register">

<form class="SignUpForm"  method="post" enctype="text/plain">
    <h2 class="h2">SIGN UP</h2>
    <input id="Name"type="text" name="name" placeholder="Username"><br>

    <input id="email" class="register-email" name="email" type ="email" placeholder="Email">
    <input  id="password" class="register-password" name="password" type="password"placeholder="Password"><br>

    <input class="submit" type="submit"  onclick=" ValidimiFormes()" >
    
  </form>

 




</div>



<script src="signup.js"></script>
</body>
</html>