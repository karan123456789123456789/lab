<html>
	<head>
		
		<title>Student Results</title>


		
	</head>
	<body>	
	<form method="POST">
			<fieldset style="width:600px">
			  		 
	    		<legend><b><font color="Red"><h1>Notice board:</b></h1></legend>
				sn:<input type="text" name="sn"><br/><br/>
				subject:<input type="text" name="subject"> <br/><br/>
				Detail:<input type="text" name="Detail"> <br/><br/>
				Date:<input type="Date" name="Date"> <br/><br/>
				<input type="submit" id="Submit" name="Submit" value="Published">
			</fieldset>
			     
				</form>
			
	</body>




<?php
  
	$servername="localhost";
	$username="root";
	$password='';
	$dbname="nagarjuna";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("it has error connecting".mysqli_connect_error());
	}if(isset($_POST['Submit'])){
	$sn=$_POST['sn'];
	$subject=$_POST['subject'];
	$Detail=$_POST['Detail'];
	$Date=$_POST['Date'];
	$sql="INSERT INTO notice(sn,subject,Detail,Date) VALUES('$sn','$subject','$Detail','$Date')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "it has inserted value in notice.";
	}else{
		echo "it has problem in inserting value in notice.".mysqli_error($conn);
	}
	}
	mysqli_close($conn);
?>
</html>