<?php $page = "email"; ?>
<?php $isAdmin = "true"; ?>
<?php include("include/header.php"); ?>

	<style>
		form {
			padding: 5px 0px;
		}
		input.short {
			width: 25px;
		}
		textarea {
			width: 800px;
			height: 50px;
		}	
		input.medium {
			width: 500px;
		}
	</style>

	<div id="content" class="<?php echo $page; ?>">
	
		<div id="content_full" class="<?php echo $page; ?>">
		
			<div id="content_box" class="<?php echo $page; ?>">
		
				<form id="form_email" name="form_email" action="email_complete.php" method="post">
					<div>
						Email Addresses (separate by commas for additional emails):
					</div>
					<textarea id="email_addresses" name="email_addresses"></textarea>				
					<br/><br/>			
					<!--
					<input type="checkbox" class="short" name="email_all" value="yes" /> Check this checkbox if you wish to email everyone who rsvp'd.
					<br/><br/>							
					<input type="checkbox" class="short" name="email_optedin" value="yes" /> Check this checkbox if you wish to email everyone who opted in for notifications.
					<br/><br/>		
					-->
					<div class="label">
						Subject Line:
					</div>
					<input type="text" name="email_subject" class="medium" />
					<br/><br/>									
					<div class="label">
						Body Text:
					</div>
					<textarea id="email_body" name="email_body"></textarea>				
					<br/><br/>							
					<div class="label">
						Attachment File Name:
					</div>
					<input type="text" name="email_attachment" class="medium" />
					<br/><br/>																			
					<div class="label">
						Password to send email:
					</div>
					<input type="text" name="email_password" class="medium" />
					<br/><br/>														
					<input id="submit_email" type="submit" value="Submit" class="submit" />	
					<div id="submit_email_loader" class="submit_loader"></div>
				</form>				
				
			</div>				
		
		</div>
		
	</div>

<?php include("include/footer.php"); ?>		