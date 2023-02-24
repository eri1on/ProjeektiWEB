<?php


session_start();
include '../DB/connect.php';
if(!isset($_SESSION['username'])){
  header('location:../login.php');
 
 }else{
     $username = $_SESSION['username'];
 }





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="slider-style.css">
</head>
<body>

 <div class="topDiv">

    <div class="left-div">
  <h2 class="title-h2">Web Engineering</h2>

  <ul>

<label onclick="showphoto1()"><li>HTML</li></label>
<label onclick="showphoto2()"> <li>CSS</li></label>
<label onclick="showphoto3()"><li>JAVASCRIPT</li></label>
<label onclick="showphoto4()"><li>PHP</li></label>
  </ul>


    </div>
    
<div class="slider"> 
    <div class="images">
   <img class="photo-html" src="images/html.png">
   <img class="photo-css" src="images/css.png">
   <img class="photo-javascript" src="images/javascript.png">
   <img class="photo-php" src="images/php.png">

    </div>

    <p class="phtml"> <span>HTML</span><br>
      HTML  is used to create the structure and content of a webpage.
    </p>
    <p class="pcss"><span>CSS</span> <br> 
      CSS  is a style sheet language used to describe the look and formatting of a document written in HTML.</p>

    <p class="pjava"><span>JAVASCRIPT</span><br>
      JavaScript is a interpreted programming language that is used to add dynamic features to web pages.
    </p>
    <p class="pphp"><span> PHP</span><br>
      PHP (Hypertext Preprocessor) is a server-side scripting language used to create dynamic web pages.
    
    </p>
    
</div>

</div>


<section id="introduction">
  
  <h2>Introduction</h2>
  <div class="intro-div">
  <p class="paragraph">Web engineering is the application of engineering principles to the design, development, and maintenance of web-based systems and applications.<br> 
    This field encompasses various technologies and tools such as HTML, CSS, JavaScript, and server-side programming languages like PHP, Ruby on Rails, and Python.</p>
<img  class="intro-img" src="images/photo5.png">

</div>


</section>

<section id="skills">
<h2>Skills</h2>
<img src="images/photo6.png">

<div class="skills-ul-div">
<ul>
  <li>Expertise in HTML, CSS, and JavaScript
  

  </li>
  <li>Proficiency in a server-side programming language like PHP, Ruby on Rails, or Python</li>
  <li>Knowledge of databases and SQL</li>
  <li>Experience with version control systems such as Git</li>
</ul>
</div>

</section>


    <section id="career">
        
        <h2>Career Opportunities</h2>
       <p>Web engineering provides a range of career opportunities, from entry-level positions to senior-level roles. Some of the career options in this field include:</p>
      
       <ul>
          <li>Full Stack Developer<br>
            <img class="photo1"src="images/full.png">
            <p class="p1">A full-stack developer is a professional who<br> has the skills and expertise to work on<br> both the front-end and back-end portions of web development.</p>
          </li>
          <li>Front End Developer<br>
            <img  class="photo1" src="images/front.png">
            <p class="p1">A front-end developer is a professional who <br>specializes in building the user-facing portion<br> of a website or application.</p>
          </li>
          <li>Back End Developer<br>
            <img  class="photo1" src="images/back.png">
            <p class="p1">A back-end developer is a professional who <br>specializes in building the server-side portion<br> of a website or application.</p>
          </li>
         
        </ul>
      
      </section>





<script src="slider-script.js"></script>

</body>
</html>