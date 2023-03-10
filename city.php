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
</style>
<form action="city.php" method="post">
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
  <h2>CITIES</h2>
  <h3>CITY:<input type="text" placeholder="City" name="city" id="city"></h3>
  <br>
    <button type="addcategory" name="addcit" id="addcit" class="btn">ADD CITY</button>
    <br>
    <br>
    <br>
    <br>
    <h2>CITY DETAILS</h2>
    <?php
 
 //if($_SERVER["REQUEST_METHOD"] == "POST")
 if(isset($_POST['addcit']))
 {

  include"dbconfig.php";

$id=$_POST['id'];
$city=$_POST['city'];

$query="INSERT INTO cities(cid,city) VALUES('$id','$city')";
$res=mysqli_query($handle,$query);

if($res)
{
	
	print"<script>alert('Successfully Inserted');
  window.location.href= 'city.php'
	</script>";
}
 
 else
 {
  print"<script>alert('Something wet wrong');
	</script>";
 }
}
  ?>


<?php 

include"dbconfig.php";

if(isset($_GET["del"])){
  $id = $_GET["del"];
  if($handle->query("DELETE FROM cities WHERE cid= '$id'")){
    print"<script>alert('Successfully Deleted');
    window.location.href= 'city.php'
    </script>";
  } else { 
      echo "Failed to delete category.";
  }    
}  
$result = mysqli_query($handle, "SELECT * FROM cities ORDER BY cid");

echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial"><h4> ID </h4></font> </td> 
          <td> <font face="Arial"><h4>City </h4></font> </td> 
          <td> <font face="Arial"><h4>DELETE </h4></font> </td> 
      </tr>';


  
  while ($row = $result->fetch_assoc()) 
  {
      $field1name = $row["cid"];
      $field2name = $row["city"];
      

      echo '<tr> 
                <td>'.$field1name.'</td> 
                <td>'.$field2name.'</td> ';
                echo "<td><a class='bt' href='city.php?del=".$row["cid"]."'>Delete</a></td>";
                echo "</tr>";
}
  
echo "</table>";
?>
</div>

<?php include"footer.php"?>
</body>
</html>