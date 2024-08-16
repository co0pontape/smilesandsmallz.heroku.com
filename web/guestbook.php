<?php $page = "guestbook"; ?>
<?php include("include/header.php"); ?>
<?php
if($_SERVER['SERVER_NAME']!="localhost"){
	$hostname="co0pontape.db.9377262.hostedresource.com";
	$username="co0pontape";
	$password="Subarusti82";
	$dbname="co0pontape";
	$usertable="guestbook";
	
	mysql_connect($hostname,$username, $password);
	mysql_select_db($dbname);

	$query_get = "SELECT * FROM ".$usertable." ORDER BY DATE";
	$result_get = mysql_query($query_get);
	$num = mysql_numrows($result_get);
	/*
	if($num > 25) {
		$end = 25;
	} else {
		$end = 0;
	}
	*/
	$end = 0;
}	
?>

<div id="content" class="<?php echo $page; ?>">
	
		<div id="content_left" class="<?php echo $page; ?>">
		
			<div id="content_box">
				<?php
					$num--;
					while ($num > $end) {
						$published = mysql_result($result_get,$num,"Published");
						$name = mysql_result($result_get,$num,"Name");
						$comment = mysql_result($result_get,$num,"Comment");
						$date = mysql_result($result_get,$num,"Date");
						if($published == "Y") {
							echo "<div class='comment_div'>";
							echo "<div class='comment_name'>";
							echo strip_tags($name);
							echo "</div>";
							echo "<div class='comment'>";
							echo $date;
							echo "</div>";						
							echo "<div class='comment'>";
							echo strip_tags($comment);
							echo "</div>";
							echo "</div>";
						}	
						$num--;
					}
				?>
			</div>
			
		</div>
		
		<div id="content_right" class="<?php echo $page; ?>">
			
			<div id="content_box">
<?php /*
				<div class="content_title">				
					Sorry guest book is down at the moment ... need to fight off some hacker injecting virus links ... be back soon !
				</div>							
*/ ?>								
				<div class="content_title">				
					Please Sign our guest book !
				</div>				
				<div class="content_subtext">
					<form id="form_guestbook" name="form_guestbook" action="guestbook_complete.php" method="post">
						<div class="label">
							Name:
						</div>
						<input type="text" name="Name" validate="form" require="<b>Required Field Missing</b><br/>Please enter your name." />
						<br/><br/>
						<div class="label">
							Comment (no html or links):
						</div>
						<textarea name="Comment" validate="form" require="<b>Required Field Missing</b><br/>Please enter your comment."></textarea>
						<br/><br/>				
						<div class="label">
							Are you a hacker? If not, enter the code below:
						</div>
						<img src="get_captcha.php" alt="" id="captcha" />							
						<img src="<?php echo $baseUrl?>images/refresh2.png" width="25" alt="" id="capcha_refresh" />						
						<input name="code" type="text" id="code">						
						<br/><br/>					
						<!-- The following code is invisible to humans and
							 contains some trap text fields                -->
						<div style="display: none">
							If you can read this, don't touch the following text fields.<br>
							<input type="text" name="Address" value="http://"><br>
							<input type="text" name="Contact" value=""><br>
							<textarea cols="40" rows="6" name="Email"></textarea>
						</div>
						<!-- End spam bot trap -->												
						<input id="submit" type="submit" value="Submit" class="submit" onclick="return validate('form');" />
						<div id="submit_loader" class="submit_loader"></div>
						<div id="message"></div>						
					</form>						
				</div>		
				
			</div>	
			<div class="image_thumbnail">
				<div class="img"><a href="#"><img src="<?php echo $baseUrl?>images/guestbook.png" width="350" /></a></div>	
				<br/><br/><br/><br/><br/><br/>
				<div class="img"><a href="#"><img src="<?php echo $baseUrl?>images/guestbook2.png" width="350" /></a></div>				
				<br/><br/><br/><br/><br/><br/>
				<div class="img"><a href="#"><img src="<?php echo $baseUrl?>images/guestbook3.png" width="350" /></a></div>								
			</div>		
		</div>		

	</div>

<?php include("include/footer.php"); ?>