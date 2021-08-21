<?php 
      if(isset($_POST['submit'])){
        include('../database.php');

        $name = $_POST['name'];
        $logo = $_POST['logo'];
        $details = $_POST['details'];

        $sql = "INSERT INTO `company`(`name`, `logo`, `details`) VALUES ('$name','$logo','$details')";

        if (mysqli_query($conn, $sql)) {
          header('location:company.php');
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
      }

      ?>