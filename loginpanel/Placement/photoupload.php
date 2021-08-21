<?php 
      if(isset($_POST['submit'])){
        
        include('../database.php');

        $name = $_POST['name'];
        $placed = $_POST['placed'];
	      $photo = $_POST['photo'];

        $sql = "INSERT INTO `photos`(`name`, `placed`, `photo`) VALUES ('$name','$placed','$photo')";

	if (mysqli_query($conn, $sql)) {
          header('location:photo.php');
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
      }

      ?>