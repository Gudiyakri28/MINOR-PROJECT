<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_SESSION['UserType'] === 'Seller') {
    $userID = $_SESSION['UserID'];
    $categoryID = $_POST['CategoryID'];
    $wasteName = $_POST['WasteName'];
    $description = $_POST['Description'];
    $quantity = $_POST['Quantity'];
    $price = $_POST['Price'];

    $query = "INSERT INTO WasteListing (UserID, CategoryID, WasteName, Description, Quantity, Price) 
              VALUES ('$userID', '$categoryID', '$wasteName', '$description', '$quantity', '$price')";
    
    if ($conn->query($query) === TRUE) {
        echo "Waste item added successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
