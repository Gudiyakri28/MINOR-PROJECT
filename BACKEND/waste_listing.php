<?php
include 'db.php';

$query = "SELECT w.WasteID, w.WasteName, w.Description, w.Quantity, w.Price, c.CategoryName, u.Name AS SellerName 
          FROM WasteListing w
          JOIN Categories c ON w.CategoryID = c.CategoryID
          JOIN Users u ON w.UserID = u.UserID";
$result = $conn->query($query);

$wasteList = [];
while ($row = $result->fetch_assoc()) {
    $wasteList[] = $row;
}

header('Content-Type: application/json');
echo json_encode($wasteList);
?>
