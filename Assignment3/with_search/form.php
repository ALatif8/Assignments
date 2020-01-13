<?php

session_start();	//open session
if (!isset($_SESSION['username'])) {	// redirect user to login page in unsuccessful login
    header('Location: login.php');
    exit();
}

?>

<form action = "carthandle.php" method = "post">

<input type = "text" name = "product_price" placeholder = "Enter Product Price">
<br/>
<br/>
<input type = "text" name = "product_count" placeholder = "Enter Product Pieces">
<br/>
<br/>
<input type = "submit" value = "Go to Cart">
<br/>
<br/>
</form>

<?php

echo "You've searched for '".$_SESSION['search']."', its price is ".$_SESSION['price']."LE";


?>