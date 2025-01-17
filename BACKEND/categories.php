<?php
include 'db.php';

$query = "SELECT * FROM Categories";
$result = $conn->query($query);

$categories = [];
while ($row = $result->fetch_assoc()) {
    $categories[] = $row;
}

header('Content-Type: application/json');
echo json_encode($categories);
?>
