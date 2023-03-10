<html>
<?php include"userheader.php";
include "dbconfig.php";
$id = $_GET['receipt'];
?>

<style>


body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:aliceblue;
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
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
   font-size: large;
  color: black;
}

th, td {
  padding: 8px;
  text-align: center;
  border: 1px solid;
  border-bottom: 1px solid #ddd;
  
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

input[type=text], input[type=password],input[type=date]{
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
  <form action="invoice.php" method="post">
<div style="margin-left:16%;padding:1px 16px;height:1000px;">

<?php
$result = mysqli_query($handle, "SELECT * FROM booking WHERE bookid='$id'");

while ($row = $result->fetch_assoc()) 
{
    $field0name = $row["bookid"];
      $field1name = $row["users"];
      $field2name =  $row["addr"];
      $field3name = $row["wid"];
      $field4name = $row["wname"];
      $field5name = $row["bookdate"];
      $field6name = $row["descipt"];
      $field7name = $row["status"];
      $field8name = $row["amount"];
    
}
?>
  		
				<h2>Billing Receipt</h2>
				
					
<div id="printarea">
<table id="datatable"  class="table table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;" border="1"  >		
       <tr>
		<th colspan="3"><center><h3>HOME CARE SERVICE</h3></center></th>
        <br>
        <br>
	   </tr>
	   
		<tr>
			<td><br><br><b>Bill No.</b> </td><td><?php echo $field0name ?> </td>
        </tr>
        <tr>
			<td><b>Username</b></td><td> <?php echo $field1name ?></td>
		</tr>
        <tr>
			<td><b>Address</b></td><td> <?php echo $field2name ?></td>
		</tr>
        <tr>
			<td><b>Service Provider ID</b></td><td> <?php echo $field3name ?></td>
		</tr>
        <tr>
			<td><b>Service Provider Name</b></td><td> <?php echo $field4name ?></td>
		</tr>
        <tr>
			<td><b>Booking Date</b></td><td> <?php echo $field5name ?></td>
		</tr>
        <tr>
			<td><b>Description</b></td><td> <?php echo $field6name ?></td>
		</tr>
        <tr>
			<td><b>Status</b></td><td> <?php echo $field7name ?></td>
		</tr>
        <tr>
			<td><b>Amount</b></td><td> Rs.<?php echo $field8name ?></td>
		</tr>
		
</table>
</div>

<center><input type="button" class="btn btn-info" name='print'  onclick="printDiv('printarea')" value="Click here to Print"></center>
<br>
				
<!-- <?php
include("footer.php");
?> -->
<script>
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>