
<?php
$servername = "localhost";
$username = "23mca050";
$password = "2618";
$dbname = "23mca050";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (name, course, age)
VALUES ('sanu', 'MCA', 21)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>