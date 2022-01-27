<?php  
session_start();  
  
if((!$_SESSION['username'])&&!$_SESSION['pasword'])) 
	
{  
  
    header("Location: login.php");//redirect to the login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration  
    </title>  
</head>  
  
<body>  
<h1>Welcome</h1><br>  
<?php  
echo $_SESSION['username'];  
echo $_SESSION['pasword']; 
?>  
<h1><a href="logout.php">Logout here</a> </h1>  
</body>  
  
</html>  