<?php
$servername="localhost";
$username="root";
$password=' ';
$dname="my db";
$conn=mysqli_connect($servername,$username,$password,$dname);
if(!conn){
die("connection unsucessfull".mysqli_connect_error());
}
$sql="create a table student(id INT(10) PRIMARY AUTO_INCREMENT,name VARCHAR(20),email VARCHAR(20))";
$result=mysqli_query($conn,$sql);
if($result){
	echo 'table is created';
}
else{
echo "error creating table".mysqli_error($conn);
}
mysqli_close($conn);
?>