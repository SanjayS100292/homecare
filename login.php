

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
      Registrartion
    </title>
    <style>  
* {box-sizing: border-box}


.container {
  padding: 16px;
  font-family: Arial, Helvetica, sans-serif;
}
.cent {
  margin-left: auto;
  margin-right: auto;
  padding: 16px 16px;
  width: 50%;
}

input[type=text], input[type=password] {
  width: 75%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.name{
font-weight: bold;
text-align: left;
float: left;
}

.registerbtn {
  
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
  position: absolute;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.registerbtn:hover {
  margin-left: auto;
  margin-right: auto;
  opacity:1;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>  
  </head>
  <body>
  
 
    
      <?php include"header.php"?>
  
      <form action="login.php" method="post">
  <div class="container">
    <h1 align= 'center'>LOGIN</h1>
    <p align= 'center'><a href="index.php">Home</a></p>
    <hr>
<table class="cent">
   
<tr>
      <td><label class="name" for="username"><b>Username</b></label></td>
    <td><input type="text" placeholder="Enter Username" name="uname" id="uname" required></br><td>
</tr>
<tr>
    <td><label for="psw"><b>Password</b></label></td>
    <td><input type="password" placeholder="Enter Password" name="psw" id="psw" required></br></td>
</tr>
    </table>
    <hr>

    <p class="cent">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" name="log" id="log" class="registerbtn">LOGIN</button>
  </div>



  <?php
  session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
  include "dbconfig.php";
  date_default_timezone_set("Asia/Kolkata");
  $date = date("y/m/d h:i:a");
  $usern = $_POST['uname'];
  $passw = $_POST['psw'];
  $_SESSION['admin'] = '';
  $_SESSION['user'] = '';

  
   $sql = " SELECT * FROM admin WHERE ausername = '$usern' AND apassword = '$passw'";
   $result = mysqli_query($handle, $sql);
   if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
           if($row['username'] = $usern && $row['password'] = $passw){
               $_SESSION['admin'] = $usern;
               $_SESSION['status']="Active";
             header("location:adminhome.php?log=".$_SESSION['admin']);
           }
     }
  }
      $sql1 = " SELECT * FROM users WHERE uusername = '$usern' AND upassword = '$passw' AND status='Accepted'";
      $result1 = mysqli_query($handle, $sql1);
      if($result1->num_rows > 0){
          while($row = $result1->fetch_assoc()){
               if($row['username'] = $usern && $row['password'] = $passw){
                      $_SESSION['user'] = $usern;
                      $_SESSION['status']="Active";
                      header("location:userhome.php?log=".$_SESSION['user']);
               }else{
                      header("location:index.php");
               }
          }
      }
      $sql2 = " SELECT * FROM workgroup WHERE wusername = '$usern' AND wpassword = '$passw'";
      $result2 = mysqli_query($handle, $sql2);
      if($result2->num_rows > 0){
          while($row = $result2->fetch_assoc()){
               if($row['username'] = $usern && $row['password'] = $passw){
                      $_SESSION['worker'] = $usern;
                      $_SESSION['status']="Active";
                      header("location:workerhome.php?log=".$_SESSION['worker']);
               }else{
                      header("location:index.php");
               }
          }
      }
else{
  print"<script>alert('Invalid username or password ');
	</script>";
}
  
  }

  // if(!isset($_SESSION['logged_in'])) {
  //   header("Location: loginPage.php");  
  // }
  ?>


  <div class="container signin">
    <p>Already have an account? <a href="registration.php">Click to register</a>.</p>
  </div>
</form>
<?php include"footer.php"?>
  </body>
</html>