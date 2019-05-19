<?php
include_once "person.php";
include_once ('./db/DatabaseConnect.php');

class admin extends person{
    function view_registration(){

    	$sql = "SELECT * FROM register";

$result = $this->connect()->query($sql);
$count=mysqli_num_rows($result);


echo "<form style=margin-top:70px;><table border='1'>
<tr style=background-color:darkcyan;color:white>
<th>Firstname</th>
<th>Lastname</th>
<th>EmailAddress</th>
<th>PhoneNumber</th>
<th>Address</th>
<th>Level</th>
<th>Semester</th>
<th>Image</th>
</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><center>" . $row['FirstName'] . "</center></td>";
echo "<td><center>" . $row['LastName'] . "</center></td>";
echo "<td><center>" . $row['EmailAddress'] . "</center></td>";
echo "<td><center>" . $row['PhoneNumber'] . "</center></td>";
echo "<td><center>" . $row['Address'] . "</center></td>";
echo "<td><center>" . $row['Level'] . "</center></td>";
echo "<td><center>" . $row['Semester'] . "</center></td>";
echo "<td>" . '<img src="reg_pic/' . $row['image']  . '" width=" 100px' .  '" height="100px"/>'. "</td>";
echo "</tr>";
}
echo "</table></form>";
    }

function enterstudentinfo(){

$sql = "SELECT * FROM register" or die("Could not connect database " .mysqli_error($mysqli));


$result = $this->connect()->query($sql);
$count=mysqli_num_rows($result);


echo "<table border='1'>
<tr style=background-color:darkcyan;color:white>
<th>Firstname</th>
<th>Lastname</th>
<th>EmailAddress</th>
<th>PhoneNumber</th>
<th>Address</th>
<th>Level</th>
<th>Semester</th>
<th>Image</th>
<th style=width:50px;>ID</th>
<th>Password</th>
</tr>";
while($row = mysqli_fetch_array($result))
{

echo "<tr>";
echo "<td><center>" . $row['FirstName'] . "</center></td>";
echo "<td><center>" . $row['LastName'] . "</center></td>";
echo "<td><center>" . $row['EmailAddress'] . "</center></td>";
echo "<td><center>" . $row['PhoneNumber'] . "</center></td>";
echo "<td><center>" . $row['Address'] . "</center></td>";
echo "<td><center>" . $row['Level'] . "</center></td>";
echo "<td><center>" . $row['Semester'] . "</center></td>";
echo "<td>" . '<img src="reg_pic/' . $row['image']  . '" width=" 100px' .  '" height="100px"/>'. "</td>";
echo "<td><center>" . $row['id'] . "</center></td>";
if($row['pass']=="Not-added"){echo "<td><center>"?> <input name="newps" value="Not-added"> <?php "</center></td>";} else{echo "<td><center>" . $row['pass'] . "</center></td>";}
echo "</tr>";
}
echo "</table>";

}




function addstudent(){
  $sql = "SELECT * FROM register";
$result = $this->connect()->query($sql);
$count=mysqli_num_rows($result);

while($row = mysqli_fetch_array($result))
{
$un=$row['id'] ;
$FirstName=$row['FirstName'];
$LastName=$row['LastName'];
$id=$row['id']; 
$level=$row['Level'];
$Semester=$row['Semester'];
$sql = "UPDATE register SET  pass='2018' WHERE pass='Not-added'  " ;
$result2 = $this->connect()->query($sql);
$count=mysqli_num_rows($result2);
$sql2="INSERT INTO person (un,ps,jop)
VALUES ('$un','2018', 'st')";
$result2 = $this->connect()->query($sql2);
$sql3="INSERT INTO hallticket (FirstName,LastName,id,Level,Semester)
VALUES ('$FirstName','$LastName', '$id','$level','$Semester')";
$result3 = $this->connect()->query($sql3);
if ($row['Semester']==1) {
   $sql4="INSERT INTO marksheet (stuId,Semester,sub1,sub2,sub3,sub4,sub5,sub6,sub7)
VALUES ('$id','$Semester','English1','Math1','Physics','CS','Is','Elctronics','Th')";
$result4 = $this->connect()->query($sql4);
}
elseif ($row['Semester']==2) {
   $sql4="INSERT INTO marksheet (stuId,Semester,sub1,sub2,sub3,sub4,sub5,sub6,sub7)
VALUES ('$id','$Semester','English2','Math2','Pl1','Mangment','Statistics','Economics','IT')";
$result4 = $this->connect()->query($sql4);
}
if ($row['Semester']==3) {
   $sql4="INSERT INTO marksheet (stuId,Semester,sub1,sub2,sub3,sub4,sub5,sub6,sub7)
VALUES ('$id','$Semester','Ds','Pl2','DataBase','HR','Dc','Logics','OR')";
$result4 = $this->connect()->query($sql4);
}
if ($row['Semester']==4) {
   $sql4="INSERT INTO marksheet (stuId,Semester,sub1,sub2,sub3,sub4,sub5,sub6,sub7)
VALUES ('$id','$Semester','Algorithms','Software1','signals','OS','Discret','Network','Ms')";
$result4 = $this->connect()->query($sql4);
}
if ($row['Semester']==5) {
   $sql4="INSERT INTO marksheet (stuId,Semester,sub1,sub2,sub3,sub4,sub5,sub6,sub7)
VALUES ('$id','$Semester','Graphic','Semulation','Multimedia','Selected1','Mis','Co','Ethics')";
$result4 = $this->connect()->query($sql4);
}
if ($row['Semester']==6) {
   $sql4="INSERT INTO marksheet (stuId,Semester,sub1,sub2,sub3,sub4,sub5,sub6,sub7)
VALUES ('$id','$Semester','Selected2','Statistics2','IR','AI','Is','Math3','CR')";
$result4 = $this->connect()->query($sql4);
}

}
header('location: ../add_student.php');

}

function Search($id,$sem){
$sqltext = "SELECT * FROM marksheet WHERE stuId = '$id' AND Semester='$sem' ";
  $result = $this->connect()->query($sqltext);
  $count=mysqli_num_rows($result);

if($count==1){
                header("location:MarksheetFill.php?id=$id");
            }
            else{
            	echo "<br><p style=color:red;>Invalid Input</p>";
            }

    }






function FillMarksheet($Id){

$sqltext = "SELECT * FROM marksheet WHERE stuId = '$Id' ";
  $result = $this->connect()->query($sqltext);
  $conn = $this->connect()->query($sqltext);
  while($row = mysqli_fetch_array($result))
{
     echo "<center><tr><form  method=post style=margin-left:100px;margin-top:30px;color:darkcyan;>";
   echo "<th><h4><h1>Student ID : </th>";
   echo "<td>" . $row['stuId'] . "</h1></td><h4><br><br>";
   echo "<th><h4><h1>Student Semester : </th>";
   echo "<td>" . $row['Semester'] . "</h1></td><h4><br><br>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Subject1 : </th>";
   echo "<td>" . $row['sub1'] . "</td><br><br>";
   echo "<td><input type=text name=sub1GD  ></td><br><br>";
   echo "</tr>";
   echo "<tr>";
   echo "<th>Subject2 : </th>";
   echo "<td>" . $row['sub2'] . "</td><br><br>";
   echo "<td><input type=text name=sub2GD ></td><br><br>";
   echo "</tr>";
   echo "<tr>";
      echo "<th>Subject3 : </th>";
   echo "<td>" . $row['sub3'] . "</td><br><br>";
   echo "<td><input type=text name=sub3GD ></td><br><br>";   echo "</tr>";
   echo "<tr>";
     echo "<th>Subject4 : </th>";
   echo "<td>" . $row['sub4'] . "</td><br><br>";
   echo "<td><input type=text name=sub4GD ></td><br><br>";   echo "</tr>";
   echo "<tr>";
      echo "<th>Subject5 : </th>";
   echo "<td>" . $row['sub5'] . "</td><br><br>";
   echo "<td><input type=text name=sub5GD ></td><br><br>";   echo "</tr>";
   echo "<tr>";
   echo "<th>Subject6 : </th>";
   echo "<td>" . $row['sub6'] . "</td><br><br>";
   echo "<td><input type=text name=sub6GD ></td><br><br>";   echo "</tr>";
   echo "<tr>";
     echo "<th>Subject7 : </th>";
   echo "<td>" . $row['sub7'] . "</td><br><br>";
   echo "<td><input type=text name=sub7GD ></td><br><br>";   echo "</tr>";
   echo "<tr>";

    if (isset($_POST['Add'])) {
  $gd1=$_REQUEST['sub1GD'];
  $gd2=$_REQUEST['sub2GD'];
  $gd3=$_REQUEST['sub3GD'];
  $gd4=$_REQUEST['sub4GD'];
  $gd5=$_REQUEST['sub5GD'];
  $gd6=$_REQUEST['sub6GD'];
  $gd7=$_REQUEST['sub7GD'];

$sql = "UPDATE marksheet SET  sub1GD='$gd1' ,  sub2GD='$gd2' ,  sub3GD='$gd3' ,  sub4GD='$gd4' , sub5GD='$gd5' , sub6GD='$gd6' , sub7GD='$gd7'  WHERE stuId='$Id' ";
  
  $conn = $this->connect()->query($sql);
if ($conn == TRUE) {
    ?><script>alert("Your Student MarkSheet Added Succsessfuly")</script> <?php
} else 
      echo "Error: " . $sql . "<br>" . $conn;
}

  echo "<td><button name=Add style=margin-left:100px;height:50px;width:100px;border-radius:10px;color:white;background-color:darkcyan; ><a>Submit</a></button><td>";
   echo "</form></tr>";




 }}
















}



