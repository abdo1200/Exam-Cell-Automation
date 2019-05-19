<!DOCTYPE html>
<html>
<head>
	<title>Update Details</title>
	 <link rel="stylesheet" href="css/home.css">
</head>
<body>

<?php 
include_once "db/DatabaseConnect.php";
include_once "classes/student.php";
$Student= new student();
$Student->id=$_GET['id'];

?>
  
<nav class="navbar" style="width: 100%">
  <div class="logo"><h1>EXAM CELL AUTOMATION</h1></div>
  <div class="option">
    <ul>
      <li><a href="student_hp.php?id=<?php echo $Student->id ?>">HOME</a></li>
      <li><a>ABOUT</a></li>
      <li><a>CONTACT US</a></li>
      <li><a href="logout.php">LOG OUT</a></li>
    </ul>
  </div>  
</nav>

<?php

           include_once "db/DatabaseConnect.php";
           include_once 'classes/student.php';

             $id=$_GET['id'];
               $Student = new student();
               $Student->id=$id;
               $Student->EditDetails($Student->id);
	                
               
               


?>
</center>
</div>
</body>
</html>