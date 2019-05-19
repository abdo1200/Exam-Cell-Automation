<!DOCTYPE html>
<html> 
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="css/Login.css">
</head>
<body>
<nav class="navbar">
  <div class="logo"><h1>EXAM CELL AUTOMATION</h1></div>
  <div class="option">
    <ul>
      <li><a href="ho.php">HOME</a></li>
      <li><a href="ho.php">ABOUT</a></li>
      <li><a>CONTACT US</a></li>
    </ul>
  </div>  
</nav>



<div class="login">
  <center>
    <fieldset class="f2">
    <legend>LOGIN FORM</legend>

    <div class="log">
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"   >
         <div class="txt">
          <h4>User Name : </h4><input class="ut" type="text" name="logUS" required>
          <h4>Password : </h4><input class="pt" type="Password" name="logPS" required>
         </div>
         <?php
         include_once "db/DatabaseConnect.php";
         include_once "classes/person.php";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST['login'])) {
         $person = new person();

         $person->username=$_REQUEST['logUS'];
         $person->password=$_REQUEST['logPS'];
         $person->login($person->username ,$person->password);
         

         ?><p style="color: red"><?php $person->login_error($person->username ,$person->password) ?></p><?php 
        } }?>
         <br><button class="lb" name="login">Login</button><br><br>
         <p>Not Registerd? <a href="register.php">Sign Up</a></p>
       </form>
    </div>
    </fieldset>
  </center>
</div>

    </body>
    </html>