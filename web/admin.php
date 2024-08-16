<?php $page = "admin"; ?>
<?php include("include/header.php"); ?>

	<style>
		form {
			padding: 5px 0px;
		}
		input {
			width: 200px;
		}
	</style>

	<div id="content" class="<?php echo $page; ?>">
	
		<div id="content_full" class="<?php echo $page; ?>">
		
			<div id="content_box" class="<?php echo $page; ?>">
		
				<form id="form_admin" name="form_admin" action="admin_complete.php" method="post">
					<div class="label">
						Password:
					</div>
					<input type="text" name="admin_password" />
					<br/><br/>														
					<input id="submit_admin" type="submit" value="Submit" class="submit" />	
					<div id="submit_admin_loader" class="submit_loader"></div>
				</form>				
				
			</div>				
		
		</div>
		
	</div>

<?php include("include/footer.php"); ?>		