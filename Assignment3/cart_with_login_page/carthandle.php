<?php
session_start(); //open session
if (!isset($_SESSION['username'])) { // redirect user to login page in unsuccessful login
    header('Location: login.php');
    exit(); //exit any other code processing
}
else{ //proceed in successful login
	if(empty($_POST['product_price'])==true){			//validate if price is empty
		echo "Product price cannot be empty! <br/> <a href='form.php'>Go to Home!</a>";
	}
	else if (empty($_POST['product_count'])==true){		//validate if count is empty
		echo "Product pieces cannot be empty! <br/> <a href='form.php'>Go to Home!</a>";
	}
	else if (filter_var($_POST['product_price'], FILTER_VALIDATE_INT)==false){	//validate if price is letters
		echo "Product price cannot be letters! <br/> <a href='form.php'>Go to Home!</a>";
	}
	else if (filter_var($_POST['product_count'], FILTER_VALIDATE_INT)==false){	//validate if count is letters
		echo "Product pieces cannot be letters! <br/> <a href='form.php'>Go to Home!</a>";
	}
	else if ($_POST['product_price'] <= 0)	//validate if price is zero or negative 
		echo "Enter Positive Value in Product Price Field! <br/> <a href='form.php'>Go to Home!</a>";
	else if ($_POST['product_count'] <= 0) //validate if count is zero or negative
			echo "Enter Positive Value in Product Count Field! <br/> <a href='form.php'>Go to Home!</a>";

	else{	//successful entry
		$product_price = $_POST['product_price'];	//product price variable
		$product_count = $_POST['product_count'];	//product count variable

		$total_price = $product_price * $product_count; //total price

		if($product_price <= 1000){ 	//10% discount
			$discount = $total_price * 0.80;
			echo "Original Product Price: $total_price LE. <br/> Discounted Product Price: $discount LE.<br/>";
			echo "Number of Pieces: $product_count.<br/>";
		}

		else if($product_price > 1000){		//15% discount
			$discount = $total_price * 0.75;
			echo "Original Product Price: $total_price LE. <br/> Discounted Product Price: $discount LE.<br/>";
			echo "Number of Pieces: $product_count.<br/>";
		}
	}
}
?>
