<?php

$films=array("Fast","Predestination","Persuit","Prestige");		//movies array
$keyword="Fast";	//seach keyword
$flag = 0;
foreach($films as $value) {	//iterate over the array
	if($keyword == $value){	//validate keyword
		echo "Yes!"; //successful exit
		$flag = 1; //flag that movie is found
		break;
	}
}
if($flag == 0){ // if movie not found print No
	echo "No!";
}
?>
