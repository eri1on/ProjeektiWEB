<?php




session_start();
include '../DB/connect.php';
if(!isset($_SESSION['username'])){
  header('location:../login.php');
 
 }else{
     $username = $_SESSION['username'];
 }
 
 // check if the user is an admin
 $query = "SELECT role FROM user WHERE username='$username'";
 $result = mysqli_query($con, $query);
 $row = mysqli_fetch_assoc($result);
 $role = $row['role'];
 

 if (!$role == 1) {
     header('location:../home.php');
 }










if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];


$sql="delete from `course` where id=$id";

$result=mysqli_query($con,$sql);
if($result){
    //echo "Deleted successfull.";
    header('location:course.php');
}else {
    die(mysqli_error($con));
}


}


?>
