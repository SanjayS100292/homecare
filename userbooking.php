<html>
<?php include"userheader.php";
include "dbconfig.php";
$wid=$_SESSION['wid'];
$city=$_SESSION['city'];
$wname=$_SESSION['wname'];
?>

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
  background-color:aliceblue;
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
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
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

input[type=text], input[type=password],input[type=date]{
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
  <form action="userbooking.php" method="post">
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
</br>
<h1 align= 'center'>BOOKING</h1>
<?php
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
    <td><label for="wid"><b>Worker id</b></label></td>
  <td><input type="text" value='.$wid.' readonly="readonly"></br><td>
</tr>
<tr>
<tr>
    <td><label for="wname"><b>Worker group Name</b></label></td>
  <td><input type="text" value='.$wname.' readonly="readonly"></br><td>
</tr>
<tr>
    <td><label for="city"><b>CITY</b></label></td>
  <td><input type="text" value='.$city.' readonly="readonly"></br><td>
</tr>
<tr>
    <td><label for="address"><b>Address</b></label></td>
  <td><textarea readonly name="address" >'.$field3name.'</textarea></br><td>
</tr>
<tr>
      <td><label for="date"><b>Date</b></label></td>
    <td><input type="date" name="date" id="date" required></br><td>
</tr>
<tr>
      <td><label for="desc"><b>Work Description</b></label></td>
    <td><textarea name="desc" id="desc" placeholder="Work description" required></textarea></br><td>
</tr>
  </table>';
  ?>
   <br>
    <button type="submit" name="submit" id="submit" class="btn">SUBMIT</button><br><br>
</div></br></br>

      <?php include"footer.php";?>
  
  </div>               
  <?php
 //if(isset($_POST['submit']))
 if($_SERVER["REQUEST_METHOD"] == "POST")
 {

  include"dbconfig.php";

$descipt=$_POST['desc'];
$date=$_POST['date'];
echo "mesaage";
$query="INSERT INTO booking(users,wid,wname,addr,city,bookdate,regisdate,descipt,status) VALUES('$field1name','$wid','$wname','$field3name','$city','$date',current_timestamp(),'$descipt','pending')";
//"INSERT INTO `users` ( `username`, `password`, `date`) VALUES ('$username', '$emailid','$password')
$res=mysqli_query($handle,$query);

if($res)
{
	
	print"<script>alert('Booking completed successfully');
  window.location.href= 'userhome.php'
	</script>";
}
 
 else
 {
  print"<script>alert('something wet wrong');
	</script>";
 }
}
  ?>
 
  </form>