<html>
<?php include"userheader.php"?>

<!-- <?php
include"dbconfig.php";
if(isset($_POST['chpassd']))
{
	$sql = "UPDATE admin SET password='$_POST[npass]' WHERE customer_id='$_SESSION[admin]' AND password='$_POST[opass]'";
	$qsql = mysqli_query($handle,$sql);
	echo mysqli_error($handle);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('admin password changed successfully..');</script>";
	}
	else
	{
		echo "<script>alert('Failed to Change password..');</script>";
	}
}
?> -->
<style>


body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color: aliceblue;
}

h2 {
  text-align: center;
  color: cornflowerblue;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
h3{
    text-align: center;
}
input {
text-align: center;
}
.btn {
  
  background-color: green;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  position: absolute;
  left: 45%;
}

.btn2 {
  
  background-color: green;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
 
  width: 30%;
  position: absolute;
  left: 45%;
}
input[type=text] {
  width: 20%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
table {
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  border: 1px solid;
  border-collapse: collapse;
  width: 100%;
  border: none;
  font-size: large;
  color: black;
}

th, td {
  padding: 8px;
  text-align: center;
  border: 1px solid;
  border-bottom: 1px solid #ddd;
  border: none;
}
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


    </style>
<body>
  <!-- <form action="userprofile.php" method="post"> -->
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
  <h2><u>PROFILE DETAILS</u></h2>
  <td width='80' style='text-align:center;'>
  <?php
  include"dbconfig.php";
  
  $result = mysqli_query($handle, "SELECT * FROM users WHERE uusername='{$_SESSION['user']}' ");
  echo '<table border="0" cellspacing="2" cellpadding="2">' ;
  while ($row = $result->fetch_assoc()) 
  {
      $field1name = $row["uusername"];
      $field2name = $row["email"];
      $field3name = $row["address"];
      
  }

 echo' <div class="container">
<table class="cent">
  <tr>
    <td><label for="username"><b>Username</b></label></td>
  <td><input type="text" value='.$field1name.' readonly="readonly"></br><td>
</tr>

<tr>
    <td><label for="email"><b>Email</b></label></td>
  <td><input type="text" value='.$field2name.' readonly="readonly"></br><td>
</tr>
<tr>
    <td><label for="address"><b>Address</b></label></td>
  <td><textarea readonly name="address">'.$field3name.'</textarea></br><td>
</tr>

  </table>';
  ?>

    <br>
    <a href="userchangepass.php">
    <button type="chngepaswd" name="chpassd" id="chpassd" class="btn">CHANGE PASSWORD</button><br><br>
    </a><br><br>
    <a href="usereditprofile.php">
    <button type="editprofile" name="edit" id="edit" class="btn2">EDIT PROFILE</button>
    </a>
</div>
<br>
<?php include"footer.php"?>
  </form>
</body>
</html>
