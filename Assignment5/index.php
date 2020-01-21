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

$sql = "SELECT customerName, creditLimit FROM customers WHERE creditLimit > 20000 Order by creditLimit DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) { //if result found
	echo "***Customer with Credit Limit More than 20,000***<br>======================================<br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo $row['customerName']."\t | \t" .$row['creditLimit']."<br>";
    }
} else {
    echo "0 results"; //if no result
}
$conn->close(); //close db connection
?>

