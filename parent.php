<?php
$Error='';
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$Error=validate();
		if($Error){
			show_form($Error);
		}else{
			process_form();
		}
	}
	function  validate(){
		$Error=array();
 
if(empty($_POST["name"])){
$Error[]="name cannot be empty";
}
elseif(!preg_match("/^[A-Za-z ]*$/",$_POST["name"]))
{
	$Error[]="only whitespace and character allowed";
 }
 if(empty($_POST["email"])) {
  $Error[]="Email is required";
  } elseif(!preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i",$_POST["email"]))
   {
     $Error[]="Invalid email format"; 
    }
if (empty($_POST["gender"])) {  
            $Error[]= "Gender is required";  
    } 
     
  
	 if(empty($_POST["phone"])) {
		$Error[]="phone number cannot be empty";
    } 
	elseif(!preg_match('/^[0-9]{10}+$/',$_POST["phone"])){
    $Error[]="only 10 digit phone number is accepted";
  }
  return $Error;
	 }
	function show_form($Error=NULL){
		$Error_new=implode($Error);
		echo '<p style="color:red;">'.$Error_new."<br></p>";
	}
	function process_form(){
		$servername="localhost";
	$username="root";
	$password='';
	$dbname="parent";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if(!$conn){
		die("it has error connecting".mysqli_connect_error());
	}
	$name=$_POST['name'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$phone=$_POST['phone'];
	$sql="INSERT INTO god(name,email,gender,phone) VALUES('$name','$email','$gender','$phone')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "<p style='color:red;'>it has inserted value in parent table.";
	}else{
		echo "it has problem in inserting value in parent table.</p>".mysqli_error($conn);
	}
	mysqli_close($conn);
	}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}


.container {
  padding: 16px;
  background-color: white;
}
input[type=number], input[type=class] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=tel], input[type=phone] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}


a {
  color: dodgerblue;
}


.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>


</style>
</head>
<body>



  <div class="container">
    <h1>Create a parent Account</h1>
    <p>parent account details</p>
    <hr>
	 <form method="POST"  action="<?php $_SERVER['PHP_SELF'];?>">
     
	 <label for="name"><b> Parent Name</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" required>
          
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
	  <label for="name"><b> Gender</b></label>  
    <input type="radio" name="gender" value="male"> Male  
    <input type="radio" name="gender" value="female"> Female  
    <input type="radio" name="gender" value="other"> Other  
    <br><br>  

      <label for="phone"><b>Enter Parent phone number:</b></label>
<input type="tel"  placeholder="Enter phone" name="phone" id="phone" required>
    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="Submit">Register</button>
	</form>
  </div>
  
  <div class="container signin">
    </div>

</body>
</html>