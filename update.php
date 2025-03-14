<?php
// Database connection
$host = 'localhost';
$dbname = 'clients';
$username = 'root';
$password = '';

// Create a new MySQLi connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Update the record
    $sql = "UPDATE inquiry SET firstName = '$firstName', lastName = '$lastName', email = '$email', comment = '$comment' WHERE email = '$id'";

    if ($conn->query($sql)) {
        header("Location: view.php"); // Redirect to the view page
    } else {
        echo "Error updating record: " . $conn->error;
    }
}







$conn->close();
?>
