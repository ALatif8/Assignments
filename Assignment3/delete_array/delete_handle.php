<?php

session_start();	//open session
	if (!isset($_SESSION['username'])) {	// redirect user to login page in unsuccessful login
		header('Location: login.php');
		exit();
	}
	else if (!isset($_POST['item_delete'])) {	// redirect user to delete form again for uns
		header('Location: delete_form.php'); //redirect user to input page in case no input
		exit();
	}
	else{
		$delete_value = $_POST['item_delete']; //store item given by users
		$search_flag = false; //zero flag = item not found
		foreach($_SESSION['list'] as $key => $value){ //iterate over the array
			if($delete_value == $key){
				unset($_SESSION['list'][$key]);//delete the required item
				$search_flag = true; //one flag = item found
				echo "$delete_value deleted successfully!";
				echo "<br/>"."<a href='form.php'>Go to Shop!</a>"."<br/>"."<a href='search_items.php'>Go to Search!</a>"."<br/>"."<a href='sorted_arrays.php'>Go to Sort!</a>"."<br/>";
				break;	//exit the loop
			}
		}
		if($search_flag == false) //invalid input by user
			echo "Item not found"."<br/>"."<a href='delete_form.php'>Go to Delete Input!</a> and try again.";
			
		
	}

echo "<br/>"."<a href='form.php'>Go to Shop!</a>"."<br/>"."<a href='search_items.php'>Go to Search!</a>"."<br/>"."<a href='sorted_arrays.php'>Go to Sort!</a>"."<br/>"."<a href='delete_form.php'>Go to Delete Input!</a>";	//welcom message


?>