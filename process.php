<?php

// Database connection details

$host = 'localhost';
$dbName = 'clients';
$dbUser = 'root';
$dbPassword = "";

// Create a new MySQLi connection
$conn = new mysqli($host, $dbUser, $dbPassword,  $dbName);

// Check if the connection was successful
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data from the POST request
 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $email = $_POST['email'];
 $comment = $_POST['comment'];

// Insert the form data into the 'inquiry' table
 $sql = "INSERT INTO inquiry (firstName,lastName,email,comment) VALUES 
 ('$firstName', '$lastName', '$email', '$comment')";

// Execute the query and check if it was successful
 if($conn->query($sql)===True){
    header("Location: view.php");
 }


}

// Close the database connection
$conn->close();




?>