<?php
if($_SERVER['SERVER_NAME']!="localhost"){
	$hostname="co0pontape.db.9377262.hostedresource.com";
	$username="co0pontape";
	$password="Subarusti82";
	$dbname="co0pontape";
	$usertable="rsvp";

	mysql_connect($hostname,$username, $password);
	mysql_select_db($dbname);
	
	$Email = $_POST['Email'];	
	$FName = $_POST['FName'];
	$LName = $_POST['LName'];
	$Comments = $_POST['Comments'];

	$results = mysql_query("select * from $usertable WHERE Email='".$Email."'");

	$row = mysql_fetch_array($results);	
}	

if($results === TRUE || $row['FName'] != "") {
	echo "Your email has already submitted a RSVP. Please click on RSVP from the menu to make changes to your RSVP.";
} else {	
	$query = "INSERT INTO $usertable (Attending, FName, LName, Email, Comments) VALUES ('No', '".$FName."','".$LName."','".$Email."','".$Comments."')";
	$results = mysql_query($query);
	
	$subject = "Someone new has RSVP'd No =(";		
	$body = "Someone with the email address of ".$Email." has RSVP'd No =(";
	$headers = "From: wedding@smilesandsmallz.com\r\n" . "X-Mailer: php";
	$to = "notifications@smilesandsmallz.com";	
	mail($to, $subject, $body, $headers);	
	
	echo "We're sorry to hear you cannot make it. Thanks for RSVPing.";

} 
?>	