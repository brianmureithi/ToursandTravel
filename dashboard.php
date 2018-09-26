<html class="wf-futurapt-n5-active wf-futurapt-i5-active wf-opensans-n7-active wf-opensans-i7-active wf-opensans-i4-active wf-opensans-n4-active wf-futuraptbold-n7-active wf-active js no-touch" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">


	

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Travel Tips | www.mumotravel.com</title>
<meta charset="utf-8">
<meta name="description" content="">

<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/styles.css" rel="stylesheet">
	<link href="css/sso-ta-country-dropdown.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/latofonts.css" />
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/smoothbox.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all" />
<!--css-->

<!--js-->
<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body class="Region-Home-Page">
	<!--header-->
	
		<div>
<section>


<section class="headerContainer" data-control="Navigation/Menu">

<div class="container">
<div class="row">
<div class="col-lg-12 header">
<a class="desktopLogo" href="index.html"> <img src="assets/logo.png" alt="logo" width="235" height="60" border="0"> </a>

<div class="headerRightMobile">




<button class="c-hamburger c-hamburger--htx mobile-trigger"> <span>toggle menu</span> </button></div>
<div class="headerRight">
<div class="headerRightUpper" data-control="Navigation/Partials/UpperRow">
<div class="headerRightUpper__phone">


<div class="headerRightUpper__agentsDetails"><a href="mailto:info@mumotravel.com" class="headerRightUpper__agentsLogin active" title="" data-action="Primary"><span class="number-container">info@mumotravel.com</span></a></div></div>
<div class="navbar-brand">
<a href="index.php"><h4 class="text-danger" style="color:#000; font-family:Roboto;">DASHBOARD </h4></a><span></span></a>
</div>
<div class="headerRightLower">
<nav class="headerRightLower__nav" data-control="Navigation/Partials/LowerRow">
<ul class="headerRightLower__list">
<li class="headerRightLower__listItem"><a class="headerRightLower__navLink" rel="" href="dashboard.php" data-action="Primary"> Dashboard </a></li>
<li class="headerRightLower__listItem"><a class="headerRightLower__navLink" rel="" href="bookings.php" data-action="Primary"> Bookings </a></li>
<li class="headerRightLower__listItem"><a class="headerRightLower__navLink" rel="" href="index.html" data-action="Primary"> Logout </a></li>

</ul></nav>
</div></div></div></div></div>
</section>
<br><br><br><br><br><br><br><br><br><br>

 <h6 class="text-success">Welcome Wilson Mumo</h6><br>
  <?php
 require("db_connect.php");
 require("session.php");
 ?><h5 class="text-danger">Email: <h5> <?php echo$_SESSION['email'];'<br>'
 
 
 ?>

</h5>
<div class="container-fluid">
<div class="row">
<div class="col-md-8">
<div class=itineraryFallback__accordion>
<p class=itineraryFallback__accordionSectionHeader><span class=itineraryFallback__accordionDay>Bookings </span> <i class=itineraryFallback__accordionStateIcon></i><div class=itineraryFallback__accordionSectionContent>
<form action="booking-mail.php" method="POST" enctype="multipart/form-data">
<table class="table "style="font-family: Vernada; font-size: 16px;">
		<thead><tr><th><strong style="font-size: 19px;">BOOKING DETAILS<strong></th></tr></thead>	
		 
		<tbody>
<?php 
		global $dbhandle;
        $sql = mysqli_query($dbhandle,"select * from bookings");
	while ($row = mysqli_fetch_array($sql)) {
		$email = $row['email'];
		$description = $row['description'];
		$Bookingdate = $row['time'];
	
     
		  ?>
		  <tr>
	<td><span class="fa fa-envelope"></span><strong> Email:</strong> <?php echo $row['email']; ?>  <br></td>
	<td><span class="glyphicon glyphicon-tag"></span><strong> Description:</strong>  <?php echo $row['description']; ?><br></td>
    <td><span class="glyphicon glyphicon-time"></span><strong> Booking date: </strong><?php echo $row['time'] ?> </td> 
		</tr>
		<?php }  ?>
		<br><br>
		<button class="btn btn-success" name="sendmail" >Send mail</button>
		</tbody>
	</table>
	</form>
		
</div>
<br>
<br>
</div>
<br>	  
         
        </div>
</div>
		
		

</div>
<div class="socialIconsWidget" data-control="SocialConnect/SocialShare">
<div class="container">
<div class="row">
<div class="sm-sticky-wrapper">
<div class="shareWidget">
<a href="https://www.facebook.com/MTTRAVEL2018/" target="_blank"><i class="fa fa-facebook-square"></i></a> 
<a href="https://twitter.com/Mumo_Travel" target="_blank"><i class="fa fa-twitter"></i></a> 

</div></div></div></div>
</div><div class="container">
</div>


<!-- The Social Widget Icons Ends -->

<div class="GC004_footer footerRedesigned" data-control="Shared/FooterRedesigned">

<section class="upperFooter" data-control="GC004_footer" style="opacity:0">
<div class="container">
<div class="row">
<div class="col-sm-4 upperFooter__column">
<span data-control="Footer/FooterLinks"> 
<span class="h3 footer__accordionSectionHeader">General <br>Information <i class="footer__accordionStateIcon"></i></span>
<div class="upperFooter__columnContent">
<nav class="footerNav">
<ul class="footerNav__ul">
<li><a href="info-aboutus.html">About Us</a></li>
<li><a href="info-travel-insurance-services.html">Travel Insurance</a></li>
<li><a href="info-privacy-policy.html">Privacy Policy</a></li>
<li><a href="info-visa-processing-services.html">Visa Processing</a></li>
<li><a href="info-hotel-booking-services.html">Hotel Booking Services</a></li>
<li><a href="info-car-hire-services.html">Car Hire Services</a></li>
<li><a href="info-airport-transfers.html">Airport Transfers</a></li>
<li><a href="info-air-ticketing-services.html">Air Ticketing Services</a></li>
</ul>
</nav></div></span></div>



<div class="col-sm-4 upperFooter__column">
<div class="newsletter-form" id="mainFooter" data-control="Footer/NewsletterRedesigned">
<a name="#mainFooter"></a> 
<span class="h3 footer__accordionSectionHeader">Holiday Styles <i class="footer__accordionStateIcon"></i></span>

<div class="upperFooter__columnContent">
<nav class="footerNav">
<ul class="footerNav__ul">
<li><a href="safaris-wildlife.html">Wildife Safaris</a></li>
<li><a href="safaris-adventure.html">Adventure Expeditions</a></li>
<li><a href="safaris-family.html">Family Holidays</a></li>
<li><a href="safaris-bush-beach.html">Bush and Beach</a></li>
<li><a href="safaris-outbound.html">Outbound Holidays</a></li>
<li><img src="assets/mpesa.jpg" width="140px"></li>

</ul>
</nav>
</div></div></div>

<div class="col-sm-4 upperFooter__column">
<span class="h3 footer__accordionSectionHeader">Request a Brochure <i class="footer__accordionStateIcon"></i></span>
<div class="upperFooter__columnContent text-left footerVerticalCardContainer text-left">
<div class="shortDescription__container">Get copies of our latest brochure in two different ways: to your letterbox or view them instantly in your browser.</div>
<div class="btnContainer"><a href="" class="btn btn-ghost">Request a Brochure</a></div></div></div></div>

</div>
</section>

<div class="col-sm-4 upperFooter__column">
<section class="stayConnected__mobile visible-xs" data-control="GC004_footer">

<div class="smLister smLister--darkGrey smLister--footer stayConnected__mobileSmLister">
<span class="h3">Stay Connected</span> 
<a href="https://www.facebook.com/MTTRAVEL2018/" target="_blank"><i class="fa fa-facebook-square"></i></a> 
<a href="https://twitter.com/Mumo_Travel" target="_blank"><i class="fa fa-twitter"></i></a> 
</div>
</section>
</div>

<section class="footer" data-control="GC004_footer">
<div class="container">
<div class="row">
<div class="col-lg-12 accreditations__mobileContainer">
<div class="region"><p class="region__copy">Design: <a class="region__link">Dengates</a></p></div>

<div class="credit"><p class="credit__copy">Copyright © Mumo Travel. All rights reserved. | </p></div>
</div></div>
</div>

</section></div></div>



<script>var
 
app={elements:{video:{width:1440,height:780},canvas:{width:0,height:0}},tripMap:{specificzoom:-1},datesAndTimes:{selectedMonth:0,selectedYear:0,activeTemplate:-1},autoComplete:{autoCompleteResultsLength:0,autoCompleteInterval:null,autoCompleteSearchUrl:"",autoCompleteTermsUrl:""},keyDebounceTimer:110,page_id:"{}"};</script>

<script>var
 
mtsConfig={}</script>


<script src="css/coreScripts"></script>
<script src="css/deferredScripts" defer="defer"></script>
<script src="css/ric6wna.js"></script>
<script defer="defer">try{Typekit.load({async:true,active:function(){setTimeout(function(){fontReady();},0);}});}catch(e){}</script>



</body>
</html>


      
				


