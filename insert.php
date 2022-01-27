<?php
   
	$servername="localhost";
	$username="root";
	$password='';
	$dbname="Nagarjuna";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("it has error connecting".mysqli_connect_error());
	}
	if(isset($_POST['Submit'])){
	$class=$_POST['class'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$sql="INSERT INTO student(class,name,email,phone) VALUES('$class','$name','$email','$phone')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "it has inserted value in Student table.";
	}else{
		echo "it has problem in inserting value in Student table.".mysqli_error($conn);
	}
	}
	mysqli_close($conn);
?>

