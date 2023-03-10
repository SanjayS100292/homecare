<html>
<?php include"userheader.php"?>


<style>

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color: aliceblue;
}

h2 {
  text-align: center;
  color: cornflowerblue;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
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
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  border: 1px solid;
  border-collapse: collapse;
  width: 100%;
  border: none;
  font-size: large;
  color: black;
}

th, td {
  padding: 8px;
  text-align: center;
  border: 1px solid;
  border-bottom: 1px solid #ddd;
  border: none;
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

input[type=text], input[type=password] {
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
  <form action="userchangepass.php" method="post">
<div style="margin-left:16%;padding:1px 16px;height:1000px;">
  <h2><u>PROFILE CHANGE PASSWORD DETAILS</u></h2>
  
  <div class="container">
<table class="cent">
<tr>
    <td><label for="npsw"><b>New Password</b></label></td>
    <td><input type="password" placeholder="New Password" name="npsw" id="npsw" required></br></td>
</tr>

<tr>
    <td><label for="psw"><b>Confirm Password</b></label></td>
    <td><input type="password" placeholder="Confirm Password" name="psw" id="psw" required></br></td>
</tr>

</table>
<br>
    <button type="chngepaswd" name="chpassd" onclick="matchPassword()" id="chpassd" class="btn">CHANGE PASSWORD</button><br><br>
    <br><br>
    </div>
</div>
<br>
<?php include"footer.php"?>
  </form>
</body>
<!-- <script>  
function matchPassword() {  
  var pw1 = document.getElementById("npsw");  
  var pw2 = document.getElementById("psw");  
  if(pw1.value != pw2.value)  
  {
    alert("Passwords did not match");  
  }  
  else
  {
    
            alert("User password changed successfully..");
            

  }  
    
}  
</script>  -->
</html>

