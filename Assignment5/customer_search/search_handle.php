<?php

if (empty($_POST['customer_name'])==true)
	echo "Search Cannot be Empty!<br/><a href='customer_search_form.php'>Go back to search<a/>";
else {

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

$customer_name=$_POST['customer_name'];

$sql = "SELECT customerName FROM customers WHERE customerName LIKE '%$customer_name%'"; //query line
$result = $conn->query($sql);

if ($result->num_rows > 0) { //if result found
	echo "***Customer Search Result***<br>====================<br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo $row['customerName']."<br>";
    }
} else {
    echo "0 results"; //if no result
}
$conn->close(); //close db connection
}

?>