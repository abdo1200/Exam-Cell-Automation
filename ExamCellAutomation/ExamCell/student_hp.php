<!DOCTYPE html>
<html> 
<head>
  <title>Student Home Page</title>
  <link rel="stylesheet" href="css/st_home.css">
</head>
<body>

  <?php 
include_once "db/DatabaseConnect.php";
include_once "classes/student.php";
$Student= new student();
$Student->id=$_GET['id'];

?>
<nav class="navbar">
  <div class="logo"><h1>EXAM CELL AUTOMATION</h1></div>
  <div class="option">
    <ul>
      <li><a href="student_hp.php?id=<?php echo $Student->id ?>">HOME</a></li>
      <li><a href="#about">ABOUT</a></li>
      <li><a href="#">CONTACT US</a></li>
      <li><a href="logout.php">LOG OUT</a></li>
    </ul>
  </div>  
</nav>



     <div class="jops">

      <button class="pro"><a href="viewdetails.php?id=<?php echo $Student->id ?>">My Profile</a></button>
    <button class="hall"><a href="viewhallticket.php?id=<?php echo $Student->id ?>">Hall ticket</a></button>
      <button class="mark"><a href="viewmarksheet.php?id=<?php echo $Student->id ?>">My Marksheet</a></button>

     </div>

    </body>
    </html>

