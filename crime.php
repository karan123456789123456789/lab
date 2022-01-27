<?php
   $Error='';
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$Error=validate();
		if($Error){
			show_form($Error);
		}else{
			process_form();
		}
	}
	function validate(){
		$Error=array();
		   if(empty($_POST["class"])){
         $Error[]="class cannot be empty.<br>";
        }elseif(!preg_match("/^[0-9]*$/",$_POST["class"])){
	    $Error[]="Invalid class.<br>";
 }
		if(empty($_POST['name'])){
				$Error[]="Name cannot be empty.<br>";
			}elseif(!preg_match("/^[A-Za-z ]*$/",$_POST['name'])){
				$Error[]="Only whitespace and character allowed in Name field.<br>";
			}if(empty($_POST['email'])){
				$Error[]="Email address cannot be empty.<br>";
			}elseif(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_POST['email'])){
				$Error[]="Invalid Email address.<br>";
			}if(empty($_POST['phone'])){
				$Error[]="phone number cannot be empty.<br>";
			}elseif(!preg_match('/^[0-9]{10}+$/', $_POST['phone'])){
				$Error[]="Invalid phone Number.<br>";
			}
			
			return $Error;
	function show_form($Error=NULL){
		$Error_new=implode($Error);
		echo $Error_new."<br>";
	}
	function process_form(){
		
		echo "Name: ".$_POST['name'].'<br>';
		echo "Email: ".$_POST['email'].'<br>';
		
		
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
<form method="POST"  action="insert.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to add new student</p>
    <hr>
	 
      <label for="class"><b>class</b></label>
    <input type="number" placeholder="Enter class" name="class" id="class" required>
	
	 <label for="name"><b>name</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" required>
          
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="phone"><b>Enter your phone number:</b></label>
<input type="tel" id="phone" placeholder="Enter phone" name="phone" id="phone" required>
    
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="Submit">Register</button>
	
  </div>
  
  <div class="container signin">
    </div>
</form>
</body>
</html>