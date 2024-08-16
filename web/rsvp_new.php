<?php
if($_SERVER['SERVER_NAME']!="localhost"){
	$hostname="co0pontape.db.9377262.hostedresource.com";
	$username="co0pontape";
	$password="Subarusti82";
	$dbname="co0pontape";
	$usertable="rsvp";
	
	$Edit = $_POST['Edit'];
	$FName = $_POST['FName'];
	$LName = $_POST['LName'];
	$Address = $_POST['Address'];
	$PhoneNumber = $_POST['PhoneNumber'];
	$RoomNumber = $_POST['RoomNumber'];
	$Email = $_POST['Email'];	
	$Guest = $_POST['Guest'];	
	$GuestName = $_POST['GuestName'];	
	$Comments = $_POST['Comments'];	
	$Roommate = $_POST['Roommate'];		
	//$Password = $_POST['Password'];	
	$Notifications = $_POST['Notifications'];	
	$Cancel = $_POST['Cancel'];		

	mysql_connect($hostname,$username, $password);
	mysql_select_db($dbname);

	if($Edit == "true") {
		if($Cancel == "cancel") {
			$Attending = "No";
		} else {
			$Attending = "Yes";
		}
		$query = "UPDATE $usertable SET Attending = '".$Attending."', FName = '".$FName."', LName = '".$LName."', Address = '".$Address."', PhoneNumber = '".$PhoneNumber."', RoomNumber = '".$RoomNumber."', Guest = '".$Guest."', GuestName = '".$GuestName."', Roommate = '".$Roommate."', Comments = '".$Comments."', Notifications = '".$Notifications."' WHERE Email='".$Email."'";
		//$query = "UPDATE $usertable SET FName = '".$FName."', LName = '".$LName."', Address = '".$Address."', PhoneNumber = '".$PhoneNumber."', RoomNumber = '".$RoomNumber."', Notifications = '".$Notifications."' WHERE Email='".$Email."' AND Password='".$Password."'";
		$subject = "Someone has edited their RSVP!";
		$body = "Someone with the email address of ".$Email." has edit their RSVP.";
	} else {
		$query = "INSERT INTO $usertable (Attending, FName, LName, Address, PhoneNumber, RoomNumber, Email, Guest, GuestName, Roommate, Comments, Notifications) VALUES ('Yes','".$FName."','".$LName."','".$Address."','".$PhoneNumber."','".$RoomNumber."','".$Email."','".$Guest."','".$GuestName."','".$Roommate."','".$Comments."','".$Notifications."')";
		//$query = "INSERT INTO $usertable (FName, LName, Address, PhoneNumber, RoomNumber, Email, Password, Notifications) VALUES ('".$FName."','".$LName."','".$Address."','".$PhoneNumber."','".$RoomNumber."','".$Email."','".$Password."','".$Notifications."')";
		$subject = "Someone new has RSVP'd!";		
		$body = "Someone with the email address of ".$Email." has RSVP'd.";
	}	
	
	$result = mysql_query($query);
	
	$headers = "From: wedding@smilesandsmallz.com\r\n" . "X-Mailer: php";
	$to = "notifications@smilesandsmallz.com";	
	mail($to, $subject, $body, $headers);

}	
?>