<?php
session_start();
if($isset($_SESSION["email"]))
{
echo"welcome".$_SESSSION["emaol"];
}
else{
header("location:loginn.php");
}
?>
<br>
<a href="logout.php">logout</a>
?>