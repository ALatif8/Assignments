<?php

$tests=array(5,4,9,3,1,7,5,8,6);   //array values
$sum = 0;			//sum variable

foreach($tests as $value)   //iterate over array
	$sum = $sum + $value;   //sum values to each other
echo $sum;    //print sum value

?>
