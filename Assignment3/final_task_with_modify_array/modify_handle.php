<?php

session_start();	//open session
	if (!isset($_SESSION['username'])) {	// redirect user to login page in unsuccessful login
		header('Location: login.php');
		exit();
	}
	else if (!isset($_POST['old_item']) || !isset($_POST['new_item']) || !isset($_POST['new_price'])) {	// redirect user to delete form again for uns
		header('Location: modify_form.php'); //redirect user to input page in case no input
		exit();
	}
	else{
		$old_item = $_POST['old_item']; //store item given by users
		$search_flag = false; //zero flag = item not found
		foreach($_SESSION['list'] as $key => $value){ //iterate over the array
			if($old_item == $key){
				unset($_SESSION['list'][$key]);//delete the required item
				$search_flag = true; //one flag = item found
				$new_item=array($_POST['new_item'] => $_POST['new_price']); //receive user input in new array
				$_SESSION['list']=array_merge((array)$_SESSION['list'],(array)$new_item); //merge new array with list session array this will be viewable during session itself and will be reset after session expiry
				echo "Record has been updated successfully, ".$key." has been modified successfully to ".$_POST['new_item']." with Price ".$_POST['new_price']." LE. <br/>"; //display successfull message
				break;	//exit the loop
			}
		}
		if($search_flag == false) //invalid input by user
			echo "Item not found"."<br/>"."<a href='modify_form.php'>Go to Modify Form!</a> and try again.";
			
		
	}

echo "<br/>"."<a href='form.php'>Go to Shop!</a>"."<br/>"."<a href='search_items.php'>Go to Search!</a>"."<br/>"."<a href='sorted_arrays.php'>Go to Sort!</a>"."<br/>"."<a href='delete_form.php'>Go to Delete Input!</a>"."<br/>"."<a href='modify_form.php'>Go to Modify Form!</a>";	//welcom message


?>