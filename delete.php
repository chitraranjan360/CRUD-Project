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

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record with the specified email
    $sql = "DELETE FROM inquiry WHERE email = '$id'";

    // Execute the query and check if it was successful
    if ($conn->query($sql)) {
        header("Location: view.php"); // Redirect to the list page
    } else {
        echo "Error deleting record: " . $conn->error;  // Display an error message if the query failed
    }
    }


// Close the database connection
$conn->close();
?>