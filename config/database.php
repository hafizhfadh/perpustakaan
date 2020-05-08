<?php 
 
class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "malasngoding";
 
	function __construct(){
		$conn = mysqli_connect($this->host, $this->uname, $this->pass);
		mysqli_select_db($this->$conn,$this->db);
	}
 
} 