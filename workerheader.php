<style>
/* Style the header with a grey background and some padding */
.header {
  overflow: hidden;
  background-color: #111;
  padding: 20px 10px 0px 0px;
  height: 15%;
  margin-top: -1em;
  margin-right: -1rem;
  
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}
.header-right {
  float: right;
}

.div {
  color: white;
  font-size: medium;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.sidenav a.logo {
  font-size: 25px;
  font-weight: bold;
  padding: 18px;
  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

/* .Logout{
  
} */
/* Change the background color on mouse-over */
body {
  font-family: "Lato", sans-serif;
}

.sidenav{
  height: 100%;
  width: 250px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a , .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}


.sidenav a:hover, .dropdown-btn:hover{
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



  </style>
  <div>


<div class="sidenav">
  <a href="workerhome.php" class="logo">HOME CARE <br>SERVICE</a></li>
  <br>
  <br>
  <a class="active" href="workerhome.php">HOME</a>
  <a href="workerprofile.php">PROFILE</a>


  <button class="dropdown-btn">WORKS
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   <a href="workpending.php">Pending</a>
    <a href="workaccepted.php">Accepted</a>
    <a href="workrejected.php">Rejected</a>
    <a href="workcompleted.php">Completed</a>
    <a href="workother.php">Other Works</a>
  </div>
  <button class="dropdown-btn">COMPLAINT
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
   <a href="workcomplaint.php">Register</a>
    <a href="workcomplaintstatus.php">Status</a>
  </div>
  <a class="Logout" href="logout.php">LOGOUT</a>
</div>
  
<div class="header">
  <div class="header-right">
    <?php
 session_start(); 
  if(isset($_SESSION['worker'])) 
  {
  echo "<div class='div' id='admin'>Welcome :". $_SESSION['worker'] ."</div>";
} 
 else 
 {
  echo "no";
}
    ?>
  </div>
</div>


<script>
  var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
  </script>
