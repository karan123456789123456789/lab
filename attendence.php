<html>
<head>
<title>
</title>
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


</style>
<body style="background-color:#add8e6;">
<form action="" method="post">
    <table border="1">
        <tbody>
            <tr>
                <td>S.I</td>
                <td>Roll No</td>
                <td>Student Name</td>
                <td>Attendance</td>
            </tr>
            <tr>
			    
                <td>1</td>
                <td>
                    123
                    <input type="hidden" name="roll_no[]" value="123" />
                </td>
                <td>
                    Raj Shekhar
                    <input type="hidden" name="student_name[]" value="Raj Shekhar" />
                </td>
                <td>
                    <label for="present0">
                        <input type="radio" id="present0" name="attendance_status[0]" value="Present"> Present
                    </label>
                    <label for="absent0">
                        <input type="radio" id="absent0" name="attendance_status[0]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    231
                    <input type="hidden" name="roll_no[]" value="231" />
                </td>
                <td>
                    Pankaj Kumar
                    <input type="hidden" name="student_name[]" value="Pankaj Kumar" />
                </td>
                <td>
                    <label for="present1">
                        <input type="radio" id="present1" name="attendance_status[1]" value="Present"> Present
                    </label>
                    <label for="absent1">
                        <input type="radio" id="absent1" name="attendance_status[1]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    345
                    <input type="hidden" name="roll_no[]" value="345" />
                </td>
                <td>
                    Amit Singh
                    <input type="hidden" name="student_name[]" value="Amit Singh" />
                </td>
                <td>
                    <label for="present2">
                        <input type="radio" id="present2" name="attendance_status[2]" value="Present"> Present
                    </label>
                    <label for="absent2">
                        <input type="radio" id="absent2" name="attendance_status[2]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    456
                    <input type="hidden" name="roll_no[]" value="456" />
                </td>
                <td>
                    Arjun Kumar
                    <input type="hidden" name="student_name[]" value="Arjun Kumar" />
                </td>
                <td>
                    <label for="present3">
                        <input type="radio" id="present3" name="attendance_status[3]" value="Present"> Present
                    </label>
                    <label for="absent3">
                        <input type="radio" id="absent3" name="attendance_status[3]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>
                    567
                    <input type="hidden" name="roll_no[]" value="567" />
                </td>
                <td>
                    Amit Kumar
                    <input type="hidden" name="student_name[]" value="Amit Kumar" />
                </td>
                <td>
                    <label for="present4">
                        <input type="radio" id="present4" name="attendance_status[4]" value="Present"> Present
                    </label>
                    <label for="absent4">
                        <input type="radio" id="absent4" name="attendance_status[4]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>
                    789
                    <input type="hidden" name="roll_no[]" value="789" />
                </td>
                <td>
                    Suraj Tiwari
                    <input type="hidden" name="student_name[]" value="Suraj Tiwari" />
                </td>
                <td>
                    <label for="present5">
                        <input type="radio" id="present5" name="attendance_status[5]" value="Present"> Present
                    </label>
                    <label for="absent5">
                        <input type="radio" id="absent5" name="attendance_status[5]" value="Absent"> Absent
                    </label>
                </td>
            </tr>
             
        </tbody>
    </table>
     
    <br/>
    <input type="submit" name="submit" value="Mark Attendance" />
</form>
</table>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    foreach ($_POST['attendance_status'] as $id => $attendance_status)
    {
		$servername="localhost";
	$username="root";
	$password='';
	$dbname="attendance";
	$conn=mysqli_connect($servername,$username,$password,$dbname);
        $roll_no = $_POST['roll_no'][$id];
        $student_name = $_POST['student_name'][$id];
        $date_created = date('Y-m-d H:i:s');
        $date_modified = date('Y-m-d H:i:s');
		$sql="INSERT INTO attendence (roll_no, student_name, data_created, data_modified, attendance_status) VALUES ('$roll_no', '$student_name', '$date_created', '$date_modified', '$attendance_status')";
	$result=mysqli_query($conn,$sql);
	if($result){
		echo "Successfully added";
	}else{
		echo "it has problem in inserting value in Student table.".mysqli_error($conn);
	}
	}
}	
?>