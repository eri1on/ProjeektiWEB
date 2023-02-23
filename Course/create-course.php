<?php


include '../DB/connect.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$price=$_POST['price'];
$description=$_POST['description'];


$sql="insert into `course`(name,price,description) values('$name',$price,'$description')" ;
$result=mysqli_query($con,$sql);

if($result){
    //echo'data inserted successfull.';
    header('location:course.php');
}else{
    die(mysqli_error($con));
}




}


?>





<!DOCTYPE html>
<html>
<head>
	<title>Course Form</title>
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
	<h1>Enter Course Details</h1>
	<form method="POST">
		<label for="name">Course Name:</label>
		<input type="text" id="courseName" name="name">

		<label for="price">Price:</label>
		<input type="text" id="price" name="price">

		<label for="description">Description (maximum 255 characters):</label>
        <textarea id="description" name="description" maxlength="255"></textarea>


		<input class="submit" type="submit" value="Submit" name='submit'>
	</form>
</body>
</html>
