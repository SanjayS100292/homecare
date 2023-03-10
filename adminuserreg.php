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
</style>
<form action="category.php" method="post">
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
 
    <br>
    <br>
    <h2>USER DETAILS</h2>


    <?php 

include"dbconfig.php";


$result = mysqli_query($handle, "SELECT * FROM users where status='pending'");

echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial"><h4>Username </h4></font> </td> 
          <td> <font face="Arial"><h4>Email ID </h4></font> </td> 
          <td> <font face="Arial"><h4>Address</h4></font> </td> 
          <td> <font face="Arial"><h4>Registered Date</h4></font> </td> 
          <td> <font face="Arial"><h4>Status</h4></font> </td> 
      </tr>';


  
  while ($row = $result->fetch_assoc()) 
  {
      $field1name = $row["uusername"];
      $field2name = $row["email"];
      $field3name = $row["address"];
      $field4name = $row["date"];
      $field5name = $row["status"];
     

      echo '<tr> 
                <td>'.$field1name.'</td> 
                <td>'.$field2name.'</td> 
                <td>'.$field3name.'</td>
                <td>'.$field4name.'</td>
                <td>'.$field5name.'</td>';

                echo "<td><a class='bt' href='adminuserreg.php?acpt=".$row["uusername"]."'>Accept</a></td>";
                echo "</tr>";
}
  
echo "</table>";

if(isset($_GET["acpt"]))
{
  $username = $_GET["acpt"];
  if($handle->query("UPDATE users SET status='Accepted' WHERE uusername='$field1name'"))
  {
    print"<script>alert('Successfully Updated');
    window.location.href= 'adminuserreg.php'
    </script>";
  } else 
  { 
      echo "Failed to approve category.";
  }    
}  
?>


</div>

<?php include"footer.php"?>