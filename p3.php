<?php
	$servername_Saguna="localhost";
	$username_Saguna="root";
	$password_Saguna='';
	$dbname_Saguna="Nagarjuna_Saguna";
	$conn_Saguna=mysqli_connect($servername_Saguna,$username_Saguna,$password_Saguna,$dbname_Saguna);
	if(!$conn_Saguna){
		die("Saguna has error connecting".mysqli_connect_error());
	}
	$sql_Saguna="INSERT INTO Student_Saguna(id,name,address,phone) VALUES(1,'Saguna1','Chobar',982341189)";
	$result_Saguna=mysqli_query($conn_Saguna,$sql_Saguna);
	if($result_Saguna){
		echo "Saguna has inserted value in Student_Saguna table.";
	}else{
		echo "Saguna has problem in inserting value in Student_Saguna table.".mysqli_error($conn_Saguna);
	}
	mysqli_close($conn_Saguna);
?>

