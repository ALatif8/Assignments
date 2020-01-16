<?php

session_start();	//open session
	if (!isset($_SESSION['username'])) {	// redirect user to login page in unsuccessful login
		header('Location: login.php');
		exit();
	}
	else if (!isset($_POST['new_item']) || !isset($_POST['new_price'])) {	// redirect user to login page in unsuccessful login
		header('Location: input_form.php'); //redirect user to input page in case no input
		exit();
	}
	else{
		$input_array=array($_POST['new_item'] => $_POST['new_price']); //receive user input in new array
		$_SESSION['list']=array_merge((array)$_SESSION['list'],(array)$input_array); //merge new array with list session array this will be viewable during session itself and will be reset after session expiry
		echo "Inputs have been inserted successfully";
	}

echo "<br/>"."<a href='form.php'>Go to Shop!</a>"."<br/>"."<a href='search_items.php'>Go to Search!</a>"."<br/>"."<a href='sorted_arrays.php'>Go to Sort!</a>"."<br/>"."<a href='delete_form.php'>Go to Delete Input!</a>";	//welcom message


?>
