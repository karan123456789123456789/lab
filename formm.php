<?php
$nameE=' ';
$rollE=' ';
$emailErr=' ';
$phoneE=' ';
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
 if(empty($_POST["roll"])){
$rollE="roll cannot be empty";
}
elseif(!preg_match("/^[0-9]*$/",$_POST["roll"]))
{
	$rollE="only number are allowed";
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
		<title>form validation</title>
		</head>
		    <body>
			<tr>
				  <table border="5" bgcolor="pink"> <h1 ><font color="blue"><b>ADD STUDENT</b></font></hr>
				  </tr>
				  <tr>
			    <td>name:<input type="text" name="name" placeholder="name"></td></br>
			 </tr>
			 <tr>
			<td>roll<input type="text" name="roll" placeholder="roll"></td></br>
			 </tr>
			 <tr>
			 <td>email<input type="email" name=" email" placeholder="Email"></td></br>
			 </tr>
			 <tr>
			 <td>phone:<input type="phone" name="phone" placeholder="phone "></td></br>
			  </tr>
			  <tr>
			   <td>
             <form action="insert.php" method="POST">
  <input type="submit"/>
             </td>     
             
			 </tr>
			 </form>
			</table>
		</body>
		</html>
