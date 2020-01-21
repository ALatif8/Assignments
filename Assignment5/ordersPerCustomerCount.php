<?php

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

$sql = "SELECT customers.customerName as name, COUNT(orders.orderNumber) as number FROM orders join customers on customers.customerNumber = orders.customerNumber GROUP BY customers.customerName ORDER BY COUNT(orders.orderNumber) DESC"; //query line
$result = $conn->query($sql);

if ($result->num_rows > 0) { //if result found
	echo "***Count of Orders Per Customer**<br>====================<br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo $row['name']."\t | \t".$row['number']."<br>";
    }
} else {
    echo "0 results"; //if no result
}
$conn->close(); //close db connection
?>