<?php

$tests=array(1,"tariq",1.5,true,7,'s',false); //array

for($i=0,$j=count($tests);$i<$j;$i++){		//assign array count to variable to avoid unnecessary function call
	if(gettype($tests[$i]) == "boolean"){	//validate if array variable is boolean or no
		if($tests[$i] == true)
			echo "Yes";
		else
			echo "No";
	}
	else
		echo $tests[$i];
}
echo "<hr/>";

$i=0;
$j=count($tests);		//assign array count to variable to avoid unnecessary function call
while ($i < $j){
	if(gettype($tests[$i]) == "boolean"){
		if($tests[$i] == true)
			echo "Yes";
		else
			echo "No";
	}
	else
		echo $tests[$i];
	$i++;		//increment loop counter
}

?>
