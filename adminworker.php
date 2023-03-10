
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
  width: 300px;
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

.form-control {
  height: 55px; 
  width: 300px;}
  .form-control:active, .form-control:focus {
    border-color: #28a745; }
  .form-control:hover, .form-control:active, .form-control:focus {
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }

</style>

<?php include"adminheader.php"?>
  
      <form action="adminworker.php" method="post" enctype="multipart/form-data">
      <div style="margin-left:16%;padding:1px 16px;height:1000px;">
  <div class="container">
    <h1 align= 'center'>Register Service Provider</h1>
    <hr>
<table class="cent">
    <tr>
      <td><label class="name" for="username"><b>Username</b></label></td>
    <td><input type="text" placeholder="Enter Username" name="uname" id="uname" required></br><td>
</tr>
<tr>
<tr>
      <td><label for="email"><b>Email</b></label></td>
    <td><input type="text" placeholder="Enter Email" name="email" id="email" required></br><td>
</tr>
<tr>
    <td><label for="psw"><b>Password</b></label></td>
    <td><input type="password" placeholder="Enter Password" name="psw" id="psw" required></br></td>
</tr>

<tr>
    <td><label for="now"><b>Number of workers</b></label></td>
    <td><select class="form-control" name="now"> 
<option>Number of workers                
</option>
<option value="1">1                
</option>                
<option value="2">2                
</option>                
<option value="3">3                
</option>                
<option value="4">4                
</option>                
<option value="5">5                
</option>                
<option value="6">6                
</option>                
<option value="7">7                
</option>                
<option value="8">8                
</option>                
<option value="9">9                
</option>                
<option value="10">10                
</option>                
<option value="11">11               
</option>                
<option value="12">12              
</option>                
</td>
</tr>


<tr>
<td><label for="city"><b>City</b></label></td>
<td>
<select class="form-control" name="city">
<option>City</option>
<?php
include"dbconfig.php";
  $query="SELECT city from cities";
	$result=mysqli_query($handle,$query);
	
while($r=mysqli_fetch_array($result))
{
	
?>
<option value="<?=$r[0]?>"><?=$r[0]?></option>
<?php

}
?>
</select>  
</td>
</tr>


<tr>
<td><label for="categ"><b>Category</b></label></td>
<td>
<select class="form-control" name="categ">
<option>CATEGORY</option>
<?php
include"dbconfig.php";
  $query="SELECT categories from category";
	$result=mysqli_query($handle,$query);
	
while($r=mysqli_fetch_array($result))
{
	
?>
<option value="<?=$r[0]?>"><?=$r[0]?></option>
<?php

}
?>
</select>  
</td>
</tr>
<tr>
    <td><label for="yoe"><b>Years Of Experiance</b></label></td>
    <td><select class="form-control" name="yoe"> 
<option>Experience In Year                
</option>
<option value="1">1                
</option>                
<option value="2">2                
</option>                
<option value="3">3                
</option>                
<option value="4">4                
</option>                
<option value="5">5                
</option>                
<option value="6">6                
</option>                
<option value="7">7                
</option>                
<option value="8">8                
</option>                
<option value="9">9                
</option>                
<option value="10">10                
</option>                
<option value="11">11               
</option>                
<option value="12">12              
</option>                
</td>
</tr>
<tr>
<td><label for="id"><b>ID PROOF</b></label></td>
<td>
<select class="form-control" name="id_proof"> 
<option>Any ID Proof               
</option>
<option value="Domestic Workers Certificate">Domestic Workers Certificate</option>                
<option value="Labours Welfare Certificate">Labours Welfare Certificate</option>                
<option value="Work Group Permit">Work Group Permit</option>                
<option value="Contractors Licence">Contractors Licence</option>                 
</select>     
</td>
</tr>
<tr>
<td><label for="email"><b>Photo of selected Id Proof</b></label></td>
<td><input type="file" name="id_picture"></td>

</tr>
    </table>
    <hr>
    <button type="submit" name="register" id="register" class="btn">Register</button>
  </div>

 
  <?php
 
 //if($_SERVER["REQUEST_METHOD"] == "POST")
 if(isset($_POST['register']))
 {

    $msg = "";
  include"dbconfig.php";

  $filename = $_FILES["id_picture"]["name"];
  $tempname = $_FILES["id_picture"]["tmp_name"];  
      $folder = "image/".$filename;
  // if(!empty($_FILES["id_picture"]["name"])) { 
  //   // Get file info 
  //   $fileName = basename($_FILES["id_picture"]["name"]); 
  //   $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
     
  //   // Allow certain file formats 
  //   $allowTypes = array('jpg','png','jpeg','gif'); 
  //   if(in_array($fileType, $allowTypes)){ 
  //       $image = $_FILES['id_picture']['tmp_name']; 
  //       $imgContent = addslashes(file_get_contents($image)); 

  $username=$_POST['uname'];
  $password=$_POST['psw'];
  $emailid=$_POST['email'];
  $now=$_POST['now'];
  $city=$_POST['city'];
  $categ=$_POST['categ'];
  $yoe=$_POST['yoe'];
  $idproof=$_POST['id_proof'];
  // $picture=$_POST['id_picture'];
  

$query="INSERT INTO workgroup(wusername,wpassword,emailid,noworkers,city,categ,yoe,idproof,picture) VALUES('$username','$password','$emailid','$now','$city','$categ','$yoe','$idproof','$filename')";
$res=mysqli_query($handle,$query);

if (move_uploaded_file($tempname, $folder)) {

  $msg = "Image uploaded successfully";

}else{

  $msg = "Failed to upload image";

}
if($res)
{
	
	print"<script>alert('Successfully Inserted');
  window.location.href= 'adminworker.php'
	</script>";
}
 
 else
 {
  print"<script>alert('Something wet wrong');
	</script>";
 }
}
  ?>
<br>
<br>


