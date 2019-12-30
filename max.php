<?php

$tests=array(5,4,9,3,1,7,5,8,6);  //array values
$output = $tests[0];			//initialize variable to store index 0 value

for ($i=0,$j=count($tests);$i<$j;$i++) {  //iterate over array without unnecessary function call
	if ($tests[$i] <= $output)			//skip lower values
		continue;
	else
		$output = $tests[$i];		//store highest value
}
echo $output;		//print highest value

?>
