<?php
$succes=0;
$user=0;
$backend_error="";

if ($_SERVER['REQUEST_METHOD']=='POST'){
    include 'DB/connect.php';
      
    


     
    // Check if required fields are not empty
        if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])){
     
        if(!preg_match('/^[a-zA-Z0-9_]{2,}$/',$_POST['username'])){
            $backend_error="username should have at least 2 characters and it can contain numbers and ' _ ' symbol !";
        }else{
          
        $username = $_POST['username'];
        }

        if(!preg_match('/^[a-z0-9]+([_.-][a-z0-9]+)*@[a-z0-9]+([.-][a-z0-9]+)*\.[a-z]{2,3}$/',$_POST['email'])){
          $backend_error="Please enter a valid email address";
        }else{
          $email = $_POST['email'];
        }

        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',$_POST['password'])){
          $backend_error="Password must be at least 8 characters long and contain at least one uppercase letter and one digit.";
        }else{
          $password = $_POST['password'];  
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        }


     
       
     if($backend_error==""){
      
        $sql = "SELECT * FROM `user` WHERE username='$username'   " ;
        
        $result = mysqli_query($con,$sql);

        if($result){
            $num = mysqli_num_rows($result);
            if($num > 0){
              //  echo "User already exists";
              $backend_error="User already exists.";
            
              $user=1;
            } else {
              $sql = "INSERT INTO `user`(username,email,password) VALUES ('$username','$email','$hashed_password')";
                $result = mysqli_query($con,$sql);
                if($result){
                  
                  //  echo "Signup successful";
                  $succes=1;
                    header('location:login.php');
                }else{
                    die(mysqli_error($con));
                }
            }
        }  else{
                 $backend_error="Database Error. Please try again later.";
        }



        
      } else {
        $backend_error="Please fill in all required fields.";
      }
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>


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


 


<form class="SignUpForm" method="POST" onsubmit="return ValidimiFormes();">

  <h2 class="h2">SIGN UP</h2>
  <input id="Name" type="text" name="username" placeholder="Username" autocomplete="off"><br>

  <input id="email" class="register-email" name="email" type ="text" placeholder="Email" autocomplete="off">
  <input  id="password" class="register-password" name="password" type="password"placeholder="Password" autocomplete="off"><br>
  <div id="error" style="color: red;"></div>
  <input class="submit" type="submit">
  <div id="Backend-error" style="color:orange" ></div>
</form>
</div>

<script>
 var backendErrorDiv=document.getElementById("Backend-error");
 backendErrorDiv.innerText="<?php echo $backend_error;?>";

</script>

<script src="signup.js"></script>
</body>
</html>