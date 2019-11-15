<?php
$connect=mysqli_connect("localhost","root", "");

if(!connect)
	{ 
		die('Connection Failed'.mmysql_error());
		 {
		 	mysql_select_db("Register", $connect)
		 };
		
		$db=mysql_select_db("Register", $connection);

if(isset($_POST['Submit']))
	{
		$Fname=$_POST['fristname'];
		$Lname=$_POST['lastname'];
		$Email=$_POST['email id'];
	}
