<!DOCTYPE html>
<html> 
<head>
  <title>Add Student</title>
  <link rel="stylesheet" href="css/add_student.css">
</head>
<body>

<nav class="navbar">
  <div class="logo"><h1>EXAM CELL AUTOMATION</h1></div>
  <div class="option">
    <ul>
      <li><a href="admin_hp.php">HOME</a></li>
      <li><a href="#about">ABOUT</a></li>
      <li><a>CONTACT US</a></li>
      <li><a href="logout.php">LOG OUT</a></li>
    </ul>
  </div>  
</nav>


<div class="registration">
<center>


<?php
include_once "db/DatabaseConnect.php";
include_once 'classes/admin.php';

$admin= new admin();
$admin->enterstudentinfo();

?>

<button class="add"><a href="db/add_studentSQL.php">add student</a></button>
</center>
 
 </div>


    </body>
    </html>
