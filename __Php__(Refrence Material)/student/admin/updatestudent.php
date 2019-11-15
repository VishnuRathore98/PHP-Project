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
            <h1><a href="../index.php">Student Data Management System</a></h1>
	
		    </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
         
		  <li><a href="../login.php">Admin</a></li>
<li><a href="../loginout.php">Logout</a></li>
		   <li><a href="../about.php">About</a></li>
          
         
        </ul>
      </section>
    </nav>

 <div class="admintitle" align="center">
   <h1>Update the Student Information</h1>
  </div>
  <form method="post" action="" enctype="multipart/form-date">
<table align="center" border="1" style="width:70%; margin-top:40px">
	<tr>
		<th>Enter the Student Roll No. </th>
		<td> <input type="text" name="rollno" placeholder="Enter Roll No" required >      

  </td>
	</tr>
	 
	
      <td colspan="2"><label>
        <div align="center">
         
	<input type="submit"   align="center" id="right-label" name="submit" value="Submit" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="submit"   align="center" id="right-label" name="update" value="Update Record" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        
	<input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
       </td>

	  </div>
      </label></td>
    </tr>
</table>



<?php
include_once('dbcon.php');
$rollno;

 if(isset($_REQUEST['update']))
	{
	  $rollno=$_REQUEST['rollno'];
	  $id = $_REQUEST['id'];
	  $roll = $_REQUEST['roll'];
	  $name = $_REQUEST['name'];
	  $number = $_REQUEST['number'];
	  $year = $_REQUEST['year'];
	  $marks = $_REQUEST['marks'];

		if(mysqli_query($con, "UPDATE student set id = '$id', rollno = '$roll', name = '$name'  where rollno = '$rollno'  "))
		{
		?> <script>alert("Record Updated Successfully..!!");</script><?php
		}
		else
		{
		?> <script>alert("Please Try Again Later..!!");</script><?php
		}       	 


 	}

if(isset($_REQUEST['submit']))
{
	
	
	$rollno=$_REQUEST['rollno'];
       	$query = mysqli_query($con,"select * from student where rollno='$rollno' ");
	$res = mysqli_fetch_array($query);
   
	

 
?>

<table align="center" border="1" style="width:70%; margin-top:40px">
	<tr>
		<th>ID</th>
    		<td> <input type="text" name="id" placeholder="Enter the Id" required value = "<?php echo $res['id']; ?> "       </td>
	</tr>
	<tr>
		<th>Roll No</th>
		<td><input type="text" name="roll" placeholder="Enter the Roll no" required value = "<?php echo $res['rollno']; ?> " ></td>
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
		
<?php } ?>


 
</form>
</body>
</html>

  
  
		 
	