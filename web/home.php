<?php $page = "home"; ?>
<?php include("include/header.php"); ?>

	<div id="content" class="<?php echo $page; ?>">

		<div id="content_left" class="<?php echo $page; ?>">
			<div id="content_box">
				<?php if($showwedding == "true"){ ?>
					<p>
						Hello everyone!
					</p>
					<p>
						Thanks for visiting the Smiles and Smallz wedding website! We look forward to celebrating our big day with our family and friends. 
					</p>
					<p>
						For those of you who will not be able to make it to our wedding we thought this will be a great way for us to share our experiences with you. For those of you who will be attending our wedding on April 23rd 2013, all of the information about us, the wedding and trip information will be available for you here.
					</p>
					<p>
						Be sure to sign our Guest Book and should you have any questions, please email us at <a href="mailto:wedding@smilesandsmallz.com">wedding@smilesandsmallz.com</a>
					</p>
					<p>
						Please check back often as we will be updating our website!
					</p>			
					<p id="wedding_countdown">
						Counting down to our wedding date !<br/>						
						<div id="defaultCountdown"></div>
					</p>
				<?php } else { ?>	
					<p>
						Hello everyone!
					</p>
					<p>
						Thanks for visiting the Smiles and Smallz website!
					</p>
					<p>
						We've created this website to share our story with you. Please feel free to browse our pages and sign our guest book.
					</p>
				<?php } ?>
			</div>	
		</div>
	
	</div>

<?php include("include/footer.php"); ?>