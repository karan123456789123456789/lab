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
	$sql="UPDATE Students SET name='Saguna' WHERE id=$id";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "it has updated value in Student table.";
	}else{
		echo " it has problem updating value in Student table.".mysqli_error($conn);
	}
	mysqli_close($conn);
?>