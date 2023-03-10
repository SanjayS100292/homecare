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
  <form action="workspaccepted.php" method="post">
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
  <h2><u>WORk DETAILS </u></h2>
  <td width='80' style='text-align:center;'>
  <?php
  include"dbconfig.php";
  
  $result = mysqli_query($handle, "SELECT * FROM booking WHERE wname='{$_SESSION['worker']}' and status='Accepted' ");
  echo '<table border="0" cellspacing="2" cellpadding="2">' ;
  while ($row = $result->fetch_assoc()) 
  {   
      $field0name = $row["bookid"];
      $field1name = $row["users"];
      $field2name = $row["addr"];
      $field3name = $row["bookdate"];
      $field4name = $row["descipt"];
      $field5name = $row["status"];  
  }

 echo' <div class="container">
<table class="cent">
<tr>
<td><label for="wid"><b>Booking ID</b></label></td>
<td><input type="text" value='.$field0name.' readonly="readonly"></br><td>
</tr>
  <tr>
    <td><label for="username"><b>Username</b></label></td>
  <td><input type="text" value='.$field1name.' readonly="readonly"></br><td>
</tr>

<tr>
    <td><label for="email"><b>Address</b></label></td>
    <td><textarea readonly name="address">'.$field2name.'</textarea></br><td>
</tr>

<tr>
<td><label for="nowork"><b>Booking Date</b></label></td>
<td><input type="text" value='.$field3name.' readonly="readonly"></br><td>
</tr>

<tr>
<td><label for="city"><b>Problem Description</b></label></td>
<td><input type="text" value='.$field4name.' readonly="readonly"></br><td>
</tr>

<tr>
<td><label for="categ"><b>Status</b></label></td>
<td><input type="text" value='.$field5name.' readonly="readonly"></br><td>
</tr>
<tr>
<td><label class="noh"><b>Working Hours</b></label></td>
<td><input type="text" placeholder="Enter Working Hours" name="noh" id="noh" required></br><td>
</tr>
<tr>
<td><label class="noh"><b>Workers</b></label></td>
<td><input type="text" placeholder="Enter No of workers" name="now" id="now" required></br><td>
</tr>
  </table>';
  ?>

    <br>
    <button type="editprofile" name="editprof" id="editprof" class="btn2">SUBMIT</button>
</div>
<br>
<?php include"footer.php"?>

<?php
include"dbconfig.php";
$hours = $_POST['noh'];
$workers = $_POST['now'];
$amount = $hours * $workers * 150;

if(isset($_POST['editprof']))
{
	if($handle->query("UPDATE booking SET status='Completed',amount='$amount' WHERE bookid='$field0name'"))
  {
    print"<script>alert('Successfully completed. Amount is Rs.$amount');
    window.location.href= 'workcompleted.php'
    </script>";
  } else 
  { 
      echo "Failed.";
  }    
}  
?> 
<?php include"footer.php"?>
  </form>
</body>
</html>


