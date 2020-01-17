<?php

session_start();	//open session
	if (!isset($_SESSION['username'])) {	// redirect user to login page in unsuccessful login
		header('Location: login.php');
		exit();
	}
?>

<form action = "delete_handle.php" method = "post">

<input type = "text" name = "item_delete" placeholder = "Enter The New Item">
<br/>
<br/>
<input type = "submit" value = "Submit">
</form>

<?php
echo "<br/>"."<a href='form.php'>Go to Shop!</a>"."<br/>"."<a href='search_items.php'>Go to Search!</a>"."<br/>"."<a href='sorted_arrays.php'>Go to Sort!</a>"."<br/>"."<a href='delete_form.php'>Go to Delete Input!</a>"."<br/>"."<a href='modify_form.php'>Go to Modify Form!</a>";	//welcom message
?>