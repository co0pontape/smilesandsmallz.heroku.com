<?php $page = "rsvp"; ?>
<?php include("include/header.php"); ?>
<?php
if($_SERVER['SERVER_NAME']!="localhost"){
	$hostname="co0pontape.db.9377262.hostedresource.com";
	$username="co0pontape";
	$password="Subarusti82";
	$dbname="co0pontape";
	$usertable="rsvp";
	$yourfield = "FName";

	mysql_connect($hostname,$username, $password);
	mysql_select_db($dbname);

	$query = "SELECT * FROM $usertable";
	$result = mysql_query($query);
}	
?>

<?php /*
if($result)
{
while($row = mysql_fetch_array($result))
{
$name = $row["$yourfield"];
echo "Name: ".$name."<br>";
}
} */
?>
<style>
	form {
		display: none;
		padding: 5px 0px;
	}
	#rsvp_options_div {
		padding-top: 10px;
	}
	.rsvp_options {
		padding: 5px 0px;
	}	
	#guest_name_input {
		display: none;
	}
</style>
<div id="content" class="<?php echo $page; ?>">
	
		<div id="content_left">
			<div id="content_box">
				<div class="content_subtext">
					<div id="rsvp_options_div">
						<div id="rsvp_options_new" class="rsvp_options">
							<input type="radio" name="rsvp_type" class="short" value="new" /> Yes I'm coming and I want to RSVP !
						</div>	
						<div id="rsvp_options_no" class="rsvp_options">
							<input type="radio" name="rsvp_type" class="short" value="no" /> I cannot make it and I want to RSVP no =(
						</div>						
						<div id="rsvp_options_edit" class="rsvp_options">
							<input type="radio" name="rsvp_type" class="short" value="edit" /> I want to edit my RSVP !
						</div>
					</div>	
					<p id="rsvp_instructions"></p>
					<form id="form_rsvp_no" name="form_rsvp_no" action="rsvp_no.php" method="post">
						<div class="label">
							First Name:
						</div>
						<input type="text" name="FName" validate="form_rsvp_no" require="<b>Required Field Missing</b><br/>Please enter your first name." />
						<br/><br/>
						<div class="label">
							Last Name:
						</div>
						<input type="text" name="LName" validate="form_rsvp_no" require="<b>Required Field Missing</b><br/>Please enter your last name." />
						<br/><br/>					
						<div class="label">
							Email:
						</div>
						<input id="rsvp_no_email" type="text" name="Email" validate="form_rsvp_no" require="<b>Required Field Missing</b><br/>Please enter your email." email="<b>Invalid Email Address</b><br/>Email address must be in the form of example@address.com" />
						<br/><br/>			
						<div class="label">
							Comments?
						</div>
						<textarea name="Comments"></textarea>
						<br/><br/>																
						<input id="submit_no" type="submit" value="Submit" class="submit" onclick="return validate('form_rsvp_no');" />	
						<div id="submit_no_loader" class="submit_loader"></div>
					</form>									
					<form id="form_rsvp_edit" name="form_rsvp_edit" action="rsvp_edit.php" method="post">
						<div class="label">
							Email:
						</div>
						<input id="rsvp_edit_email" type="text" name="Email" validate="form_rsvp_edit" require="<b>Required Field Missing</b><br/>Please enter your email." email="<b>Invalid Email Address</b><br/>Email address must be in the form of example@address.com" />
						<br/><br/>			
						<?php /*
						<div class="label">
							Password:
						</div>
						<input type="password" name="Password" validate="form_rsvp_edit" require="<b>Required Field Missing</b><br/>Please enter your password." regular="<b>Invalid Password</b><br/>The password must be 6 characters or longer." validExpress=".{6,}" />
						<br/><br/>																
						<div id="forgot_password_div">
							I forgot my password ! Email it to the address I've entered above <a id="forgot_password_link" href="#">now</a> !
						</div>
						<br/>
						*/ ?>
						<input id="submit_edit" type="submit" value="Submit" class="submit" onclick="return validate('form_rsvp_edit');" />	
						<div id="submit_edit_loader" class="submit_loader"></div>
					</form>				
					<form id="form_rsvp_new" name="form_rsvp_new" action="rsvp_new.php" method="post">
						<div class="label">
							First Name:
						</div>
						<input type="text" name="FName" validate="form_rsvp_new" require="<b>Required Field Missing</b><br/>Please enter your first name." />
						<br/><br/>
						<div class="label">
							Last Name:
						</div>
						<input type="text" name="LName" validate="form_rsvp_new" require="<b>Required Field Missing</b><br/>Please enter your last name." />
						<br/><br/>					
						<div class="label">
							Mailing Address:
						</div>
						<textarea name="Address" validate="form_rsvp_new" require="<b>Required Field Missing</b><br/>Please enter your mailing address."></textarea>
						<br/><br/>					
						<div class="label">
							Phone Number:
						</div>
						<input type="text" name="PhoneNumber" validate="form_rsvp_new" require="<b>Required Field Missing</b><br/>Please enter your phone number." />
						<br/><br/>					
						<div class="label">
							Cruise - Room Number:
						</div>
						<input type="text" name="RoomNumber" />
						<br/><br/>											
						<div class="label">
							Email:
						</div>
						<input type="text" name="Email" validate="form_rsvp_new" require="<b>Required Field Missing</b><br/>Please enter your email." email="<b>Invalid Email Address</b><br/>Email address must be in the form of example@address.com" />
						<br/><br/>				
						<div class="label">
							Please indicate if you will be bringing a guest:
						</div>						
						<input type="radio" class="short" name="Guest" value="yes" onclick="showSection('guest_name_input');" /> Yes
						<input type="radio" class="short" name="Guest" value="no" onclick="hideSection('guest_name_input');" checked /> No
						<br/><br/>
						<div id="guest_name_input">
							<div class="label">
								If yes, please enter his or her name:
							</div>
							<input type="text" name="GuestName" />
							<br/><br/>																	
						</div>	
						<div class="label">
							Please indicate if you are coming alone and will be needing a roommate:
						</div>						
						<input type="radio" class="short" name="Roommate" value="yes" /> Yes
						<input type="radio" class="short" name="Roommate" value="no" checked /> No
						<br/><br/>						
						<div class="label">
							Any additional comments or requests?
						</div>
						<textarea name="Comments"></textarea>
						<br/><br/>										
						<?php /*
						<div class="label">
							Password:
						</div>
						<input type="password" name="Password" validate="form_rsvp_new" require="<b>Required Field Missing</b><br/>Please enter your desired password." regular="<b>Invalid Password</b><br/>The password must be 6 characters or longer." validExpress=".{6,}" />
						<br/><br/>			
						*/ ?>
						<input type="checkbox" class="short" name="Notifications" value="yes" /> Check this checkbox if you wish to receive email notifications on airfare price alerts, alerts to pre-reserve shows on the cruise or anything we may deem useful for our guests. 
						<br/><br/>			
						<input type="hidden" name="Edit" value="false" />						
						<input id="submit_new" type="submit" value="Submit" class="submit" onclick="return validate('form_rsvp_new');" />
						<div id="submit_new_loader" class="submit_loader"></div>												
					</form>	
				</div>
			</div>	
		</div>
		
		<div id="content_right">
			<div class="image_thumbnail">
				<div class="img"><a href="#"><img src="<?php echo $baseUrl?>images/rsvp.png" width="350" /></a></div>	
			</div>							
		</div>		

	</div>

<?php include("include/footer.php"); ?>