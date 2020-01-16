<?php

session_start();	//open session
	if (!isset($_SESSION['username'])) {	// redirect user to login page in unsuccessful login
		header('Location: login.php');
		exit();
	}
	else if(!isset($_POST['search'])){ //if no search value redirect to search page
		header('Location: search_items.php'); 
	}
	else{
		$search = $_POST['search']; //receive search_input from user
		$search_flag = 0; //zero flag = item not found
		foreach($_SESSION['list'] as $key => $value){ //iterate over the array
			if(strstr($key, $search)==true){	//validate if any part of the search_input exist in the array
				echo "item \t |\t price <br> $key \t |\t $value<br> "; //dispaly the item & its price
				echo "<br/>"."<a href='form.php'>Go to Shop!</a>"."<br/>"."<a href='search_items.php'>Go to Search!</a>"."<br/>"."<a href='sorted_arrays.php'>Go to Sort!</a>"."<br/>"."<a href='input_form.php'>Go to Item Input!</a>"."<br/>"."<a href='delete_form.php'>Go to Delete Input!</a>";	//welcom message

				$_SESSION['search'] = $key;	//save the item in the Session
				$_SESSION['price'] = $value;	//save the price in the session
				$search_flag = 1; //one flag = item is found
				break;	//exit the loop
			}
		}
		if($search_flag == 0)
			echo "Item not found, <a href='search_items.php'>Go to Search!</a>";

	}
?>