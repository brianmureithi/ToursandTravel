<?php
if(isset($_POST["submit"])){
	//ensure no field is empty
if($_POST["fname"]==""||$_POST["smail"]==""||$_POST["subject"]==""||$_POST["msg"]==""){
	echo'Fill all fields....';
}else
{
//ensure email field is filled perfectly
	$email=$_POST['smail'];
//sanitize email
$email=filter_var($email,FILTER_SANITIZE_EMAIL);

//validate email
$email=filter_var($email,FILTER_VALIDATE_EMAIL);

if(!$email){
echo"Invalid email address";
}
else{
$subject=$_POST['subject'];
$name=$_POST['fname'];
$message=$_POST['msg'];

$headers = 'From:' .$email .  "\r\n" ; // Sender's Email
 $headers .= 'Cc:' .$email . "\r\n"; // Carbon copy to Sender

$message= wordwrap($message,70);

//send mail by php function
mail("info@mumotravel.com", $subject,$name,$message,$headers);

echo'Your Email has been sent successfully,Thankyou for your feedback';
echo"
		<script> 
	window.location = 'contact.php';	
	</script>";	

}
}
	

}



?>