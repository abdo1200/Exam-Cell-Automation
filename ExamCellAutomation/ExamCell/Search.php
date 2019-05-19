
<!DOCTYPE html>
<html>
<head>
  <title>Marksheet Form</title>
    <link rel="stylesheet" href="css/Login.css">

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



<div class="login">
  <center>
    <fieldset class="f2">
    <legend>Id Search</legend>

    <div class="log">
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"   >
         <div class="txt">
          <h4>Student ID : </h4><input class="ut" type="text" name="id" required>
          <h4>Semester : </h4><input class="pt" type="text" name="sem" required>
         </div>
         
        <?php
         include_once "db/DatabaseConnect.php";
         include_once "classes/student.php";
         include_once "classes/admin.php";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        	$Student=new student();
        	$Student->id=$_REQUEST['id'];
        	$Student->sem=$_REQUEST['sem'];
            $admin=new admin();
            $admin->Search($Student->id,$Student->sem);
        }

        ?>


         <br><a href="MarksheetFill.php?id=<?php echo $Student->id ?>"><button class="lb" name="Search">Search</button></a><br><br>

       </form>
    </div>
    </fieldset>
  </center>
</div>

    </body>
    </html>