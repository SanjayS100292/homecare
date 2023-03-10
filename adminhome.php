<html>
<?php include"adminheader.php"?>

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
input[type=text] {
  width: 20%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
    </style>
<body>
  <!-- <form action="adminhome.php" method="post"> -->
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
  <h2>WELCOME</h2>
  <h3><u>PROFILE DETAILS</u></h3>
  <td width='80' style='text-align:center;'>
  <?php
  echo "<h3>USERNAME:<input type='text' value=". $_SESSION['admin'] ." readonly='readonly'></h3>";
    ?>
    </td>
    <br>
    <a href="adminchangepass.php">
    <button type="chngepaswd" name="chpassd" id="chpassd" class="btn">CHANGE PASSWORD</button></a>
</div><br><br>
<?php include"footer.php"?>
  </form>
</body>
</html>

