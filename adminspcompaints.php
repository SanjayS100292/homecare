<html>
<?php include"adminheader.php"?>
<style>

h2 {
  text-align: center;
  color: brown;
}

h3{
    text-align: center;
}
.tab1 {
            tab-size: 2;
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

.bt {

  text-decoration:none;
  background-color: red;
  color: white;
  padding: 6px 5px;
  
  border: none;
}


table {
  
  border: 1px solid;
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: center;
  border: 1px solid;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: coral;}
</style>
</head>
<body>

  <form action="adminspcompaints.php" method="post">
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
<h2>COMPLAINT DETAILS</h2>
<br>
<?php 

include"dbconfig.php";


$result = mysqli_query($handle, "SELECT * FROM complaintprovider");



echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
      <td> <font face="Arial"><h4>Complaint ID </h4></font> </td> 
          <td> <font face="Arial"><h4>Provider ID </h4></font> </td> 
          <td> <font face="Arial"><h4>Provider Name </h4></font> </td> 
          <td> <font face="Arial"><h4>Booking ID</h4></font> </td> 
          <td> <font face="Arial"><h4>Complaint details </h4></font> </td> 
          <td> <font face="Arial"><h4>Status</h4></font> </td> 
      </tr>';


  
  while ($row = $result->fetch_assoc()) 
  {
      $field = $row["cid"];
      $field0name = $row["workid"];
      $field1name = $row["wname"];
      $field2name =  $row["bookid"];
      $field3name = $row["complaint"];
      $field4name = $row["status"];

      echo '<tr> 
                <td>'.$field.'</td> 
                <td>'.$field0name.'</td> 
                <td>'.$field1name.'</td> 
                <td>'.$field2name.'</td>
                <td>'.$field3name.'</td> 
                <td>'.$field4name.'</td> ';
                echo "<td><a class='bt' href='adminspcompaints.php?cmpt=".$row["cid"]."'>RECTIFIED</a></td>";
                echo "</tr>";
}
if(isset($_GET["cmpt"]))
{
  $username = $_GET["cmpt"];
  if($handle->query("UPDATE complaintprovider SET status='Completed' WHERE cid='$field'"))
  {
    print"<script>alert('Successfully Updated');
    window.location.href= 'adminspcompaints.php'
    </script>";
  } else 
  { 
      echo "Failed.";
  }    
}  
echo "</table>";

?>
</form>
