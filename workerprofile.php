<html>
<?php include"workerheader.php"?>

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
  background-color:#1F2739;
}

h2 {
  text-align: center;
  color: greenyellow;
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
  
  border: 1px solid;
  border-collapse: collapse;
  width: 100%;
  border: none;
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
  <!-- <form action="workprofile.php" method="post"> -->
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
  <h2><u>PROFILE DETAILS</u></h2>
  <td width='80' style='text-align:center;'>
  <?php
  include"dbconfig.php";
  
  $result = mysqli_query($handle, "SELECT * FROM workgroup WHERE wusername='{$_SESSION['worker']}' ");
  echo '<table border="0" cellspacing="2" cellpadding="2">' ;
  while ($row = $result->fetch_assoc()) 
  {   
      $field0name = $row["wid"];
      $field1name = $row["wusername"];
      $field2name = $row["emailid"];
      $field3name = $row["noworkers"];
      $field4name = $row["city"];
      $field5name = $row["categ"];
      $field6name = $row["yoe"];
      
      
  }

 echo' <div class="container">
<table class="cent">
<tr>
<td><label for="wid"><b>Worker ID</b></label></td>
<td><input type="text" value='.$field0name.' readonly="readonly"></br><td>
</tr>
  <tr>
    <td><label for="username"><b>Username</b></label></td>
  <td><input type="text" value='.$field1name.' readonly="readonly"></br><td>
</tr>

<tr>
    <td><label for="email"><b>Email</b></label></td>
  <td><input type="text" value='.$field2name.' readonly="readonly"></br><td>
</tr>

<tr>
<td><label for="nowork"><b>No. of workers</b></label></td>
<td><input type="text" value='.$field3name.' readonly="readonly"></br><td>
</tr>

<tr>
<td><label for="city"><b>City</b></label></td>
<td><input type="text" value='.$field4name.' readonly="readonly"></br><td>
</tr>

<tr>
<td><label for="categ"><b>Category</b></label></td>
<td><input type="text" value='.$field5name.' readonly="readonly"></br><td>
</tr>

<tr>
<td><label for="yoe"><b>Years Of experience</b></label></td>
<td><input type="text" value='.$field6name.' readonly="readonly"></br><td>
</tr>
  </table>';
  ?>

    <br>
    <a href="workchgpswd.php">
    <button type="chngepaswd" name="chpassd" id="chpassd" class="btn">CHANGE PASSWORD</button></a><br><br>
    <br><br>
    <a href="workeditprof.php">
    <button type="chngepaswd" name="edit" id="edit" class="btn2">EDIT PROFILE</button>
</div>
<br>
<?php include"footer.php"?>
  </form>
</body>
</html>

