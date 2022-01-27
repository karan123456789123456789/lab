<html>
<head>
<script language="javascript">
     function validate()
{
  var name=document.reg.fn.value;
  var session=document.reg.session.value;
    var rn=document.reg.rn.value;
    var branch=document.reg.branch.value;
     var year=document.reg.year.value;
      var semester=document.reg.semester.value;
       

          var address=document.reg.address.value;

if(fname=='')
  {
    window.alert("Please Enter fname!");
    document.reg.fn.focus();
    return false;

 }
 if(session=='')
  {
    window.alert("Please Select Session!");
    document.reg.session.focus();
    return false;

 }
 if(rn=='')
  {
    window.alert("Enter Roll No!");
    document.reg.rn.focus();
    return false;

 }
 if(branch=='')
  {
    window.alert("Please Select Branch!");
    document.reg.branch.focus();
    return false;

 }
 </script>

</head>

<body>


<center>
<form method="POST" action="" name="reg" onSubmit="return validate()">
<table border="5" bgcolor="pink"> <h1 ><font color="blue"><b>STUDENT INFORMATION SYSTEM</b></font></h1><br><a href="index.php">HOME</a>&nbsp&nbsp&nbsp&nbsp<a href="update.php">UPDATE</a>&nbsp&nbsp&nbsp&nbsp<a href="delete.php">DELETE</a>&nbsp&nbsp&nbsp&nbsp<a href="search.php">SEARCH</a><br><br></center>

        <tr>
		<td> NAME:</td>
		<td><input type="text" name="fn" /></td>
	</tr>
	<
<tr>
		<td>SESSION:</td>
 <td>
<select name="session">
<option >Select Session</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>

</select>

</tr>
	<tr>
		<td>ROLL NO:</td>
		<td><input type="text" name="rn" ></td>
	</tr>
	<tr>
		<td>BRANCH</td>
<td>
<select name="branch">
<option >Select Branch</option>
<option value="BIM">BIM</option>
<option value="CSIT">CSIT</option>
<option value="BCA">BCA</option>
<option value="BBS">BBS</option>
<option value="BBM">BBM</option>
</select>
</td>
</tr>

<tr>
		<td>YEAR:</td>
<td>
<select name="year">
<option >Select Year</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD </option>
<option value="FOURTH">FOURTH</option>
</select>
</td></tr>

<tr>
		<td>SEMESTER:</td>
<td>
<select name="semester">
<option >Select Semester</option>
<option value="FIRST">FIRST</option>
<option value="SECOND">SECOND</option>
<option value="THIRD">THIRD</option>
<option value="FOURTH">FOURTH</option>
<option value="FIFTH">FIFTH</option>
<option value="SIX">SIX</option>
<option value="SEVENTH">SEVENTH</option>
<option value="EIGHT">EIGHT</option>
</select>
</td>
</tr>

<tr>
		<td>ADDRESS:</td>
		<td><input type="text" name="address" /></td>
	</tr>

	
		<td><input type="submit" name="submit" value="insert" /></td>
		<td><input type="submit" name="submit" value="delete" /></td>
		<td><input type="submit" name="submit" value="update" /></td>
	</tr>
 </table>
</form>
</body>
</html>
