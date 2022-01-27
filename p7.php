<?php
	$servername="localhost";
	$username="root";
	$password='';
	$dbname="Nagarjuna";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("it has error connecting".mysqli_connect_error());
	}
	$id=$_GET['id'];
	$sql="DELETE FROM Students WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "it has deleted record in Student .";
	}else{
		echo "it has problem deleting record in Student.";
	}
	mysqli_close($conn);
?>