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
          <h1><a href="../index.php">Student Data Management System</a></h1>
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
  
  <div class="dashbord">
    <table style="width:40%" align="center">
    <tr>
	    <td><font size =15px>1.</font></td><td><a href="addstudent.php"><font size =5px> Insert Student Deatails</font></a></td>
		</tr>
		 <td><font size =15px>2.</font></td><td><a href="updatestudent.php"><font size =5px> Update Student Deatails</font></a></td>
		</tr>
		 <td><font size =15px>3.</font></td><td><a href="deletestudent.php"><font size =5px> Delete Student Deatails</font></a></td>
		</tr>
		</table>
		</div>
		
  
  </body>
  </html>
  