<!DOCTYPE html>
<html>
<head>
  <title>Marksheet Form</title>
    <link rel="stylesheet" href="css/Markfill.css">

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





    <center>
<?php include_once "db/DatabaseConnect.php";
           include_once 'classes/admin.php';
           include_once 'classes/student.php';

             $id=$_GET['id'];
               $Student = new student();
               $Student->id=$id;
               $admin=new admin();
               $admin->FillMarksheet($Student->id);
        ?>          
             
</center>
 





</body>
</html>



  







