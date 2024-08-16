<?php
if($_SERVER['SERVER_NAME']!="localhost"){
	$hostname="co0pontape.db.9377262.hostedresource.com";
	$username="co0pontape";
	$password="Subarusti82";
	$dbname="co0pontape";
	$usertable="guestbook";
	
	$Name = $_POST['Name'];
	$Comment = $_POST['Comment'];
	$current_date = date('Y-m-d');
	
	$spam_stopper = $_POST['Address'];

	mysql_connect($hostname,$username, $password);
	mysql_select_db($dbname);

	session_start();

	if(
		(@strtolower($_POST['code']) == strtolower($_SESSION['random_number']))
		&& $spam_stopper == "http://"
		&& strpos($Comment, "http") === false
	) {		
		$query = "INSERT INTO $usertable (Name, Comment, Date) VALUES ('".$Name."','".$Comment."','".$current_date."')";
		$result = mysql_query($query);
		$query_get = "SELECT * FROM ".$usertable;
		$result_get = mysql_query($query_get);
		$num = mysql_numrows($result_get);

		$headers = "From: wedding@smilesandsmallz.com\r\n" . "X-Mailer: php";
		$to = "notifications@smilesandsmallz.com";	
		$subject = "Someone has posted in our guestbook!";		
		$body = "Someone with the name of ".$Name." has posted in our guestbook.";		
		mail($to, $subject, $body, $headers);		
	} else {
		$num = 0;
	}
}	

$i = 0;
while ($i < $num) {
	$name = mysql_result($result_get,$i,"Name");
	$comment = mysql_result($result_get,$i,"Comment");
	$date = mysql_result($result_get,$i,"Date");
	$i++;
}		
?>
<?php if($num != 0) { ?>
	<div></div>
	<?php /*
	<div class="comment_div">	
		<div class="comment_name">
			<?php echo $name; ?>
		</div>
		<div class="comment">
			<?php echo $date; ?>
		</div>		
		<div class="comment">
			<?php echo $comment; ?>
		</div>	
	</div>
	*/ ?>			
<?php
	} else { 
		echo 0; // invalid code
	} 	
?>