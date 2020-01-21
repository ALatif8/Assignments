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


$sql = "SELECT DISTINCT city FROM customers ORDER BY city"; //query line
$result = $conn->query($sql); //load query


$conn->close(); //close db connection


?>

<form action="cityhandle.php" method="post">
<select name="city" >
<?php
	while($row = $result->fetch_assoc()){ //iterate over the query
		$item = $row['city'];
		echo "<option value='$item'>$item</option>"; //display options from query result
	}
?>


</select>
<input type = "submit" value = "Submit">
</form>