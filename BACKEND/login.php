<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM Users WHERE Email='$email' AND Password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        session_start();
        $_SESSION['UserID'] = $user['UserID'];
        $_SESSION['UserType'] = $user['UserType'];
        echo "Login successful!";
    } else {
        echo "Invalid email or password.";
    }
}
?>
