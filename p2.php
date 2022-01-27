<?php
	$servername="localhost";
	$username="root";
	$password='';
	$conn=mysqli_connect($servername,$username,$password);
	if(!$conn){
		die("it  has error connecting.".mysqli_connect_error());
	}
	$sql="Create database collage";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "it has successful created Database named collage.";
	}else{
		echo "it has error in creating Database named collage.".mysqli_error($conn);
	}
	mysqli_close($conn);
?>