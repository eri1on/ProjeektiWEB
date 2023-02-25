<?php

session_start();
include 'DB/connect.php';
if(!isset($_SESSION['username'])){
  header('location:login.php');
 exit;
 }else{
     $username = $_SESSION['username'];
 }

 if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];
  
  
  if(empty($name) || empty($lastname) || empty($email) ||  empty($phone)||empty($message)){
    echo 'Please fill all the fields.';
  } else if(!preg_match('/^\d{9,10}$/',$phone)){
    echo 'Phone number can contains only numbers and have 9 or 10 digits.';
  }
  else if ( !preg_match('/^[A-Za-z]+[a-zA-Z]{1,}/',$name)){
    echo 'Name should only include letters, and have at least 2 characters' ;
  } 
  else if (!preg_match('/^[A-Za-z]+[a-zA-Z]{1,}/',$lastname)){
    echo 'Lastname should only include letters, and have at least 2 characters' ;
  }else if(!preg_match('/^[a-z0-9]+([_.-][a-z0-9]+)*@[a-z0-9]+([.-][a-z0-9]+)*\.[a-z]{2,3}$/',$email) ){
    echo'Please enter a Valid Email Adress';
  }
  
  else {
  
  $sql="insert into `contact`(contact_id,name,lastname,email,telephone,message) values('','$name','$lastname','$email',$phone,'$message')" ;
  $result=mysqli_query($con,$sql);
  
  if($result){
      //echo'data inserted successfull.';
      header('location:home.php');
  }else{
      die(mysqli_error($con));
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
  <title>HOME</title>
  <link rel="stylesheet" href="home-style.css">
</head>

<body id="home-body">

  <header class="center">
   

    <div>
    <?php 
    
    $sql = "SELECT * FROM `user` WHERE username = '$username' LIMIT 1";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

// check if user is an admin
if ($row['role'] == 1) {
    // show Dashboard button for admin users

 
    echo '<a href= "DB/dashboard.php" class="dashboard-button">Dashboard</a> ';
}
    
    
    
    
    
    ?>
   
    <a class="logout" href="logout.php" class="btn">LOGOUT</a>
      <nav>
        <img class="ubt-logo" src="https://www.ubt-uni.net/wp-content/uploads/2018/05/DCIMUNTLOGO123-6.png">

        <ul>
          <li><a href="#about-section">ABOUT</a></li>
          <li> <a href="CSE.php">CSE</a></li>
          <li><a href="#CU">CONTACT US</a></li>
        </ul>
        <hr class="style1">

      </nav>
      <h2 class="title"> Welcome to CSE Community</h2>
      <h5 class="subtitle">We are happy to have you here</h5>
      <img class="header-img" src="https://img.freepik.com/free-vector/streaming-binary-code-numbers-technology-background_1017-25329.jpg?w=2000">
    </div>
  </header>

  <main>
    <section id="about-section">
      <h2 class="title2">About</h2>

      <div id="div-about">
        <ul>

          <li><img class="about-img1" src="https://cdn3d.iconscout.com/3d/premium/thumb/student-studying-on-laptop-while-sitting-on-bean-bag-5711047-4779535.png">
            <h4 class="h4-about">WHO IS THIS WEBSITE FOR</h4>
            <p class="p1">This website is for  Students<br> who study computer science and engineering.</p>
          </li>


          <li><img class="about-img1" src="https://static.vecteezy.com/system/resources/previews/009/312/916/original/student-showing-thumbs-up-3d-illustration-chartoon-character-cute-boy-png.png">
            <h4 class="h4-about">WHO CAN USE THIS WEBSITE</h4>
            <p class="p1">This website can be used by anyone <br>who is a CSE Student.</p>
          </li>
          <li><img class="about-img1" src="https://static.vecteezy.com/system/resources/thumbnails/009/312/925/small/student-is-having-an-idea-3d-illustration-chartoon-character-cute-girl-png.png">
            <h4 class="h4-about">WHY IS THIS WEBSITE CREATED</h4>
            <p class="p1">This website is created to connect<br> all students of CSE to help each-other.</p>
          </li>


</ul>
</div>
    </section>






    <section id="team">
      <div class="wrapper">
        <h1>MEET OUR TEAM</h1>


        <ul>
          <li class="team_info">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/Base_photos.png">
            <h3>TOM</h3>
            <h4>CEO / Marketing Guru</h4>
            <P>Lorem ipsum dolor sit amet,<br>
              consectetuer adipiscing elit,<br>
              sed diam nonummy nibh<br>
              euismod tincidunt ut laoreet<br>
              dolore magna.</P>
            <ul>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/Facebook_Icon.png"></li>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/Twitter.png"></li>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/LinkedIn_icon.png"></li>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/mail.png"></li>
            </ul>
          </li>

          <li class="team_info">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/Base_photos.png">
            <h3>Kate</h3>
            <h4>Creative Director</h4>
            <p>Duis aute irure dolor in in<br> voluptate velit esse cillum<br> dolore fugiat nulla pariatur.<br> Excepteur sint occaecat non<br> diam proident.</p>
            <ul>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/Twitter.png"></li>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/LinkedIn_icon.png"></li>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/mail.png"></li>
            </ul>
          </li>
          <li class="team_info">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/Base_photos.png">
            <h3>MICHAEL</h3>
            <h4>Lead Designer</h4>
            <p>Nemo enim ipsam voluptas<br>sit aspernatur aut odit aut<br>fugit, sed quia consequuntur<br>magni dolores eos qui ratione<br>voluptatem nesciunt.</p>
            <ul>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/Facebook_Icon.png"></li>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/Twitter.png"></li>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/LinkedIn_icon.png"></li>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/mail.png"></li>
            </ul>
          </li>
          <li class="team_info">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/Base_photos.png">
            <h3>JOEY</h3>
            <h4>SEO / Developer</h4>
            <p>Sed ut perspiciatis unde<br>omnis iste natus error sit<br>voluptatem accusantium<br>doloremque laudantium,<br>totam rem aperiam.
            </p>
            <ul>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/Facebook_Icon.png"></li>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/Twitter.png"></li>
              <li class="social_media"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/336265/mail.png"></li>
            </ul>
          </li>
        </ul>
      </div>
    </section>


   <section id="CU">

     <div id="contact-id">


       <div class="our-div">

         <h4 class="h4-info">OUR INFO</h4>
<table>
  <tr>
    <td>
       <div class="location">

   <img src="https://cdn.iconscout.com/icon/free/png-128/location-3079544-2561454.png">
   <h5> OUR MAIN OFFICE </h5>
   <p>HoHo 94 Broadway St<br>New York Ny 1001</p>
 </div></td>
<td>
        <div class="phonenumber">
          <img src="https://cdn-icons-png.flaticon.com/512/3617/3617246.png">
          <h5> Phone Number </h5>
          <p>234-9876-5400<br>888-0123-45</p>
        </div>
      </td>
      </tr>

      <tr>
        <td>
        <div class="fax">
          <img src="https://cdn-icons-png.flaticon.com/512/9535/9535394.png">
          <h5>FAX</h5>
          <p>1-234-567-8900</p>
        </div>
      </td>

      <td>
        <div class="email-our"> 
          <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png">
          <h5>EMAIL</h5>
          <P>Cse.community@ubt-uni.net</P>

        </div>
      </td>

      </tr>
</table>
       </div>


       <div class="your-div">
   <h4 class="h4-info">YOUR INFO</h4>

   <form  method="post"  onsubmit="return  Validation();">
     <input id="name"type="text" placeholder="Name" name="name">
     <input id="lastname"type="text"placeholder="Last name" name="lastname"><br>
     <input id="email"type ="text"placeholder="Email" name="email"><br>
     <input id="telephone" type="tel" placeholder="Telephone" name="phone" ><br>
     <textarea id ="message"class="textarea" rows="6" cols="30" placeholder="Your Message" name="message" ></textarea><br>
     <input id="submit" type="submit" name ="submit">
     
   </form>
       </div>


     </div>

      </section>

  </main>

<script  src="home-Validation.js">


</script>


</body>

</html>
