<html>
	<head>
		
		<title>Student Results</title>


		
	</head>
	<body>		<form method="POST">
			<fieldset style="width:600px">
			  <img src="logo.jpg" width =200px>		 
	    		<legend><b><font color="Red"><h1>Student markheet:</b></h1></legend>
				<br>
				class:<select name='Txtclass'>
				<?php
	$servername="localhost";
	$username="root";
	$password='';
	$dbname="Nagarjuna";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("Connection failed".mysqli_connect_error()."<br>");
	}
	 $result = $conn->query("select class from students");
   
    while ($row = $result->fetch_assoc()) {
        unset($username);
        $class= $row['class'];
        echo '<option value="'.$class.'"  >'.$class.'</option>';
    }mysqli_close($con);
   
?> </select><br>
Name:<select name='Txtname'><?php
	$servername="localhost";
	$username="root";
	$password='';
	$dbname="Nagarjuna";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("Connection failed".mysqli_connect_error()."<br>");
	}
	 $result = $conn->query("select name from students ");
    
    while ($row = $result->fetch_assoc()) {
        unset($username);
        $name= $row['name'];
        echo '<option value="'.$name.'"  >'.$name.'</option>';
    }mysqli_close($con);
   
?></select><br>
				<table border="1">
				 <tr><td>English</td><td><input type="text" name="txtEnglish" required></td></tr>
					<tr><td>nepali</td><td><input type="text" name="txtnepali" required></td></tr>
					<tr><td>Maths</td><td><input type="text" name="txtMaths" required></td></tr>
					<tr><td>Science</td><td><input type="text" name="txtScience" required></td></tr>
                     <tr><td>Social</td><td><input type="text" name="txtSocial" required></td></tr>
					 <tr><td>eph</td><td><input type="text" name="txteph" required></td></tr>
					<tr><td>optional1:computer science<input type="checkbox"  name="computer" >Account<input type="checkbox"  name="account" ><td><input type="text" name="txtoptional1" required></td></td></tr>
		               <tr><td>optional2:optional math<input type="checkbox"  name="omath" >economics<input type="checkbox"  name="economics"><td><input type="text" name="txtoptional2" required></td></td></tr>    
					   </table><br/><br/>
				<input type="submit" id="Submit" name="Submit" value="Result">
			</fieldset>
			     
				</form>
			
	</body>
</html>
<?php

if(isset($_POST['Submit'])){
	$con = mysqli_connect('localhost', 'root','','nagarjuna' );
	$grade='';
$name=$_POST['Txtname'];
$class=$_POST['Txtclass'];
$English=$_POST['txtEnglish'];
$Nepali=$_POST['txtnepali'];
$Maths=$_POST['txtMaths'];
$Science=$_POST['txtScience'];
$Social=$_POST['txtSocial'];
$Computer=$_POST['txtoptional1'];
$Omaths=$_POST['txtoptional2'];
$tmark=($English+$Nepali+$Maths+$Nepali+$Science+$Social+$Computer+$Omaths);

$amark=$tmark/8;
if($amark>=60 && $amark<=100){
	$grade='A';
	$remark="First";
}else if($amark>=50 && $amark<=60){
	$grade='B';
	$remark="Second";
}else if($amark>=40 && $amark<=50){
	$grade='C';
	$remark="Third";
}else{
	$garde='F';
	$remark="Fail";
}
$sql="select * from students where class='$class' and name='$name'";
$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0){
				while($rows=mysqli_fetch_assoc($result)){
					$n=$rows['name'];
					$b=$rows['class'];
					$sql="select * from result where class='$b' and name='$n'";
					$result=mysqli_query($con,$sql);
					if(mysqli_num_rows($result)>0){
					while($rows=mysqli_fetch_assoc($result)){
					echo '<script>alert("Result already added")</script>';
					}}else{
				$sql2="insert into result(name,class,tmarks,amarks,grade,remark) values('$name','$class','$tmark','$amark','$grade','$remark') ";
				$result2=mysqli_query($con,$sql2);
				if($result2){
					echo '<script>alert("Result added")</script>';
				}else{
					echo '<script>alert("Has occur problem while inserting value")</script>';
				}
				}
			}
			}else{
				echo '<script>alert("Name and id not match")</script>';
			}
		mysqli_close($con);
}	
?>
