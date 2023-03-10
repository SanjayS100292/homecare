<html>
<?php include "adminheader.php";
include "dbconfig.php";?>


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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 700px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
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
  <!-- <form action="adminreport.php" method="post"> -->
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
  <h2>REPORT</h2>
  <table style="table-layout: fixed ; width: 100%; height:50%">
    <tr>
    <td>
  <div class="card">
<br>
  <h1>TOTAL USERS</h1>
  <div style="margin: 24px 0;">
  </div>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><h4><?php foreach ($handle->query('SELECT COUNT(*) FROM users') as $row) {

    echo $row['COUNT(*)'];
  
  }?></h4></div>
  <p><a href="adminreportuser.php"><button>DETAILS</button></a></p>
</div>
</td>

 <td>
  <div class="card">
<br>
  <h1>TOTAL SERVICE PROVIDERS</h1>
  <div style="margin: 24px 0;">
  </div>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><h4><?php foreach ($handle->query('SELECT COUNT(*) FROM workgroup') as $row) {

echo $row['COUNT(*)'];

}?></h4></div>
  <p><a href="adminreportsp.php" ><button>DETAILS</button></a></p>
</div>
</td>
</tr>

<tr>
<td>
  <div class="card">
<br>
  <h1>CITY</h1>
  <div style="margin: 24px 0;">
  </div>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><h4><?php foreach ($handle->query('SELECT COUNT(*) FROM cities') as $row) {

echo $row['COUNT(*)'];

}?></h4></div>
  <p><a href="adminreportcity.php" ><button>DETAILS</button></a></p>
</div>
</td>

<td>
  <div class="card">
<br>
  <h1>CATEGORIES</h1>
  <div style="margin: 24px 0;">
  </div>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><h4><?php foreach ($handle->query('SELECT COUNT(*) FROM category') as $row) {

echo $row['COUNT(*)'];

}?></h4></div>
  <p><a href="adminreportcateg.php" ><button>DETAILS</button></a></p>
</div>
</td>
</tr>
<tr>
<td>
  <div class="card">
<br>
  <h1>TOTAL WORKS</h1>
  <div style="margin: 24px 0;">
  </div>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><h4><?php foreach ($handle->query('SELECT COUNT(*) FROM booking') as $row) {

echo $row['COUNT(*)'];

}?></h4></div>
  <p><a href="adminreporttw.php" ><button>DETAILS</button></a></p>
</div>
</td>

<td>
  <div class="card">
<br>
  <h1>ACCEPTED WORK</h1>
  <div style="margin: 24px 0;">
  </div>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><h4><?php foreach ($handle->query('SELECT COUNT(*) FROM booking where status="Accepted"') as $row) {

echo $row['COUNT(*)'];

}?></h4></div>
  <p><a href="adminreportaw.php" ><button>DETAILS</button></a></p>
</div>
</td>
</tr>
<tr>
<td>
  <div class="card">
<br>
  <h1>PENDING WORKS</h1>
  <div style="margin: 24px 0;">
  </div>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><h4><?php foreach ($handle->query('SELECT COUNT(*) FROM booking where status="Rejected"') as $row) {

echo $row['COUNT(*)'];

}?></h4></div>
  <p><a href="adminreportpw.php" ><button>DETAILS</button></a></p>
</div>
</td>

<td>
  <div class="card">
<br>
  <h1>COMPLETED WORK</h1>
  <div style="margin: 24px 0;">
  </div>
  <div class="h5 mb-0 font-weight-bold text-gray-800"><h4><?php foreach ($handle->query('SELECT COUNT(*) FROM booking where status="Completed"') as $row) {

echo $row['COUNT(*)'];

}?></h4></div>
  <p><a href="adminreportcw.php" ><button>DETAILS</button></a></p>
</div>
</td>
</tr>
<?php

?>

</div></body>
