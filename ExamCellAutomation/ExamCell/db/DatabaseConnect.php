<?php

class db{
         private $host_name;
         private $user_name;
         private $password;
         private $database_name;
         

protected function connect() {
	
	$this->host_name = "localhost";
	$this->user_name = "root";
	$this->password = " ";
	$this->database_name = "exam_cell";

	$conn = new mysqli($this->host_name,$this->user_name,$this->password,$this->database_name);

	return $conn;
		
    } 
protected function close_connection(){

	return $conn->close();

}

}




?>