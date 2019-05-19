<?php
include_once ('./db/DatabaseConnect.php');
 class person extends db {
 public $username;
 public $password;
    

//private static $instance;

 //constructors

 /*private function __construct($username,$password){

  $this->username=$username;
  $this->password=$password;
 } 
 //Setters and Getters:
         function setusername ($username)
        {
            $this -> username = $username;
        }
         function getusername ()
        {
            return "Your username Is " . $this -> username . '<br>';
        }

        function setpassword ($password)
        {
            $this -> password = $password;
        }
         function getpassword ()
        {
            return "Your password Is " . $this -> password . '<br>';
        }*/
 //singleton
 /*public static function getinstance()
    {
        if (null === self::$instance) {
            self::$instance = new __CLASS__;
        }
        return static::$instance;
    }*/
    
     function login($username,$password){

$sql = "SELECT * FROM person WHERE un='$username' and ps='$password'";
$result = $this->connect()->query($sql);
$count=mysqli_num_rows($result);

if($count==1){
       $row = mysqli_fetch_assoc($result);
if ($row['jop'] == 'ad') {
                header('location:admin_hp.php');       
            }else{
                header("location:student_hp.php?id=$username");
            }

    }
}

function login_error($username,$password){

$sql = "SELECT * FROM person WHERE un='$username' and ps='$password'";
$result = $this->connect()->query($sql);
$count=mysqli_num_rows($result);


       $row = mysqli_fetch_assoc($result);
if ($row['ps'] != '$password' && $row['un'] == '$username') {
                 echo "Invalid Password";    
            }else{
                 echo "Invalid Username or Password";
            }   

}





    function logout(){
        session_start();
        session_destroy();
        header("location: login.php");
   }
    }


?>