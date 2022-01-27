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
	
	
	
	 <label for="class"><b>class</b></label>
  <input type="number"  placeholder="Enter name" name="class"   id="class" required>
<label for="name"><b>name</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" required>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
     <label for="phone"><b>Enter your phone number:</b></label>
<input type="tel" id="phone" placeholder="Enter phone" name="phone" id="phone" required>
    <hr>
