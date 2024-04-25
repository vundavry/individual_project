<?php
	session_set_cookie_params(15*60, "/","waph-team31.minifacebook.com",TRUE,TRUE);
	session_start(); 
if (!isset($_SESSION["authenticated"]) or $_SESSION["authenticated"] != TRUE) {
		session_destroy();
		echo "<script>alert('You have not login. Please login first');</script>";
		header("Refresh:0; url=form.php");
		die();
	}
	if ($_SESSION['browser'] != $_SERVER['HTTP_USER_AGENT']){
		echo "<script>alert('Session hijacking is detected!');</script>";
		header("Refresh:0; url=form.php");
		die();
	}
?>