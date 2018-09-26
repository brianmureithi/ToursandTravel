<?php
require ("db_connect.php");
$inactive = 1200;
 ini_set('session.gc_maxlifetime',$inactive);//set session max lifetime
 session_start(); 
 global $dbhandle;
 if(isset($_SESSION['testing'])&&(time()-$_SESSION['testing']>$inactive)){
   session_unset();
   session_destroy();
 }
 
 if(isset($_POST['login'])){
	 $email=filter_var($_POST['email'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	  $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	  $pass=md5($password);
	  
	  $sql=mysqli_query($dbhandle,"SELECT * FROM mumo_details WHERE email='".$email."' AND password='".$pass."' LIMIT 1")
	  or die (mysqli_error($dbhandle));
	  
  $count=mysqli_num_rows($sql);
	$row = mysqli_fetch_array($sql);
	  
	 if($count > 0){
$_SESSION['id']=$row['id'];
$id=$row['id'];
$_SESSION['email']=$row['email'];
$password=$row['password'];

$sql = mysqli_query($dbhandle,"INSERT INTO login_time(email,password,loggedin_date) VALUES ('".$email."','".$pass."',now())") or die (mysqli_error($dbhandle));


header("location: dashboard.php?id='.['$_SESSION'].'");


}	else{
?>
 <script>
 alert('!You have entered the wrong email or password please try again');
window.location="login-mumo.php"
 </script>
 <?php
     
		
}

}

?>

 }

?>