<?php

session_start();	//open session
if (!isset($_SESSION['username'])) {	// redirect user to login page in unsuccessful login
	header('Location: login.php');
	exit();
}

else{
	$list = $_SESSION['list'];
	foreach($list as $key => $value)
		echo "item: $key, price: $value <br/>";
	echo "-----ascending order according to the key----<br/>";
	ksort($list);
	foreach($list as $key => $value)
		echo "item: $key, price: $value <br/>";
	echo "-----descending order according to the key----<br/>";
	krsort($list);
	foreach($list as $key => $value)
		echo "item: $key, price: $value <br/>";
	echo "-----ascending order according to the value----<br/>";
	asort($list);
	foreach($list as $key => $value)
		echo "item: $key, price: $value <br/>";
	echo "-----descending order according to the value----<br/>";
	arsort($list);
	foreach($list as $key => $value)
		echo "item: $key, price: $value <br/>";		

echo "<br/>"."<a href='form.php'>Go to Shop!</a>"."<br/>"."<a href='search_items.php'>Go to Search!</a>"."<br/>"."<a href='sorted_arrays.php'>Go to Sort!</a>";	//welcom message

}
?>