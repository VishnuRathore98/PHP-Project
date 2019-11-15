<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION))
{session_start();}


?>


<!doctype html>
<html class="no-js" lang="en">
  
<head>
    
<meta charset="utf-8" />
   
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
   <title>About Us ||Student Data Management System Shop</title>
  
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




 
   <div class="row" style="margin-top:30px;">
   
   <div class="small-12">
       
 <p>
Student Management System deals with all kind of student details, academic related reports,
 college details, course details, curriculum, batch details and other resource related
 details too. It tracks all the details of a student from the day one to the end of his 
course which can be used for all reporting purpose, progress in the course, completed 
semesters years, coming semester year curriculum details, exam details, project or any
 other assignment details, ?nal exam result etc. Our design can facilitate us to explore
 all the activities happening in the college, even we can get to know which faculty is 
assigned to which course, the current status of a student, attendance percentage of a 
student and upcoming requirements of a student. The student management system is an
 automated version of manual Student Management System. It can handle all details about
 a student. The details include college details, subject details, student personnel details,
 academic details, exam details etc. In case of manual system they need a lot of time,
 manpower etc. Here almost all work is computerized. So the accuracy is maintained.
 Maintaining backup is very easy. It can do with in a few minutes. Our system has two
 type of accessing modes, administrator and user. Student management system is managed
 by an administrator. It is the job of the administrator to insert update and monitor
 the whole process. When a user log in to the system. He/she would only view details of 
the student. He/she can’t perform any changes. Our system has seven modules, they are 
administrator, student, course, department, exam, attendance, and section. These modules
 and its attributes with entity relationship module presented in the ER diagram secion.
</p>

     
   

<footer>
        
   <p style="text-align:center; font-size:0.8em;">&copy; Student Data Management System. All Rights Reserved.</p>
        </footer>


      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
  
  <script src="js/foundation.min.js"></script>
   
 <script>
      $(document).foundation();
    </script>
 
 </body>

</html>
