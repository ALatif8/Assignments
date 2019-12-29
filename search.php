<?php

$films=array("Fast","Predestination","Persuit","Prestige");		//movies array
$keyword="avatar";	          //seach keyword

foreach($films as $value)	    //iterate over the array
	if($keyword == $value)	    //validate keyword
		return print("Yes!");     //successful exit
	else
		return print("No!");      //failed exit
?>
