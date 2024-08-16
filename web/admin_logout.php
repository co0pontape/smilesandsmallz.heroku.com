<?php

	setcookie ("admin", "false", time() - 3600);
	header('Location:  home.php');
	exit();
	
?>