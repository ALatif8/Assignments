<?php

if (empty($_POST['value'])==true)
	echo "Search Cannot be Empty!<br/><a href='5k_form.php'>Go back to search<a/>";
else if ($_POST['value']<0)
	echo "Search Cannot be Negative Digit!<br/><a href='5k_form.php'>Go back to search<a/>";

else if($_POST['value']<100||$_POST['value']>5000)
	echo "Search Must be between 100 and 5000!<br/><a href='5k_form.php'>Go back to search<a/>";

else{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "route_task_company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully<br>";

$value=$_POST['value'];

$sql = "SELECT productName, quantityInStock FROM products WHERE quantityInStock > $value ORDER BY quantityInStock DESC"; //query line
$result = $conn->query($sql);

if ($result->num_rows > 0) { //if result found
	echo "***Products in Stock greater that $value pieces***<br>====================<br>";
    echo "Product Name | Quantity in Stock <br/>";
	// output data of each row
    while($row = $result->fetch_assoc()) {
		echo $row['productName'].": ".$row['quantityInStock']."<br>";
    }
} else {
    echo "0 results"; //if no result
}
$conn->close(); //close db connection
}

?>