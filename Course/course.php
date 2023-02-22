<?php
include '../DB/connect.php';

?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
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
			<p>Learn from the best! Our courses are designed to help you master new skills quickly and effectively. With our experienced instructors and hands-on projects, you'll gain practical experience and be ready to apply your new skills in the real world. Choose from a variety of courses below and start learning today!</p>
		</section>
		
		<section class="courses">
			<table>
				<tr>
                 
					<th>Course Name</th>
					<th>Price</th>
					<th>Description</th>
                    <th class="course-id">Id</th>
				</tr>
				<?php
                $sql="select * from `course`";
                $result=mysqli_query($con,$sql);
                if($result){
              
                     while($row=mysqli_fetch_assoc($result)){
                          $id=$row['id'];
                          $name=$row['name'];
                          $price=$row['price'];
                          $description=$row['description'];
                          

                          echo'
                          <tr>
                         
                          <td>'.$name.'</td>
                          <td>'.$price.'</td>
                          <td>'.$description.'</td>
                          <th scope="row">'.$id.'</th>
                      
                          
                          
                          
                          
                          </tr>
                          
                          
                          ';
                     }



                }



                 ?>
			</table>
		</section>
	</main>
        <script src="" async defer></script>
    </body>
</html>