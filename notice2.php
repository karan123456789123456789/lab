<html>
	<head>
		<title>Data in table format</title>
		<style>
		
 body{
   background-image:url("studentss.jpg");
   background-size:cover;
   } 
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
 background-color: rgba(255, 0, 0, 0.3);
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
  color:black;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}




/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color:red;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color:red;
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
					<th>sn</th>
					<th>subject</th>
					<th>Detail</th>
					<th>Date</th>
					
					
				</tr>
			</thead>
			<tbody>
				<?php
					$servername="localhost";
					$username="root";
					$password='';
					$dbname="Nagarjuna";
					$conn=mysqli_connect($servername,$username,$password,$dbname);
					if(!$conn){
						die("it has error connecting to database.".mysqli_connect_error());
					}
					
				  
                     $sql= mysqli_query($conn,"SELECT * FROM notice");
				
					if(mysqli_num_rows($sql)>0){
						while($row=mysqli_fetch_assoc($sql)){
							echo '<tr>';
							echo '<td>'.$row['sn'].'</td>';
							echo '<td>'.$row['subject'].'</td>';
							echo '<td>'.$row['Detail'].'</td>';
							echo '<td>'.$row['Date'].'</td>';
							 echo '</tr>';
						}
					}
				
				?>
			
			</tbody>
		</table>
	</body>
</html>
