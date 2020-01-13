<?php

session_start();	//open session
	if (!isset($_SESSION['username'])) {	// redirect user to login page in unsuccessful login
		header('Location: login.php');
		exit();
	}
?>

<form action = "search_handle.php" method = "post">

<input type = "text" name = "search" placeholder = "Enter Item to Search">
<br/>
<br/>
<input type = "submit" value = "Search">
</form>