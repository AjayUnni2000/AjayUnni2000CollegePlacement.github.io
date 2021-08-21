<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body bgcolor="black">
<form name="Placement/indexhome.php"  action="#" method="post">
  <table align="center" width="500px" height="300px" style="margin-top:100px">
  <tr>
   <td width="500" height="350" margin="10" bgcolor="white" style="color:orange; padding: 20px;">
    <center><img src="assets/etm.png" style="height:150px; width:150px;"/><h1 >Login Here!!!</h1>
    <hr color="#606060"></center>

    <input type="text" placeholder="Enter Username" name="uname" id="uname"><br><br>

    <input type="password" placeholder="Enter Password" name="psw" id="psw"><br><br>

    <input type="submit" name="submit" value="Sign in" onclick="validation()" />
    <input type="reset" name="submit" value="Cancel"/>

   </td>
  </tr>
  </table>
  </form>
  <?php
      if(isset($_POST['submit'])){
        include('database.php');

        $uname = $_POST['uname'];
        $psw = $_POST['psw'];
        
           $sql = "SELECT *  FROM login where uname='$uname' and psw ='$psw'";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
              session_start();
              $_SESSION['login'] = $row;
              header('location:Placement/indexhome.php');
            
          } else {
            echo "uname / password Error!";
          }
        
        mysqli_close($conn);
      }

      ?>
  <script>
    function validation()
	  {
	  var username=document.login.uname.value;
    var password=document.login.psw.value;
    	if (username == "") {
            alert("Please enter your Username.");
            document.getElementById('name').focus();
            return false;
            }
    	if (password =="") {
            alert("Please enter your password");
            document.getElementById('name').focus();
            return false;
            }
   	 }
  </script>
</body>
</html>