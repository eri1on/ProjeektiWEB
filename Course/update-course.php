<?php
session_start();
include '../DB/connect.php';


if(!isset($_SESSION['username'])){
  header('location:../login.php');
   exit;
 }
     $username = $_SESSION['username'];


    
 
 // check if the user is an admin
 $query = "SELECT role FROM user WHERE username='$username'";
 $result = mysqli_query($con, $query);
 $row = mysqli_fetch_assoc($result);
 $role = $row['role'];
 
 // display the add course button if the user is an admin
 if (!$role == 1) {
     header('location:../home.php');
     exit;
 }

/*

 if(!isset($_SESSION['updateid'])){
     echo'No Course  id Specified';
     exit;
 }

*/

$id=$_GET['updateid'];

$sql="select * from `course` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);



$name=$row['name'];
$price=$row['price'];
$description=$row['description'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    if(empty($name) || empty($price) || empty($description)){
        echo 'Please fill all the fields.';
      } else if(!is_numeric($price)){
        echo 'Price should be a number.';
      }else{
      
    $sql="update `course` set id=$id,name='$name',price='$price',description='$description' where id=$id";

    $result=mysqli_query($con,$sql);

    if($result){
        header('location:course.php');
    }else{
        die(mysqli_error($con));
    }
}
}

 

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Update Course</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="course-style.css">

        <style>
	body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  
}
h1{
    color:#4D455D;
     text-align:center;
}

form {
  max-width: 600px;
  margin:  auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
}

label {
  font-weight: bold;
  
}


#description,#price,#courseName {
  padding: 10px;
  font-size: 18px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 20px;
  width: 95%;
}

.submit {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  font-size: 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.submit:hover {
  background-color: #3e8e41;
}
</style>
    </head>
    <body>
    <h1>Edit Course Details</h1>
	<form method="POST">
		<label for="name">Course Name:</label>
		<input type="text" id="courseName" name="name" value=<?php echo $name;  ?>>

		<label for="price">Price:</label>
		<input type="text" id="price" name="price" value=<?php echo $price;  ?>>

		<label for="description">Description (maximum 100 characters):</label>
        <textarea id="description" name="description" maxlength="100"><?php echo $description; ?></textarea>



		<input class="submit" type="submit" value="Edit" name='submit'>
	</form>
        
       
    </body>
</html>