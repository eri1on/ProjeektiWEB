<?php
$succes=0;
$user=0;


if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'DB/connect.php';

    // Check if required fields are not empty
    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `user` WHERE username='$username'";
        $result = mysqli_query($con,$sql);

        if($result){
            $num = mysqli_num_rows($result);
            if($num > 0){
              //  echo "User already exists";
              $user=1;
            } else {
                $sql = "INSERT INTO `user`(username,email,password) VALUES ('$username','$email','$password')";
                $result = mysqli_query($con,$sql);
                if($result){
                  //  echo "Signup successful";
                  $succes=1;
                    header('location:signup.php');
                }else{
                    die(mysqli_error($con));
                }
            }
        }
    } else {
        echo "Please fill out all required fields.";
    }
}
?>



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

<?php

if ($user) {
    echo '<script>alert("user already exists!");</script>';
  }


  if
  ($succes){
      echo'<script> alert("You are successfully signed up");</script>';
  }

?>




  <header>
    <h1 class="title"><em>Welcome to <strong>CSE</strong></em></h1><br>


    </header>



<div class="register">


 


<form class="SignUpForm" method="POST">
  <h2 class="h2">SIGN UP</h2>
  <input id="Name" type="text" name="username" placeholder="Username"><br>

  <input id="email" class="register-email" name="email" type ="email" placeholder="Email">
  <input  id="password" class="register-password" name="password" type="password"placeholder="Password"><br>

  <input class="submit" type="submit" onclick=ValidimiFormes()>
</form>





</div>



<script src="signup.js"></script>
</body>
</html>