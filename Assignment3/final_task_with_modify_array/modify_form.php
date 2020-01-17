<?php

session_start();	//open session
	if (!isset($_SESSION['username'])) {	// redirect user to login page in unsuccessful login
		header('Location: login.php');
		exit();
	}
?>

<form action = "modify_handle.php" method = "post">

<input type = "text" name = "old_item" placeholder = "Enter Old Item to Modify">
<br/>
<br/>
<input type = "text" name = "new_item" placeholder = "Enter New Item">
<br/>
<br/>
<input type = "text" name = "new_price" placeholder = "Enter New Item Price">
<br/>
<br/>
<input type = "submit" value = "Submit">
</form>

<?php
echo "<br/>"."<a href='form.php'>Go to Shop!</a>"."<br/>"."<a href='search_items.php'>Go to Search!</a>"."<br/>"."<a href='sorted_arrays.php'>Go to Sort!</a>"."<br/>"."<a href='input_form.php'>Go to Item Input!</a>"."<br/>"."<a href='delete_form.php'>Go to Delete Input!</a>";;	//welcom message
?>