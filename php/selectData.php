<?php
$servername = "localhost";
$username = "23mca050";
$password = "2618";
$dbname = "23mca050";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select values from a table
$sql = "SELECT name, course, age FROM student";
$result = $conn->query($sql);

// Check if the query was successful
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . " Course: " . $row["course"] . " Age: " . $row["age"] . "<br>";
    }
} else {
    echo "0 results";
}

// Close the connection
////echo "Column1: " . $row["name"] . " - Column2: " . $row["course"] . " - Column3: " . $row["age"] . "<br>";
$conn->close();
?>
