<?php
	session_start();

	$_SESSION['UserID'] = "";
	
	
	header('Location: index.php');

?>