<?php

	if($_SERVER['SERVER_NAME']!="localhost"){
		$hostname="co0pontape.db.9377262.hostedresource.com";
		$username="co0pontape";
		$password="Subarusti82";
		$dbname="co0pontape";
		$usertable="admin";
		
		$Password = $_POST['email_password'];

		mysql_connect($hostname,$username, $password);
		mysql_select_db($dbname);

		session_start();

		$password_check = mysql_query("select * from $usertable WHERE password='".$Password."'");
		$row = mysql_fetch_array($password_check);	
	}	

	if($password_check === FALSE || $row['password'] == "") {
		echo("Password you entered is incorrect! Please try again!");
	} else {
		$to = "notifications@smilesandsmallz.com";	

		$email_addresses = $_POST['email_addresses'];
		$email_all = $_POST['email_all'];
		$email_optedin = $_POST['email_optedin'];	
		$email_subject = $_POST['email_subject'];		
		$email_body = nl2br($_POST['email_body']);
		$email_attachment = $_POST['email_attachment'];				

		$usertable="rsvp";		
		$results = mysql_query("select * from $usertable");
		
		if($email_attachment != "") {
		
			$filename = $email_attachment;
			$path = $_SERVER['DOCUMENT_ROOT']."/files/";
			$mailto = $to;
			//$message = $email_body;
			$message = "Thank you for your order";
			
			$file = $path.$filename;
			$file_size = filesize($file);
			$handle = fopen($file, "r");
			$content = fread($handle, $file_size);
			fclose($handle);
			$content = chunk_split(base64_encode($content));
			$uid = md5(uniqid(time()));
			$name = basename($file);
			$header = "From: wedding@smilesandsmallz.com\r\n";
			$header .= "Reply-To: wedding@smilesandsmallz.com\r\n";
			$header .= "BCC: ";
			if($email_all != "" || $email_optedin != "") {
				while ($row = mysql_fetch_array($results)) {
					if($email_all == "yes" && $row['Attending'] == "Yes") {
						$header .= strip_tags($row['Email']) . ",";
					} else if($email_optedin == "yes" && $row['Notifications'] == "yes"){
						$header .= strip_tags($row['Email']) . ",";			
					}
				}
				$header .= "\r\n";
			} else {
				$header .= strip_tags($email_addresses) . "\r\n";
			}	
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
			$msg = "This is a multi-part message in MIME format.\r\n";
			$msg .= "–".$uid."\r\n";
			$msg .= "Content-type:text/plain; charset=iso-8859-1\r\n";
			$msg .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
			$msg .= $message."\r\n\r\n";
			$msg .= "–".$uid."\r\n";
			$msg .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
			$msg .= "Content-Transfer-Encoding: base64\r\n";
			$msg .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
			$msg .= $content."\r\n\r\n";
			$msg .= "–".$uid."–";
			global $mail_message;
			if (mail($mailto, $email_subject, $msg, $header)) {
				$mail_message = "Email sent!<input type='hidden' value='".$header."' />";
				echo $mail_message;
			} else {
				$mail_message = "Email delivery failed...<input type='hidden' value='".$header."' />";
				echo $mail_message;
			}			
						
		} else {
		
			$headers = "From: wedding@smilesandsmallz.com\r\n";
			$headers .= "Reply-To: wedding@smilesandsmallz.com\r\n";
			$headers .= "BCC: ";
			if($email_all != "" || $email_optedin != "") {
				while ($row = mysql_fetch_array($results)) {
					if($email_all == "yes" && $row['Attending'] == "Yes") {
						$headers .= strip_tags($row['Email']) . ",";
					} else if($email_optedin == "yes" && $row['Notifications'] == "yes"){
						$headers .= strip_tags($row['Email']) . ",";			
					}
				}
				$headers .= "\r\n";
			} else {
				$headers .= strip_tags($email_addresses) . "\r\n";
			}	
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";			
		
			if (mail($to, $email_subject, $email_body, $headers)) {
				echo("Email sent!<input type='hidden' value='".$headers."' />");
			} else {
				echo("Email delivery failed...<input type='hidden' value='".$headers."' />");
			}		
		}

	}	
	
?>