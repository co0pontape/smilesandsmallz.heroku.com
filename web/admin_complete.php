<?php

	if($_SERVER['SERVER_NAME']!="localhost"){
		$hostname="co0pontape.db.9377262.hostedresource.com";
		$username="co0pontape";
		$password="Subarusti82";
		$dbname="co0pontape";
		$usertable="admin";
		
		$Password = $_POST['admin_password'];

		mysql_connect($hostname,$username, $password);
		mysql_select_db($dbname);

		session_start();

		$password_check = mysql_query("select * from $usertable WHERE password='".$Password."'");
		$row = mysql_fetch_array($password_check);	
	}	

	if($password_check === FALSE || $row['password'] == "") {
		setcookie ("admin", "false", time() - 3600);
		echo("Password you entered is incorrect! Please try again!");
	} else {
		setcookie ("admin", "true");		
		echo("success");
	}	
	
?>