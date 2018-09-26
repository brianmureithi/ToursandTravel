<?php
$host= "localhost";
$username="root";
$password="";
$database="mumotravel";

$dbhandle=mysqli_connect($host,$username,$password);
$dbfound=mysqli_select_db($dbhandle,$database);
if(!$dbfound){
		 die ('Database not found');
		 
	 }
	 ?>