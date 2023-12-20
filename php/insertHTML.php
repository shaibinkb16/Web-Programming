<?php
$servername = "localhost";
$username = "23mca050";
$password = "2618";
$dbname = "23mca050";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$course = $_POST['course'];
$age = $_POST['age'];

$sql = "INSERT INTO student (name, course, age) VALUES ('$name', '$course', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";

    $sql2 = "SELECT name, course, age FROM student";
    $result = $conn->query($sql2);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Course</th><th>Age</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['course']}</td>";
            echo "<td>{$row['age']}</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
