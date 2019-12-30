<?php

$arr1=array('a','b','c','d'); 	//array 1
$arr2=array('c','d','e','f'); 	//array 2

foreach ($arr1 as $value1){		//iterate over 1st array
	foreach ($arr2 as $value2){	//iterate over 2nd array
		if($value1 == $value2)	//validate 1st array value against 2nd array value
			echo "$value1, ";	//print same values
	}
}
?>
