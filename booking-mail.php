<?php
require ("mailer/PHPMailer/src/PHPMailer.php");
require ("mailer/PHPMailer/src/Exception.php");

//Load Composer's autoloader
//require 'vendor/autoload.php';
require("db_connect.php");
if( isset($_POST['sendmail'])){
	global $dbhandle;
			$query = mysqli_query($dbhandle,"select * FROM bookings ")or die(mysqli_error()); 

		while($row = mysqli_fetch_array($query)){
			$email = $row['email'];
			$subject='Mumo Tours and travel';
			$body='Thankyou for choosing Mumo tours and Travel, we are working on logistics for your tour and we will 
			call you soon <br> Cheers Mumo';
			$sendersmail='info@mumo.com';
			$ccemail='mumotravel@gmail.com';
$headers = 'From:' .$sendersmail .  "\r\n" ; // Sender's Email
 $headers .= 'Cc:' .$ccemail . "\r\n"; // Carbon copy to Sender 
   
$_SESSION['id']=$row['id'];


//send mail by php function
mail('.$email.', $subject,$body,$headers);

echo'Your Email has been sent successfully';

echo"
<script>
window.location = 'dashboard.php?id='.['$_SESSION'].'';	
</script>";

}
}
?>