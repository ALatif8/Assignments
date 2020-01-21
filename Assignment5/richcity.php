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

$city=$_GET['city'];

$sql = "SELECT customerName, creditLimit FROM customers WHERE city = '$city' ORDER BY creditLimit DESC LIMIT 3"; //query line
$result = $conn->query($sql);

if ($result->num_rows > 0) { //if result found
	echo "***Richest 3 in $city***<br/>====================<br/>";
    echo "Customer Name | Credit Limit <br/>";
	// output data of each row
    while($row = $result->fetch_assoc()) {
		echo $row['customerName'].": ".$row['creditLimit']."<br/>";
    }
} else {
    echo "0 results"; //if no result
}
$conn->close(); //close db connection


?>