     <?php 
      if(isset($_POST['submit'])){
        include('database.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subjects = $_POST['subjects'];
        $messages  = $_POST['messages'];

        $sql = "INSERT INTO `contact` (`name`, `email`, `subjects`, `messages`) VALUES ('$name', '$email', '$subjects', '$messages')";

        if (mysqli_query($conn, $sql)) {
          header('location:index.php');
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
      }

      ?>