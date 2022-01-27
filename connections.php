<?php
	$servername="localhost";
	$username="root";
	$password='';
	$dbname="Nagarjuna";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("it has error connecting".mysqli_connect_error());
	}
	?>
	if(count($_POST)>0) {
$name=$_POST[name];
$result = mysqli_query($conn,"SELECT * FROM information where name='$name' ");
}