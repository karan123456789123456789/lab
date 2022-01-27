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
  color: #oo800;
  border-bottom: solid 1px rgba(255,255,255,0.1);
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
  color: #008000;
}
.made-with-love i {
  font-style: normal;
  color: #000000;
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

}
		</style>
	</head>
	
	<body style="background-color:grey;">
		<table border="1">
			<thead>
				<tr>
					<td>id</td>
                <td>roll_no</td>
                <td>student_name</td>
				<td>attendance_status</td>
                <td>data_created</td>
				<td>data_modified</td>
				</tr>
			</thead>
			<tbody>
				<?php
					$servername="localhost";
					$username="root";
					$password='';
					$dbname="attendance";
					$conn=mysqli_connect($servername,$username,$password,$dbname);
					if(!$conn){
						die("it has error connecting to database.".mysqli_connect_error());
					}
					
				  
                     $attendence = mysqli_query($conn,"SELECT * FROM attendence");
				
					if(mysqli_num_rows($attendence)>0){
						while($row=mysqli_fetch_assoc($attendence)){
							echo '<tr>';
							echo '<td>'.$row['id'].'</td>';
							echo '<td>'.$row['roll_no'].'</td>';
							echo '<td>'.$row['student_name'].'</td>';
							
							echo '<td>'.$row['attendance_status'].'</td>';
							echo '<td>'.$row['data_created'].'</td>';
							echo '<td>'.$row['data_modified'].'</td>';
							
					        echo '</tr>';
						}
					}
					mysqli_close($conn);
				?>
			
			</tbody>
		</table>
	</body>
</html>