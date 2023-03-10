

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
  padding: 16px 20px;
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
textarea {
  width: 75%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #ddd;
  font-size: 16px;

  outline: none;
}


input[type=text]:focus, input[type=password]:focus{
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
  
      <form action="registration.php" method="post">
  <div class="container">
    <h1 align= 'center'>Register</h1>
    <p align= 'center'>Please fill in this form to create an account.</p>
    <hr>
<table class="cent">
    <tr>
      <td><label class="name" for="username"><b>Username</b></label></td>
    <td><input type="text" placeholder="Enter Username" name="uname" id="uname" required></br><td>
</tr>
<tr>
<tr>
      <td><label for="email"><b>Email</b></label></td>
    <td><input type="text" placeholder="Enter Email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></br><td>
</tr>
<tr>
      <td><label for="address"><b>Address</b></label></td>
    <td><textarea name="address" id="address" placeholder="Address" required></textarea></br><td>
</tr>
<tr>
    <td><label for="psw"><b>Password</b></label></td>
    <td><input type="password" placeholder="Enter Password" name="psw" id="psw" pattern=".{8,}" title="Eight or more characters" required></br></td>
</tr>
<tr>
    <td><label for="psw-repeat"><b>Repeat Password</b></label></td>
    <td><input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required></td>
</tr>
    </table>
    <hr>

    <p class="cent">By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" name="register" id="register" class="registerbtn">Register</button>
  </div>

 <?php
 
 //if(isset($_POST['register']))
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {

  include"dbconfig.php";

$username=$_POST['uname'];
$password=$_POST['psw'];
$emailid=$_POST['email'];
$address=$_POST['address'];

$query="INSERT INTO users(uusername, email,address,upassword,date,status) VALUES('$username','$emailid','$address','$password',current_timestamp(),'Pending')";
//"INSERT INTO `users` ( `username`, `password`, `date`) VALUES ('$username', '$emailid','$password')
$res=mysqli_query($handle,$query);

if($res)
{
	
	print"<script>alert('Successfully Submitted');
  window.location.href= 'login.php'
	</script>";
}
 
 else
 {
  print"<script>alert('something wet wrong');
	</script>";
 }
}
  ?>

  <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
</form>
<?php include"footer.php"?>
  </body>
</html>


<script>  
function matchPassword() {  
  var pw1 = document.getElementById("npsw");  
  var pw2 = document.getElementById("psw");  
  if(pw1.value != pw2.value)  
  {
    alert("Passwords did not match");  
  }  
  else
  {
    <?php
    include"dbconfig.php";
    if (isset($_POST['chpassd'])) {
        $sql = "UPDATE users SET upassword='$_POST[npsw]' WHERE uusername='$_SESSION[user]'";
        if ($handle->query($sql) == 1){
            ?>
            alert("User password changed successfully..");
            
            <?php
          
        }
    }
?> 
  }  
    
}  
</script> 