<?php
require ("db_connect.php");

if(isset($_POST['reset'])){
	
	
	$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
     $pass=md5($password);

	//see if that owner is an identical match to another in the system
	 $sql = mysqli_query($dbhandle,"UPDATE mumo_details set password='".$pass."' WHERE email='".$email."'  LIMIT 1");

	
	echo "<script>
	{
		window.location = './login-mumo.php';
	}
	</script>";
	
	}
		
	



?>