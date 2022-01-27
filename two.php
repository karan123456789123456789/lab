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
			if(empty($_POST['name'])){
				$Error[]="Name cannot be empty<br>";
			}elseif(!preg_match("/^[A-Za-z ]*$/",$_POST['name'])){
				$Error[]="Only whitespace and character allowed<br>";
			}
	if(empty($_POST['roll'])){
			
				$Error[]="roll cannot be empty<br>";
			}
	elseif(!preg_match("/^[0-9]*$/",$_POST['roll])){ 		
				echo "Only number allowed<br>";
			}
			
			if(empty($_POST['Gender'])){
				$Error[]="Please select gender<br>";
			}
			return $Error;
	}
	function show_form($Error=NULL){
		$Error_new=implode($Error);
		echo $Error_new."<br>";
	}
	function process_form(){
		echo "Name is ".$_POST['name'];
	}
?>
<html>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Name:<input type="text" name="name"><br>
Roll:<input type="text" name="roll"> <br>

Gender:<input type="radio" name="Gender">Male&nbp <input type="radio" name="Gender">Female</br>
<input type="submit" value="ok">
</form>
</body>
</html>
			