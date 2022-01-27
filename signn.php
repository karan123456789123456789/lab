<?php

$message="";
 $con = mysqli_connect('localhost','root','','nagarjuna') or die('Unable To connect');
 $name=$_POST['user_name'];
 $message="name";
 $pw=$_POST['Password'];
$result = mysqli_query($con,"SELECT * FROM login_user WHERE name=$name and password=$pw");

if(mysqli_num_rows($result)>0){
$message= "you are in";
} else {
//$message = "Invalid Username or Password!";

}

?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<h3 align="center">Enter Login Details</h3>
 Username:<br>
 <input type="text" name="user_name">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
</body>
</html>
