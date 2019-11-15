
<?php
include('dbcon.php');

?>


 

<html>
  <head>
   
    <title>Student Data Management System</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
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
          <li><a href="find.php">find Student information</a></li>
		  <li><a href="login.php">Admin</a></li>
		   <li><a href="about.php">About</a></li>
          <li><a href="loginout.php">Logout</a></li>
         
        </ul>
      </section>
    </nav>
	<html>

<h1 align="center">Welcome to Student Mamagement System</h1>
<form method="post"  >
<table style="width:30%;" align="center" border="1">
	<tr>	
	<td colspan="2"> Student Information</td>
	</tr>
	<tr>
                        <td align="left">Choose Standerd</td>
                        <td>
	              <select name="std" required>
		<option value="BCA 1">BCA 1</option>
		<option value="BCA 2">BCA 2</option>
		<option value="BCA 3">BCA 3</option>
                                </select>
	         </td>
	</tr>
	<tr>
	     <td align="left">Enter Rollno</td>
	          <td><input type="text" name="rollno" required></td>
	       </tr>
	<tr>
	<td colspan="2" align="center"><input type="submit" name="submit" value="show info"></td>
</table>
</form>

<?php
if(isset($_REQUEST['submit']))
{
$std = $_REQUEST['std'];
$roll = $_REQUEST['rollno'];
$query = mysqli_query($con, "select * from student where rollno = '$roll'and year='$std'");
$res = mysqli_fetch_array($query);

if($res>0)
{
include_once('information.php');
}
else
{
	
include_once('noinformation.php');
	
	
}
}


?>

	
    
    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; Student Data Management System. All Rights Reserved.</p>
        </footer>

      </div>
    </div>





    
  </body>
</html>
