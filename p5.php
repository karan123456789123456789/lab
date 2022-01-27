<?php
	$servername="localhost";
	$username="root";
	$password='';
	$dbname="Nagarjuna";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("it  has error connecting to database.".mysqli_connect_error());
	}
	$sql="CREATE TABLE Student(id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,name VARCHAR(40),address VARCHAR(40),phone VARCHAR(14))";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "IT has successful created Table named Student in database collage.";
	}else{
		echo "Saguna has error in creating Table named Student in database collage.".mysqli_error($conn);
	}
	mysqli_close($conn);
?>