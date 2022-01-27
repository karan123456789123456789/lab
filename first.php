
<html>
<head>
	<title> student</title>
	<link rel="stylesheet" type="text/css" href=" css/style.css">
	<style>
	*{
	margin:0;
	padding:0;
	box-sizing: border-box;
	
	}
	header{
	background-image:url("C:/Users/dell/Pictures/Saved Pictures/student.jpg");
	height: 100vh;
	background-size:cover;
	background-postion:center;
	box-family:sans-serif;

	}
	.main menu-bar
	{
	background:rgb(0,100,0);
	text-align:left;
	}
	.main ul{
	display:inline-flex;
	list-style: none;
	color:#fff;
	float:right;
	size:40px;
	}
	.main ul li{
	width:150px;
	margin:15px;
	padding:15px;
	}
	.main ul li a{
	text-decoration:none;
	color:red;
	padding:5x 20x;
	border: 1px solid black;
	transition:0.6x ease;
	}
	.main title{
	postion:absolute;
	top:50%;
	left:50%
	}
	.main h1{
	color:red;
	fontsize:200x;;
	align:center;
	}

</style>
</head>

<body>
	<header>
		<div class="main">
			<ul>
			<div class ="title">
			<h1> Student information system</h1>
		</div>
				<li><a href="page.php">home</a></li>
		     <li><a href="display.php">display</a></li>
				<li><a href="form.php">add student</a></li> 
				<li><a href="login.php">sign in</a></li>	
				 <li><a href="login.php">logout</a></li>
				 
				 
               </ul>
		</div>
		
	
</body>
</html>


