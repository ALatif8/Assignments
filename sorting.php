<?php

$tests=array(6,4,9,3,12,8,7); 	//array
$temp = 0; //initialize temp area
for ($i=0,$n = count($tests);$i<$n-1;$i++){ //iterate over array till index "n-1"
	for ($j=$i+1;$j<$n;$j++){ 	//iterate over array from index 1 till index n
		if($tests[$j] < $tests[$i]){	//compare if next index is less than the current index 
			$temp = $tests[$j]; 	//store the next index in temp variable
			$tests[$j] = $tests[$i];	//store current index value in the next index
			$tests[$i] = $temp; //give current index the value of next index from temp area
		}
	}
}

foreach($tests as $value) //print result
	echo "$value ";

?>
