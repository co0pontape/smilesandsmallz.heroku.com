<?php $page = "gallery"; ?>
<?php include("include/header.php"); ?>

<link rel="stylesheet" type="text/css" href="gallery/lib/jquery.ad-gallery.css">
<script type="text/javascript" src="gallery/lib/jquery.ad-gallery.js"></script>
<script type="text/javascript">
	$(function() {
		var galleries = $('.ad-gallery').adGallery();    
		
		$('#switch-effect').change(
			function() {
				galleries[0].settings.effect = $(this).val();
				return false;
			}
		);
		$('#toggle-slideshow').click(
			function() {
				galleries[0].slideshow.toggle();
				return false;
			}
		);
		$('#toggle-description').click(
			function() {
				if(!galleries[0].settings.description_wrapper) {
					galleries[0].settings.description_wrapper = $('#descriptions');
				} else {
					galleries[0].settings.description_wrapper = false;
				}
				return false;
			}
		);
	});
</script>
<style type="text/css">
	ul {
		list-style-image:url(list-style.gif);
	}
	#gallery {
		padding: 30px;
		background: #e1eef5;
		margin: 25px auto;
		color: #000;
	}
	.ad-controls {
		margin: 5px 0;
	}
	<?php /*
	.ad-gallery .ad-slideshow-controls .ad-slideshow-start, .ad-gallery .ad-slideshow-controls .ad-slideshow-stop {
		background-color: #DDDDDD;
		border: 1px solid #000000;
		color: #000000;
		cursor: pointer;
		margin-left: 10px;
		padding: 0 5px;
	}	
	*/ ?>
	#descriptions {
		position: relative;
		height: 50px;
		background: #EEE;
		margin-top: 10px;
		width: 640px;
		padding: 10px;
		overflow: hidden;
	}
	#descriptions .ad-image-description {
		position: absolute;
	}
	#descriptions .ad-image-description .ad-description-title {
		display: block;
	}
	#content_box {
		margin: 0px auto;
		margin-top: 25px;
		width: 600px;
	}
</style>

<div id="content" class="<?php echo $page; ?>">

	<div id="content_box">
		Special thanks to Rose Limb! Go check out her work <a href="http://www.roselimb.com" target="_blank">here</a>.
	</div>

	<div id="container">
		<div id="gallery" class="ad-gallery">
			<div class="ad-image-wrapper"></div>
			<div class="ad-controls"></div>
			<div class="ad-nav">
				<div class="ad-thumbs">
					<ul class="ad-thumb-list">					  
						<?php
							$imgCount = 53;
							for($i=1;$i<=$imgCount;$i++){
								echo '<li>';
								echo '<a href="'.$baseUrl.'gallery/images/'.$i.'.jpg">';
								echo '<img src="'.$baseUrl.'gallery/images/thumbs/t'.$i.'.jpg" class="image" />';
								// echo '<img src="'.$baseUrl.'gallery/images/thumbs/t'.$i.'.jpg" class="image" title="" longdesc="'.$baseUrl.'gallery/images/fullsize/'.$i.'.jpg" alt="Click image to load full size version." />';
								echo '</a>';
								echo '</li>';
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>						

</div>

<?php include("include/footer.php"); ?>