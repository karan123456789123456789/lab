<?php
$message="";
 $con = mysqli_connect('localhost','root','','nagarjuna') or die('Unable To connect');
 if(isset($_POST['submit'])){
 $name=$_POST['user_name'];
 $message="name";
 $pw=$_POST['password'];
 $query="SELECT * FROM login_user WHERE name='$name' and password='$pw'";
$result = mysqli_query($con,$query);
	
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
	
$message= "you are in";
header("Location: student.php");
} }
else {
$message = "Invalid Username or Password!";
}
}

?>
<html>
<head>

<title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
<style>	
body  
{  
 font-family: Calibri, Helvetica, sans-serif;  
  background-color: red;  
}  
input[type=text], input[type=password] {   
        width: 45%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
form {   
         border:3px;   
    }
</style>	
</head>
<body>
<div class="content">
  <img src="cartoon.jpg" width =200px  >		 
        
        
</div>

<form name="frmUser" method="post" align="center">
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
</table>
</form>
</body>
</html>