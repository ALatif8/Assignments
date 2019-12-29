<?php

$day_input = "الأربعاء"; 									//arabic value placeholder

$ar_array = array("السبت","الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة"); 		//arabic weekdays array
$en_array = array("Saturday","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday"); 	//english weekdays array
for($i=0;$i<count($ar_array);$i++){ 								//itrate over arabic array
	if($day_input == $ar_array[$i]) { 							//validate user input against arabic array
		echo "You have entered \"$day_input\" and it is equal to \"$en_array[$i]\". <br/>"; //return  the equivalent index of english weekday
		return 0; 									//end program when case is successful
	}
}
return print("Unidentified input!"); 								//error of invalid input
 
?>
