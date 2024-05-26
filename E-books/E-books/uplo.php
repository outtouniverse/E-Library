<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "micro"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$message = '';
if(isset($_POST["submit"])) {
    if(!empty($_POST["book_name"]) && !empty($_FILES["book_pdf"]["name"]) && !empty($_POST["description"])) {
        $uploadDir = "uploads/";
        $fileName = basename($_FILES["book_pdf"]["name"]);
        $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
        $uniqueFileName = uniqid() . "." . $fileExt;
        $uploadPath = $uploadDir . $uniqueFileName;

        $fileimg = basename($_FILES["book_img"]["name"]);
        $fileEimg = pathinfo($fileimg, PATHINFO_EXTENSION); // Corrected this line
        $uniqueFileNameimg = uniqid() . "." . $fileEimg;
        $uploadPathimg = $uploadDir . $uniqueFileNameimg;
        
        // Upload the files
        if(move_uploaded_file($_FILES["book_pdf"]["tmp_name"], $uploadPath)&& move_uploaded_file($_FILES["book_img"]["tmp_name"], $uploadPathimg)) {
          
            $bookName = $_POST["book_name"];
            $bauth= $_POST["book_auth"];
            $description = $_POST["description"];
            
            // Insert data into database
            $sql = "INSERT INTO `ebook`(`bname`, `bpic`, `bauthour`, `bpdf`, `bdescription`)  VALUES ('$bookName','$uniqueFileNameimg','$bauth' ,'$uniqueFileName', '$description')";
            if ($conn->query($sql) === TRUE) {
                $message = "Book uploaded successfully!";
                
                header("Location:E_Books.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $message = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $message= "Please fill all fields.";
        header("Location: /phpmicro/E-books/E-books/upload.php");
        exit();
    }
} else {
  
    header("Location: upload.php");
    exit;
}


// Close database connection
$conn->close();
?>
