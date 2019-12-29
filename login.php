<?php

$uname = "ayman";
$pword = "143";

if(gettype($uname) == "string" && gettype($pword) == "string"){			//validate username&password format
if($uname == "ahmed"){								//validate username input
		if($pword == "123")						//validate password input
			echo "Welcom $uname Successful Login!<br/>";		//print successful login message
		else
			echo "Invalid Password!<br/>";				//print invalid password message
	}
	else if ($uname == "tariq") {						//validate username input	
		if($pword == "789")						//validate password input
			echo "Welcom $uname Successful Login!<br/>";		//print successful login message	
		else							
			echo "Invalid Password!<br/>";				//print invalid password message
	}
	else
		echo "Invalid Username!<br/>";					//print invalid username message
}
else
	echo "Check Username or Password Format! <br>Hint: Format is not a String <br/>"; //print invalid username or password format 
	
?>
