<?php
$nameE=' ';
$idE=' ';
$emailErr=' ';
$phoneE=' ';
if($_SERVER['REQUEST_METHOD']=="POST"){
 if(empty($_POST["id"])){
$rollE="roll cannot be empty";
}
elseif(!preg_match("/^[0-9]*$/",$_POST["id"]))
{
	$idE="only number are allowed";
 }
 }
if($_SERVER['REQUEST_METHOD']=="POST"){
if(empty($_POST["name"])){
$nameE="name cannot be empty";
}
elseif(!preg_match("/^[A-Za-z ]*$/",$_POST["name"]))
{
	$nameE="only whitespace and character allowed";
 }
 }
 
  if($_SERVER['REQUEST_METHOD']=="POST"){
 if(empty($_POST["email"])) {
    $emailErr = "Email is required";
  } elseif(!preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i",$_POST["email"]))
   {
      $emailErr = "Invalid email format"; 
    }
  }
  
    
	 if($_SERVER['REQUEST_METHOD']=="POST"){
	 if(empty($_POST["phone"])) {
		 $phoneE = "phone number cannot be empty";
    } 
	elseif(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/",$_POST["phone"]))
  {
	     $phoneE="only phone number is reqiuired";
  }
	 }
	 ?>
<html>
<head>
<meta charset="utf-8">
<title>RegistrationForm_v2 by Colorlib</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper" style="background-image: url('images/student.jpg');">
<div class="inner">
<form action="">
<h3>Add student</h3>
<div class="form-group">
<div class="form-wrapper">
<label for="">roll</label>
<input type="text" class="form-control">
</div>
<div class="form-wrapper">
<label for="">Name</label>
<input type="text" class="form-control">
</div>
</div>
<div class="form-wrapper">
<label for="">Email</label>
<input type="text" class="form-control">
</div>
<div class="form-wrapper">
<label for="">phone</label>
<input type="password" class="form-control">
</div>
<div class="checkbox">
<label>
<input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
<span class="checkmark"></span>
</label>
</div>
<button>Register Now</button>
</form>
</div>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>