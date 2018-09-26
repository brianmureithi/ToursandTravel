<?php 
include_once("./db_connect.php");

 $inactive = 65000;
 ini_set('session.gc_maxlifetime',$inactive);//set session max lifetime
 session_start();
 if(isset($_SESSION['testing'])&&(time()-$_SESSION['testing']>$inactive)){
   session_unset();
   session_destroy();
 }
 
   
 global $dbhandle;
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['email'])) { ?>
<script>
window.location ="index.html";
</script>
<?php
}
$session_email=$_SESSION['email'];

$user_query = mysqli_query($dbhandle,"select * from mumo_details where email = '$session_email'");
$user_row = mysqli_fetch_array($user_query);
$userid = $user_row['id'];
?>

