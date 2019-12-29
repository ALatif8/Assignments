<?php

$films=array("avatar","Prestige","avatar","Prestige");
$keyword="avatar";
$counter = 0;

foreach($films as $value)	    //iterate over the array
	if($keyword == $value)	    //validate keyword
		$counter++;			          //increasing counter
echo "Keyword \"$keyword\" was found: $counter times!";   //print result

?>
