
 <?php
session_start();
   if(isset($_SESSION['uid']))
   {
	   echo "";
   }
   else
   {
	   header('location: ../login.php');
   }
?>
 <?php
include('header.php');
?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Student Data Management System</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Student Data Management System</a></h1>
		    </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
        
		  <li><a href="../login.php">Admin</a></li>
		   <li><a href="../about.php">About</a></li>
          <li><a href="../loginout.php">Logout</a></li>
         
        </ul>
      </section>
    </nav>

 <div class="admintitle" align="center">
   <h1>Welcome to Admin Dashboard</h1>
  </div>
  <form method="post" action="addstudent.php" enctype="multipart/form-date">
<table align="center" border="1" style="width:70%; margin-top:40px">
	<tr>
		<th>ID</th>
		<td> <input type="text" name="id" placeholder="Enter the Id" required>        </td>
	</tr>
	<tr>
		<th>Roll No</th>
		<td><input type="text" name="rollno" placeholder="Enter the Roll no" required></td>
	</tr>
	<tr>
	<tr>
	
		
		<th>Name</th>
		<td><input type="text" name="name" placeholder="Enter the name" required></td>
	</tr>
	<tr>
		<th>Parents Contact No</th>
		<td><input type="text" name="number" placeholder="Enter the Contact no fo parents" required></td>
	</tr>
	
	
	</tr>
	<tr>
		<th>Enter the year</th>
		<td><input type="text" name="year" placeholder="Enter the year" required></td>
	</tr>
	</tr>
	<tr>
		<th>Enter Marks</th>
		<td><input type="text" name="marks" placeholder="Enter the marks" required></td>
	</tr>
	
      <td colspan="2"><label>
        <div align="center">

	<input type="submit"   align="center" id="right-label" name="submit" value="Submit" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       
	

	<input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
     























        </div>
      </label></td>
    </tr>
		
		
	
</table>
</form>
</body>
</html>
<?php
include_once('dbcon.php');
if(isset($_REQUEST['submit']))
{
	$id=$_REQUEST['id'];
	$rollno=$_REQUEST['rollno'];
	$name=$_REQUEST['name'];
	$mobile_number=$_REQUEST['number'];
	$year=$_REQUEST['year'];
	$marks=$_REQUEST['marks'];
	
	mysqli_query($con,"insert into student values('$id','$rollno','$name','$mobile_number','$year','$marks')");
	if($con == true)
	{
	echo "Data will Successfully insert";
	}
	else
	{
	echo "not data insert ";
	}


}
?>
  
  
		 
	