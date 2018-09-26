<?php
require("db_connect.php");

if(isset($_POST['submit'])){
	
	$email=filter_var($_POST['email'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$phonenumber=filter_var($_POST['phonenumber'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$desc=filter_var($_POST['description'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	
	$mysql= "INSERT INTO bookings(email,phonenumber,description,time) values('".$email."','".$phonenumber."','".$desc."',now()))";
	 
	 mysqli_query($dbhandle,$mysql);
	
	 
	header('location:info-hotel-booking-services.html?success');
	 
	 
}

?>