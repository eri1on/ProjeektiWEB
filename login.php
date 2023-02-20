
<?php

$valid=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'DB/connect.php';



   $username=$_POST['username'];
   $password=$_POST['password'];
   
   if (!empty($username) && !empty($password)) {
   $sql ="select * from `user` where username ='$username' and password ='$password'";
   
   $result=mysqli_query($con,$sql);
   if($result){
       $num=mysqli_num_rows($result);

       if($num>0){
           $valid=1;
           session_start();
           $_SESSION['username']=$username;
           header('location:home.php');
       }else {
          $invalid=1;
       }
   }
  
   }

}

?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="login-style.css"> 
        
    </head>
    <body>
<?php
     if($valid){
         echo '<script> alert("Login Successful !"); </script>';
     }
     if($invalid){
         echo'<script>alert("Invalid credentials");</script>';

     }

?>


    <div class="register">
<form class="SignUpForm" method="POST">
  <h2 class="h2">Login</h2>
  <input id="Name" type="text" name="username" placeholder="Username"><br>
  <input  id="password" class="register-password" name="password" type="password"placeholder="Password"><br>
  
  <input class="submit" type="submit" onclick=ValidimiFormes()>
</form>

</div>       
        <script src="login.js"> </script>
    </body>
</html>