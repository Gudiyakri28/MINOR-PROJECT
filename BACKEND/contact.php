<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $query = "INSERT INTO Contact (Name, Email, Message) VALUES ('$name', '$email', '$message')";
    if ($conn->query($query) === TRUE) {
        echo "Message submitted successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
