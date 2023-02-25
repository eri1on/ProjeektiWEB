<?php
    session_start();
    include '../DB/connect.php';
    
    if(!isset($_SESSION['username'])){
        header('location:login.php');
    } else {
        $username = $_SESSION['username'];
    }



    $query = "SELECT role FROM user WHERE username='$username'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $role = $row['role'];
    
   
    if (!$role == 1) {
       header('location:../home.php');
    } 




?>









<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="dashboard-style.css">
    
    </head>

    <body>
    <header>
      <h1>Dashboard</h1>
      <button> <a href ="../Course/course.php">Course   </a></button>
      <button> <a href="dashboard.php" > Contact </a></button>
      <button> <a href="../home.php">Home</a></button>
    </header>
    <main>
      <section class="contact-section">
    <table>
                <tr>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th class="message">Message</th>
                    <th class="contact-id">Contact_Id</th>
                </tr>
                
                <?php
                    $sql = "SELECT * FROM `contact`";
                    $result = mysqli_query($con, $sql);
                    
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $contact_id = $row['contact_id'];
                            $name = $row['name'];
                            $lastname = $row['lastname'];
                            $email = $row['email'];
                            $telephone=$row['telephone'];
                            $message=$row['message'];
                            '<tr>';
                            echo '<td scope="row" class="contact-id">'.$contact_id.'</td>';
                            echo '<td>'.$name.'</td>';
                            echo '<td>'.$lastname.'</td>';
                            echo '<td>'.$email.'</td>';
                            echo '<td>'.$telephone.'<td>';
                            echo '<td >'.$message.'<td>';
                        
                            
                            // display the update and delete buttons if the user is an admin
                            if ($role == 1) {
                               
                                echo '<td>  <button class="btn-delete"> <a href="delete-contact.php?deleteid='.$contact_id.'">Delete</a> </button>  </td>';
                            }
                            
                            echo '</tr>';
                        }
                    }
                ?>
            </table>  

                  </section>





    </main>
        
        <script src="" async defer></script>
    </body>
</html>