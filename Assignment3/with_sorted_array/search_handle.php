<?php

session_start();	//open session
if (!isset($_SESSION['username'])) {	// redirect user to login page in unsuccessful login
	header('Location: login.php');
	exit();
}

else{
	$search = $_POST['search']; //receive search_input from user
	$list = array("tshirt"=>200 , "shirt"=>80 , "pantalon"=>220 , "shoes"=>120 , "short"=>90 , "jacket"=>60 , "glasses"=>80 , "sunglasses"=>100);
	foreach($list as $key => $value){ //iterate over the array
		if(strstr($key, $search)==true){	//validate if any part of the search_input exist in the array
			echo "item \t |\t price <br> $key \t |\t $value<br> "; //dispaly the item & its price
			echo "<a href='form.php'>Go to Shop!</a>";
			$_SESSION['search'] = $key;	//save the item in the Session
			$_SESSION['price'] = $value;	//save the price in the session
			break;	//exit the loop
		}
	}
echo "<br/>"."<a href='search_items.php'>Go to Search!</a>"."<br/>"."<a href='sorted_arrays.php'>Go to Sort!</a>";	//welcom message
}
?>