<?php

$tests=array(6,4,9,3,12,8,7);	//array values
$sum = 0;			//sum variable

foreach($tests as $value)   //iterate over array
	$sum = $sum + $value;   //sum values to each other
echo $sum/count($tests);   //print average value

?>
