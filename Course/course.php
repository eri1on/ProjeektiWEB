<?php
    session_start();
    include '../DB/connect.php';
    
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    } else {
        $username = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CoursePage</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="course-style.css">
</head>
<body>
    <header>
        <h1>Our Courses</h1>
    </header>
    
    <main>
        <section class="marketing">
            <p class="p">Learn from the best! Our courses are designed to help you master new skills quickly and effectively. With our experienced instructors and hands-on projects, you'll gain practical experience and be ready to apply your new skills in the real world. Choose from a variety of courses below and start learning today!</p>
        </section>
        
        <?php
            // check if the user is an admin
            $query = "SELECT role FROM user WHERE username='$username'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);
            $role = $row['role'];
            
            // display the add course button if the user is an admin
            if ($role == 1) {
                echo '<button class="btn-create"> <a href="create-course.php">ADD COURSE </a></button>';
            }
        ?>
        
        <section class="courses">
            <table>
                <tr>
                    <th>Course Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th class="course-id">Id</th>
                </tr>
                
                <?php
                    $sql = "SELECT * FROM `course`";
                    $result = mysqli_query($con, $sql);
                    
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['name'];
                            $price = $row['price'];
                            $description = $row['description'];

                            echo '<tr>';
                            echo '<td>'.$name.'</td>';
                            echo '<td>'.$price.'</td>';
                            echo '<td>'.$description.'</td>';
                            echo '<td scope="row" class="course-id">'.$id.'</td>';
                            
                            // display the update and delete buttons if the user is an admin
                            if ($role == 1) {
                                echo '<td>  <button class="btn-update"> <a href="update-course.php?updateid='.$id.'">Update</a> </button>  </td>';
                                echo '<td>  <button class="btn-delete"> <a href="delete-course.php?deleteid='.$id.'">Delete</a> </button>  </td>';
                            }
                            
                            echo '</tr>';
                        }
                    }
                ?>
            </table>
        </section>
    </main>
</body>
</html>
