<html>
<?php include"userheader.php";
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

@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:aliceblue;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}


h2 {
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  font-size:2em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-top: 1em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}


/* .blue { color: #185875; }
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
} */

/* .container {
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
/* 
/* Background-color of the odd rows */
.container tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
	  background-color: #2C3446;
} 
/* 
.container th {
	  background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
} */

/* .container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
} */ 

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}

.bt {

text-decoration:none;
background-color: greenyellow;
color: black;
padding: 12px 10px;
max-width: max-content;
height: min-content;
border: none;
}

.grid-container {
  display: grid;
  grid-template-columns: auto 100px;
  gap: 10px 10px;
  padding: 10px;
  font-size: large;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  color: #2C3446;
  grid-template-columns: 1000px 100px;
  background-color: skyblue;
  padding: 10px;
  border-radius: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
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
  <form action="userhome.php" method="post">
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
<form action="phpSearch.php" method="post">
  <br>
<table class="cent">
  <tr>

<td><h2><b>Search</b></h2></td>
<td><select class="form-control" name="categ">
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
?></select>

</td>
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
<td>
<button type ="submit" class="button" name=btn> SERACH</button>
</td>
</tr>
<br>
<br>
</table>
<br>

<br>
<h3>SERVICES PROVIDERS</h3>
  <?php
  include"dbconfig.php";
  if(isset($_POST['btn'])) {
    $sql = "SELECT * from workgroup where city='$_POST[city]' and categ='$_POST[categ]'";

$result = $handle->query($sql);
if ($result->num_rows > 0){

 

  while ($row = $result->fetch_assoc()) 
  {
     $field0name = $row["wid"];
      $field1name = $row["wusername"];
      $field2name = $row["emailid"];
      $field3name = $row["noworkers"];
      $field4name = $row["city"];
      $field5name = $row["categ"];
      $field6name = $row["yoe"];

      $_SESSION['wid'] = $field0name;
      $_SESSION['wname'] = $field1name;
      $_SESSION['city'] = $field4name;
    

      echo '<div class="grid-container"> 
                PROVIDER ID: '.$field0name.'</br></br>
                PROVIDER NAME: '.$field1name.'</br></br>
                PROVIDER EMAILID: '.$field2name.'</br></br> 
                NO OF WORKERS: '.$field3name.'</br></br> 
                CITY: '.$field4name.'</br></br>
                CATEGORY: '.$field5name.'</br></br>
                YEARS OF EXPERIENCE: '.$field6name.'</br> </br></br>';
                echo "<a class='bt' href='userbooking.php?book=".$row["wusername"]."'>BOOK</a>";
                echo "</div>";
        echo "<br><br>";
}
  

  }

else{
  echo "0 records";
}
  }

?>

</form>