<?php

$test = 7.7; 							//variable placeholder

if(gettype($test) == "string") 			//validate string
	echo $test;
else if (gettype($test) == "boolean") { //validate boolean
	if ($test == true)
		echo "yes!";
	else
		echo "no!";
}
else if (gettype($test) == "integer") 	//validate integer
	echo $test + 5;	
else if (gettype($test) == "double") 	//validate float
	echo $test * 7;
else
	echo "Unknown Type!";				//unknown type	
?>
