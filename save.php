<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id, task, status FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "Task: " . $row["task"]. " - Status: " . $row["status"]. "
";
}
} else {
echo "0 results";
}


if(isset($_POST['task'])) {
$task = $_POST['task'];
$status = "Pending";

$sql = "INSERT INTO tasks (task, status) VALUES ('$task', '$status')";
if ($conn->query($sql) === TRUE) {
echo "New task added successfully";
} else {
echo "Error: " . $sql . "
" . $conn->error;
}
}

$conn->close();
?>

</body>
</html>