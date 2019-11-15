<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>

<html lang="en_US">
<head>
<meta charset="UTF-8">
<title> Admin Login</title>
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
         
		  <li><a href="login.php">Admin</a></li>
		<li><a href="loginout.php">Logout</a></li>
		   <li><a href="about.php">About</a></li>
          
          
        </ul>
      </section>
    </nav>





    <form method="post" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">User Id</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="right-label" placeholder="mahendra********@gmail.com" name="uname">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Password</label>
            </div>
            <div class="small-8 columns">
              <input type="password" id="right-label" name="pass">
            </div>
          </div>

          <div class="row">
            <div class="small-4 columns">

            </div>
            <div class="small-8 columns">
              <input type="submit" id="right-label" name="login" value="Login" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
              <input type="reset" id="right-label" value="Reset" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>


    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy;Student Data Management System. All Rights Reserved.</p>
        </footer>

      </div>
    </div>
 </body>
</html>


<?php 
include('dbcon.php');

if(isset($_POST['login']))
{
	$username=$_POST['uname'];
	$password=$_POST['pass'];
	$qry="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password' ";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);

	if($row<1)
    {
		?>
		<script>
	    alert('username or password not match !!!');
		window.open('login.php''_self');
		<?php
	}	
	else
	{
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
		
	}
}
?>