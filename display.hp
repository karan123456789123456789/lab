<html>
	<head>
		<title>Data in table format</title>
	</head>
	<body>
		<table border="1">
			<thead>
				<tr>
					<th>ID</th>
					<th>NAME</th>
					<th>ADDRESS</th>
					<th>PHONE</th>
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
					$sql="SELECT * FROM Student_Saguna";
					$result=mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)>0){
						while($row=mysqli_fetch_assoc($result)){
							echo '<tr>';
							echo '<td>'.$row['id'].'</td>';
							echo '<td>'.$row['name'].'</td>';
							echo '<td>'.$row['address'].'</td>';
							echo '<td>'.$row['phone'].'</td>';
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
