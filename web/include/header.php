<?php 
if($_SERVER['SERVER_NAME']=="localhost"){
	$baseUrl = "http://localhost/smilesandsmallz.com/"; 
} else {
	$baseUrl = "/"; 
}	
$section = $_GET['section'];
if(!$section){
	$section = 'smiles';
}
if($_GET['sw']=="true"){
	$showwedding = "false";
}
$showadmin = $_COOKIE["admin"];
if($isAdmin == "true" && $showadmin != "true") {
	header('Location:  home.php');
	exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>www.smilesandsmallz.com</title>
<link rel="stylesheet" href="css/main.css?v=20130528" type="text/css">
<link type="text/css" rel="stylesheet" href="css/validator.css" />
<link type="text/css" rel="stylesheet" href="css/jquery.countdown.css" />
<link rel="stylesheet" href="css/<?php echo $section; ?>.css" type="text/css">
<script src="js/jquery.1.5.min.js" type="text/javascript"></script>
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/jquery.validator-0.3.5.min.js"></script>
<script src="js/main.js?v=20121015" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33154387-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</head>
<body>
<div id="main">

	<div id="left" class="<?php echo $page; ?>">
		<a href="<?php echo $page; ?>.php?section=smiles&sw=<?php echo $showwedding; ?>">
			<div id="left_smiles" <?php if($section == 'smiles')echo 'class="selected"'; ?>>
				<!-- <div id="icon_smiles" <?php if($section == 'smiles')echo 'class="selected"'; ?>></div> -->
				<br/>
				SMILES
				</br>
				SAYS
			</div>
		</a>
		<a href="<?php echo $page; ?>.php?section=smallz&sw=<?php echo $showwedding; ?>">
			<div id="left_smallz" <?php if($section == 'smallz')echo 'class="selected"'; ?>>		
				<!-- <div id="icon_smallz" <?php if($section == 'smallz')echo 'class="selected"'; ?>></div> -->
				<br/>
				SMALLZ
				<br/>
				SAYS
			</div>
		</a>
		<div id="left_heart">
			<img src="<?php echo $baseUrl?>images/heart.jpg" width="30" height="27" border="0" />
		</div>
	</div>
	
	<div id="center">

		<div id="header">
		
			<a href="home.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">
				<div id="header_logo">
					SMILES & SMALLZ
				</div>
			</a>	

			<div id="header_navbar">
				<?php if($showadmin == "true") { ?>
					<div class="nav">
						<a href="admin_logout.php">
							<div>LOG OUT</div>
						</a>	
					</div>									
					<div class="nav">
						<a href="email.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&sa=<?php echo $showadmin; ?>">
							<div <?php if($page == 'email')echo 'class="selected"'; ?>>EMAIL</div>
						</a>	
					</div>																					
					<div class="nav">
						<a href="guestlist.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&sa=<?php echo $showadmin; ?>">
							<div <?php if($page == 'guestlist')echo 'class="selected"'; ?>>GUEST LIST</div>
						</a>	
					</div>						
				<?php } else if($showwedding == "true") { ?>				
					<div class="nav">
						<a href="rsvp.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">
							<div <?php if($page == 'rsvp')echo 'class="selected"'; ?>>RSVP</div>
						</a>	
					</div>
					<div class="nav">
						<a href="weddingparty.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">
							<div <?php if($page == 'weddingparty')echo 'class="selected"'; ?>>WEDDING PARTY</div>
						</a>	
					</div>																	
					<div class="nav">
						<a href="wedding.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">
							<div <?php if($page == 'wedding')echo 'class="selected"'; ?>>WEDDING</div>
						</a>	
					</div>					
				<?php } else { ?>		
					<?php /*		
					<div class="nav">
						<a href="guestbook.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">
							<div <?php if($page == 'guestbook')echo 'class="selected"'; ?>>GUEST BOOK</div>
						</a>	
					</div>	
					 */ ?>	
					<div class="nav">
						<a href="cruise.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">
							<div <?php if($page == 'cruise')echo 'class="selected"'; ?>>CRUISE WEDDING</div>
						</a>	
					</div>			
					<?php /*					
					<div class="nav">
						<a href="stoutnyc.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>&pg=1">
							<div <?php if($page == 'stoutnyc')echo 'class="selected"'; ?>>STOUT NYC</div>
						</a>	
					</div>				
					 */	?>															
					<div class="nav">
						<a href="gallery.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">
							<div <?php if($page == 'gallery')echo 'class="selected"'; ?>>ENGAGEMENT</div>
						</a>	
					</div>															
					<div class="nav">
						<a href="proposal.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">
							<div <?php if($page == 'proposal')echo 'class="selected"'; ?>>PROPOSAL</div>
						</a>	
					</div>										
					<div class="nav">
						<a href="story.php?section=<?php echo $section; ?>&sw=<?php echo $showwedding; ?>">
							<div <?php if($page == 'story')echo 'class="selected"'; ?>>OUR STORY</div>
						</a>	
					</div>
				<?php } ?>		
			</div>	

		</div>