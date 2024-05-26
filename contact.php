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
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $names = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email_address']) ? $_POST['email_address'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    if (empty($email) || empty($names) || empty($subject) || empty($message)) {
        $error = "Please complete every field.";
    } else {
        $sql = "INSERT INTO contaact (cname, cmail, csub, cdesp) VALUES ('$names', '$email', '$subject', '$message')";
        if ($conn->query($sql) === TRUE) {
            $successMessage = "SUCCESS";
            echo '<script>window.location.href = "/phpmicro/E-books/E-books/E_Books.php#contact";</script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
