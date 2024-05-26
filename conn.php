<?php
session_start();  


$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "micro";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username=$_POST['username'];
    $password = $_POST['password'];
     
 
    if (empty($email) || empty($username) || empty($password)) {
        $error = "Email and password are required";
    } else {
        $sql = "INSERT INTO `login`(`email`, `usern`, `passwo`) VALUES('$email','$username','$password')";
        $result = $conn->query($sql);
        header("Location:/phpmicro/E-books/E-books/E_Books.php");
        exit();

    }
}

$conn->close();
?>