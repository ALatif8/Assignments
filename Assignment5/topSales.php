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

$sql = "SELECT products.productName as name, SUM(orderdetails.quantityOrdered) as quantity, SUM(orderdetails.quantityOrdered * orderdetails.priceEach) as profit FROM orderdetails JOIN products ON products.productCode = orderdetails.productCode GROUP BY name ORDER BY profit DESC LIMIT 10"; //query line
$result = $conn->query($sql);

if ($result->num_rows > 0) { //if result found
	echo "***Top 10 Products (profit wise)***<br>====================<br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo $row['name']."\t | \t".$row['quantity']."\t | \t".$row['profit']."<br>";
    }
} else {
    echo "0 results"; //if no result
}
$conn->close(); //close db connection
?>