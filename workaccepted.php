<html>
<?php include"workerheader.php";
?>
<style>

.cent {
  margin-left: auto;
  margin-right: auto;
  padding: 16px 20px;
  width: 50%;
  border: none;
}

.button {
  
  background-color: green;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;

}
/* @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700); */

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  text-align: center;
  color: brown;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: #185875;
  
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
  
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
}

.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
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
 
}
.bt {

text-decoration:none;
background-color: greenyellow;
color: black;
padding: 6px 5px;

border: none;
}

.bt2 {

text-decoration:none;
background-color: red;
color: black;
padding: 6px 5px;

border: none;
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
<body>
  <form action="workaccepted.php" method="post">
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
<h2>ACCEPTED WORK RECORD</h2>
<br>
<?php 

include"dbconfig.php";


$result = mysqli_query($handle, "SELECT * FROM  booking where wname='{$_SESSION['worker']}' and status='Accepted'");



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
                <td>'.$field4name.'</td>';
                echo "<td><a class='bt' href='workspaccepted.php?cmpt=".$row["bookid"]."'>COMPLETED</a></td>";
                echo "</tr>";
                
}

if(isset($_GET["cmpt"]))
{
  $username = $_GET["cmpt"];
  if($handle->query("UPDATE booking SET status='Completed' WHERE bookid='$field0name'"))
  {
    print"<script>alert('Successfully Updated');
    window.location.href= 'workcompleted.php'
    </script>";
  } else 
  { 
      echo "Failed.";
  }    
}  

echo "</table>";
?>

</form>