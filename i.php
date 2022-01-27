<?php
  require_once("kb.php");
	$name=$_POST['name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$country=$_POST['country'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$sql="insert into personal_details(name,age,gender,country,email,phone) values('$name','$age','$gender','$country','$email','$phone')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "Value Inserted<br>";
	}else{
		echo "Value not Inserted".mysqli_error($conn)."<br>";
	}
	mysqli_close($conn);
?>
