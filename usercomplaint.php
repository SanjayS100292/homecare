<html>
<?php include"userheader.php"?>
<style>
body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:black;
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
  <form action="usercomplaint.php" method="post">
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
  <h2><u>PROFILE DETAILS</u></h2>
  <td width='80' style='text-align:center;'>
  <?php
  include"dbconfig.php";
  
  $result = mysqli_query($handle, "SELECT * FROM users WHERE uusername='{$_SESSION['user']}' ");
  echo '<table border="0" cellspacing="2" cellpadding="2">' ;
  while ($row = $result->fetch_assoc()) 
  {   
      $field0name = $row["uusername"];  
  }
//   $result2 = mysqli_query($handle, "SELECT * FROM booking WHERE wname='{$_SESSION['worker']}' ");
//   echo '<table border="0" cellspacing="2" cellpadding="2">' ;
//   while ($row = $result->fetch_assoc()) 
//   {   
//     //   $field0name = $row["wid"];
//     //   $field1name = $row["wusername"];
//     //   $field2name = $row["emailid"];
//     //   $field3name = $row["noworkers"];
//     //   $field4name = $row["city"];
//     //   $field5name = $row["categ"];
//     //   $field6name = $row["yoe"];
          
//   }
 echo' <div class="container">
<table class="cent">
  <tr>
    <td><label for="username"><b>Username</b></label></td>
  <td><input type="text" value='.$field0name.' readonly="readonly"></br><td>
</tr>
<tr>
      <td><label for="bookingid"><b>Booking ID</b></label></td>
    <td><input type="text" placeholder="Booking ID" name="bookid" id="bookid" required></br><td>
</tr>
<tr>
      <td><label for="complaint"><b>Complaint</b></label></td>
    <td><textarea name="complaint" id="complaint" placeholder="Complaint" required></textarea></br><td>
</tr>
  </table>';
  ?>
    <br><br>
    <button type="complaintsubmit" name="submit" id="submit" class="btn2">SUBMIT</button>
</div>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
 {

  include"dbconfig.php";

$bookingid=$_POST['bookid'];
$complaint=$_POST['complaint'];

$query="INSERT INTO complaintuser(uname,bookid,complaint,status) VALUES('$field0name','$bookingid','$complaint','Pending')";
//"INSERT INTO `users` ( `username`, `password`, `date`) VALUES ('$username', '$emailid','$password')
$res=mysqli_query($handle,$query);

if($res)
{
	
	print"<script>alert('Successfully Submitted');
  window.location.href= 'usercomplaintstatus.php'
	</script>";
}
 
 else
 {
  print"<script>alert('something wet wrong');
	</script>";
 }
}
  ?>
<br>
<?php include"footer.php"?>
  </form>
</body>
</html>