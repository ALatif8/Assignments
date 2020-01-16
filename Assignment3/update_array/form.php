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

echo "You've searched for '".$_SESSION['search']."', its price is ".$_SESSION['price']."LE"; //display searched item and its price
echo "<br/>"."<a href='form.php'>Go to Shop!</a>"."<br/>"."<a href='search_items.php'>Go to Search!</a>"."<br/>"."<a href='sorted_arrays.php'>Go to Sort!</a>"."<br/>"."<a href='input_form.php'>Go to Item Input!</a>";	//welcom message


?>