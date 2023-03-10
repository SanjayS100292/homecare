<html>
<?php include"adminheader.php"?>
<style>

input[type=text]{
  width: 25%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}
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
<form action="adminreporttw.php" method="post">
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
<h2>FULL WORK RECORD</h2>
<br>
<?php 

include"dbconfig.php";


$result = mysqli_query($handle, "SELECT * FROM booking where status='Completed'");



echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial"><h4>Booking ID </h4></font> </td> 
          <td> <font face="Arial"><h4>Customer name </h4></font> </td> 
          <td> <font face="Arial"><h4>Address details </h4></font> </td> 
          <td> <font face="Arial"><h4>Booking Date</h4></font> </td> 
          <td> <font face="Arial"><h4>Description</h4></font> </td> 
          <td> <font face="Arial"><h4>Status</h4></font> </td> 
      </tr>';


  
  while ($row = $result->fetch_assoc()) 
  {
      $field0name = $row["bookid"];
      $field1name = $row["users"];
      $fieldname =  $row["addr"];
      $field2name = $row["bookdate"];
      $field3name = $row["descipt"];
      $field4name = $row["status"];

      echo '<tr> 
                <td>'.$field0name.'</td> 
                <td>'.$field1name.'</td> 
                <td>'.$fieldname.'</td>
                <td>'.$field2name.'</td> 
                <td>'.$field3name.'</td> 
                <td>'.$field4name.'</td>
                
                </tr>';
}

?>

</form>