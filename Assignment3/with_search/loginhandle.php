<?php

if (empty($_POST['username'])==true)	//check if username is empty
	echo "Username Cannot be Empty! <br/> <a href='login.php'>Go to Login Page!</a>";
else if (empty($_POST['email'])==true)	//check if email is empty
	echo "Email Cannot be Empty!";

else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)==false)	//check email format
	echo "Check Email Format! <br/> Example: user@provider.com <br/> <a href='login.php'>Go to Login Page!</a>";


else if (empty($_POST['password'])==true)	//check if password is empty
	echo "Password Cannot be Empty! <br/> <a href='login.php'>Go to Login Page!</a>";

else if (strlen($_POST['password'])<8)	//check password length
	echo "Password should not be less than 8 characters! <br/> <a href='login.php'>Go to Login Page!</a>";

else if (preg_match('@[A-Z]@', $_POST['password'])==false||preg_match('@[a-z]@', $_POST['password'])==false)	//check if password contain  uppercase & lowercase
	echo "Password Should include Uppercase and Lowercase letters! <br/> <a href='login.php'>Go to Login Page!</a>";

else { //successful login inputs
	session_start();	//open session
	$username = $_POST['username'];	//capture customer data
	$email = $_POST['email'];
	$password = $_POST['password'];

	$_SESSION['username']=$username;	//save customer data in session
	$_SESSION['email']=$email;
	$_SESSION['password']=$password;
	
	echo "Welcome ".$_SESSION['username']."<br/>"."<a href='form.php'>Go to Shop!</a>"."<br/>"."<a href='search_items.php'>Go to Search!</a>";	//welcom message
}
?>

