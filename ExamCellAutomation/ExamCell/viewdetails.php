<!DOCTYPE html>
<html>
<head>
	<title>View Details</title>
	 <link rel="stylesheet" href="css/login.css">
  
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
      <li><a>ABOUT</a></li>
      <li><a>CONTACT US</a></li>
      <li><a href="logout.php">LOG OUT</a></li>
    </ul>
  </div>  
</nav>
<center><br><br><br><br><br>
  <?php 
include_once "db/DatabaseConnect.php";
include_once "classes/student.php";
$Student= new student();
$Student->id=$_GET['id'];
$Student->ViewDetails($Student->id);
?>
  <br><br><br>
  <a style="text-decoration: none; color: white" href="UpdateDetails.php?id=<?php echo $Student->id ?>"><button class="lb">update</button></a>
  
  
         
  </center>


  </body>
  </html>


