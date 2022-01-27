<html>
	<head>
		<title>Data in table format</title>
		<style>
		
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
</style>
	</head>
	<body>
		<table border="1">
			<thead>
				<tr>
					<th>CLASS</th>
					<th>NAME</th>
					<th>EMAIL</th>
					<th>PHONE</th>
					<th>Additional Information</th>
					<th>EDIT||DELETE</th>
				</tr>
			</thead>
				<?php
					$servername="localhost";
					$username="root";
					$password='';
					$dbname="Nagarjuna";
					$conn=mysqli_connect($servername,$username,$password,$dbname);
					if(!$conn){
						die("it has error connecting to database.".mysqli_connect_error());
					}
					$sql="SELECT * FROM students";
					$result=mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_assoc($result)){
							echo '<tr>';
							echo '<td>'.$row['class'].'</td>';
							echo '<td>'.$row['name'].'</td>';
							echo '<td>'.$row['email'].'</td>';
							echo '<td>'.$row['phone'].'</td>';
							echo "<td><a href=\"info.php?id=".$row['id']."\">ParentInformation</a>";
							echo "<td><a href=\"p6.php?id=".$row['id']."\">update</a>||<a href=\"p7.php?id=".$row['id']."\">Delete</a></td>";
							echo '</tr>';
						}
					}
					mysqli_close($conn);
				?>
			<tbody>
			</tbody>
		</table>
	</body>
</html>
