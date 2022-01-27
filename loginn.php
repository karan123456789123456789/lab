<?php
session_start();
$u="ABC";
$p="123";
if(isset($_POST["btnsubmit"]))
{
	if($u==$_POST["txtEmail"]and $p==$_POST["txtpass"])
	{
		$_SESSION["email"]=$_POST["txtEmail"];
		header("location:display.php");
	}
	else{
		echo"invalid user name or paswrord";
	}
}
?>
<html>
<head>
<title></title>
</head>
<body>
<form method="post">
Email:<input type="text" name="txtEmail" value=""/><br><br>
password:<input type="text" name="txtpass" value=""/><br><br>
<input type="submit" name="btnsubmit" value="login"/>
</form>
</body>
</html>