<html>
<head>
<title>Signup</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="container-fluid">
<div class="row">
<form method="POST" action="" enctype="multipart/form-data">
<div class="col-md-6">
<div class="form-group" style="padding-left:20px;"> 
      <label for="firstname"><span class="req"> </span><h5 class="text-success"> Email: </h5> </label>
       <input class="form-control" type="email" name="email" id="txt" placeholder="Email" onkeyup="Validate(this)" required />
     <div id="errFirst">
      </div> 
      </div> 
      
      <div style="padding-left:20px;">
        <label for="lastname" ><span class="req"> </span><h5 class="text-success"> Password: </h5></label>
       <input class="form-control" type="password" name="password" id="txt" onkeyup="Validate(this)" placeholder="password" required />
     <div id="errLast"> </div>
       </div> <br>
	   <div class="col-md-3">
	   <input class="btn btn-success btn-block" type="submit" value="submit" name="submit">
	   </div>
      </div> 
	  </form>
	  </div>
	  </div>
</body>
</html>
<?php
require("db_connect.php");

if (isset($_POST['submit'])){
	$email=filter_var($_POST["email"],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$password=filter_var($_POST["password"],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);
	$pass=md5 ($password);
	
	$sql="INSERT INTO mumo_details(email,password) VALUES('".$email."','".$pass."')";
	mysqli_query($dbhandle,$sql);
}
?>