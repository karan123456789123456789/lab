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
	$sql="SELECT * FROM students where id='$id'";
					$result=mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_assoc($result)){
							echo '<tr>';
							echo 'Parent Name:<td>'.$row['pname'].'</td><br>';
							echo 'Parent Email:<td>'.$row['pemail'].'</td><br>';
							echo 'Parent Gender:<td>'.$row['pgender'].'</td><br>';
							echo 'Parent Phone:<td>'.$row['pphone'].'</td><br>';
							echo '</tr>';
						}
					}
					mysqli_close($conn);
?>