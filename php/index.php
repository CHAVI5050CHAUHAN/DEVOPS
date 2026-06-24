<?php
echo "<h1>DevOps Final Interview Assignment</h1>";
echo "<h2>Nginx + PHP-FPM + MySQL + Docker Compose</h2>";

$conn = new mysqli("mysql", "devops", "devops123", "assignmentdb");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<h3>MySQL Connection Successful!</h3>";

$result = $conn->query("SELECT * FROM employees");

while($row = $result->fetch_assoc()) {
    echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
}
?>
