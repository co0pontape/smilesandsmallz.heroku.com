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
	//$Password = $_POST['Password'];

	$results = mysql_query("select * from $usertable WHERE Email='".$Email."'");
	//$results = mysql_query("select * from $usertable WHERE Email='".$Email."' AND Password='".$Password."'");	

	$row = mysql_fetch_array($results);	
}	

if($results === FALSE || $row['FName'] == "") {
	//die(mysql_error("error message for the user")); 	
	echo "We cannot find the email you entered in our database. Please submit a new RSVP or <a href='mailto:wedding@smilesandsmallz.com'>email us</a> to see if we can manually find your email.";
	//echo "You have entered an invalid email and/or password. Please submit a new RSVP or try sending your email the password if you've forgotten it. Sorry for any inconvenience.";
} else {	
?>
	<div class="label">
		First Name:
	</div>
	<input type="text" name="FName" value="<?php echo $row['FName']; ?>" validate="form_rsvp_new" require="<b>Required Field Missing</b><br/>Please enter your first name." />
	<br/><br/>
	<div class="label">
		Last Name:
	</div>
	<input type="text" name="LName" value="<?php echo $row['LName']; ?>" validate="form_rsvp_new" require="<b>Required Field Missing</b><br/>Please enter your last name." />
	<br/><br/>					
	<div class="label">
		Mailing Address:
	</div>
	<textarea name="Address" validate="form_rsvp_new" require="<b>Required Field Missing</b><br/>Please enter your mailing address."><?php echo $row['Address']; ?></textarea>
	<br/><br/>					
	<div class="label">
		Phone Number:
	</div>
	<input type="text" name="PhoneNumber" value="<?php echo $row['PhoneNumber']; ?>" validate="form_rsvp_new" require="<b>Required Field Missing</b><br/>Please enter your phone number." />
	<br/><br/>					
	<div class="label">
		Cruise - Room Number:
	</div>
	<input  type="text" name="RoomNumber" value="<?php echo $row['RoomNumber']; ?>" />
	<br/><br/>			
	<div class="label">
		Please indicate if you will be bringing a guest:
	</div>						
	<input type="radio" class="short" name="Guest" value="yes" onclick="showSection('guest_name_input');" <?php if($row['Guest']=="yes") echo "checked" ; ?> /> Yes
	<input type="radio" class="short" name="Guest" value="no" onclick="hideSection('guest_name_input');" <?php if($row['Guest']=="no") echo "checked" ; ?> /> No
	<br/><br/>
	<div id="guest_name_input" <?php if($row['Guest']=="yes") echo "style='display:block;'" ; ?>>
		<div class="label">
			If yes, please enter his or her name:
		</div>
		<input type="text" name="GuestName" value="<?php echo $row['GuestName']; ?>" />
		<br/><br/>
	</div>
	<div class="label">
		Please indicate if you are coming alone and will be needing a roommate:
	</div>						
	<input type="radio" class="short" name="Roommate" value="yes" <?php if($row['Roommate']=="yes") echo "checked" ; ?> /> Yes
	<input type="radio" class="short" name="Roommate" value="no" <?php if($row['Roommate']=="no") echo "checked" ; ?> /> No
	<br/><br/>							
	<div class="label">
		Any additional comments or requests?
	</div>
	<textarea name="Comments"><?php echo $row['Comments']; ?></textarea>
	<br/><br/>								
	<input type="checkbox" class="short" name="Notifications" value="yes" <?php if($row['Notifications']=="yes") echo "checked" ; ?> /> Check this checkbox if you wish to receive email notifications on airfare price alerts, alerts to pre-reserve shows on the cruise or anything we may deem useful for our guests. 
	<br/><br/>				
	<input type="checkbox" class="short" name="Cancel" value="cancel" /> Check this checkbox if you wish to cancel your RSVP. 
	<br/><br/>					
	<input type="hidden" name="Edit" value="true" />
	<input type="hidden" name="Email" value="<?php echo $Email ?>" />
	<?php /* <input type="hidden" name="Password" value="<?php echo $Password ?>" /> */ ?>
	<input id="submit_new" type="submit" value="Submit" class="submit" onclick="return validate('form_rsvp_new');" />
	<div id="submit_new_loader" class="submit_loader"></div>
<?php } ?>	