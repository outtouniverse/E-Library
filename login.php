<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "micro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT `usern`, `passwo` FROM `login` WHERE `usern` = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // User found, verify password
        $user = $result->fetch_assoc();
        if ($password == $user['passwo']) {
            $_SESSION['username'] = $username;
            header("Location:/phpmicro/E-books/E-books/E_Books.php");
            exit();
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}

$conn->close();
?>
