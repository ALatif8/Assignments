<?php
$id = $_GET['id'];

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

$sql = "SELECT * FROM customers WHERE customerNumber = $id"; //query line
$result = $conn->query($sql);

if ($result->num_rows > 0) { //if result found
	echo "***Customer Profile***<br>====================<br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		foreach($row as $key => $value) //display column headerr & related info
			echo $key.":  ".$value."<br>";
    }
} else {
    echo "0 results"; //if no result
}
$conn->close(); //close db connection
?>