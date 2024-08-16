<?php

	$Email = $_POST['email'];

	if($_SERVER['SERVER_NAME']!="localhost"){
		$hostname="co0pontape.db.9377262.hostedresource.com";
		$username="co0pontape";
		$password="Subarusti82";
		$dbname="co0pontape";
		$usertable="rsvp";

		mysql_connect($hostname,$username, $password);
		mysql_select_db($dbname);
		
		$results = mysql_query("select Password from $usertable WHERE Email='".$Email."'");
	}	

	if($Email != "") {
		$to = $Email;
	} else {
		$to = "co0pontape@gmail.com";
	}	
	$subject = "Hi!";
	while ($row = mysql_fetch_array($results)) {
		$body = "Hi,\n\nHere is your password: ".$row['Password'];		
	}
	$headers = "From: wedding@smilesandsmallz.com\r\n" . "X-Mailer: php";
	if (mail($to, $subject, $body, $headers)) {
		echo("Password sent!");
	} else {
		echo("Password delivery failed...");
	}
	
?>