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

$sql = "SELECT concat(em.firstName,' ',em.lastName) as Staff_Name, concat(managers.firstName,' ',managers.lastName) as Reporting_To FROM employees as em JOIN employees as managers ON managers.employeeNumber = em.reportsTo"; //query line
$result = $conn->query($sql);

if ($result->num_rows > 0) { //if result found
	echo "***reporting Line***<br>====================<br>";
	echo "Staff Name"."\t | \t"."Reporting to"."<br>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo $row['Staff_Name']."\t | \t".$row['Reporting_To']."<br>";
    }
} else {
    echo "0 results"; //if no result
}
$conn->close(); //close db connection
?>