
 <?php


if(isset($_REQUEST['submit']))
{
$std = $_REQUEST['std'];
$roll = $_REQUEST['rollno'];
$query = mysqli_query($con, "select * from student where rollno = '$roll'and year='$std'");
$res = mysqli_fetch_array($query);
}


?>
 
<html>
<body>
<h1 align="center">The all information of Student is given </h1>
  <form method="post" action="addstudent.php" enctype="multipart/form-date">
<table align="center" border="1" style="width:70%; margin-top:40px">
	<tr>
		<th>ID</th>
		<td> <input type="text" name="id" placeholder="Enter the Id" required value = "<?php echo $res['id']; ?> "       </td>
	</tr>
	<tr>
		<th>Roll No</th>
		<td><input type="text" name="rollno" placeholder="Enter the Roll no" required value = "<?php echo $res['rollno']; ?> " ></td>
	</tr>
	<tr>
	<tr>
	
		
		<th>Name</th>
		<td><input type="text" name="name" placeholder="Enter the name" required value = "<?php echo $res['name']; ?> " ></td>
	</tr>
	<tr>
		<th>Parents Contact No</th>
		<td><input type="text" name="number" placeholder="Enter the Contact no fo parents" required value = "<?php echo $res['mobile_number']; ?> " ></td>
	</tr>
	
	
	</tr>
	<tr>
		<th>Enter the year</th>
		<td><input type="text" name="year" placeholder="Enter the year" required value = "<?php echo $res['year']; ?> " ></td>
	</tr>
	</tr>
	<tr>
		<th>Enter Marks</th>
		<td><input type="text" name="marks" placeholder="Enter the marks" required value = "<?php echo $res['marks']; ?> " ></td>
	</tr>
	
      
		
		
	
</table>
</form>
</body>
</html>

  
  
		 
	