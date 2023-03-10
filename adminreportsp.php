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
    <h2>SERVICE PROVIDER DETAILS</h2>


    <?php 

include"dbconfig.php";


$result = mysqli_query($handle, "SELECT * FROM workgroup");



echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial"><h4>Username ID </h4></font> </td> 
          <td> <font face="Arial"><h4>Username </h4></font> </td> 
          <td> <font face="Arial"><h4>Email ID </h4></font> </td> 
          <td> <font face="Arial"><h4>No. of employees</h4></font> </td> 
          <td> <font face="Arial"><h4>City</h4></font> </td> 
          <td> <font face="Arial"><h4>Category</h4></font> </td> 
          <td> <font face="Arial"><h4>Year of Experience</h4></font> </td> 
          <td> <font face="Arial"><h4>ID proof</h4></font> </td> 
          <td> <font face="Arial"><h4>ID picture</h4></font> </td>
      </tr>';


  
  while ($row = $result->fetch_assoc()) 
  {
      $field0name = $row["wid"];
      $field1name = $row["wusername"];
      $field2name = $row["emailid"];
      $field3name = $row["noworkers"];
      $field4name = $row["city"];
      $field5name = $row["categ"];
      $field6name = $row["yoe"];
      $field7name = $row["idproof"];
      $field8name = $row["picture"];

      echo '<tr> 
                <td>'.$field0name.'</td> 
                <td>'.$field1name.'</td> 
                <td>'.$field2name.'</td> 
                <td>'.$field3name.'</td> 
                <td>'.$field4name.'</td>
                <td>'.$field5name.'</td> 
                <td>'.$field6name.'</td> 
                <td>'.$field7name.'</td>
                <td><img src= image/'.$field8name.' width=100px height="100px"></td>';
                echo "</tr>";
}
  
echo "</table>";

?>


</div>

<?php include"footer.php"?>