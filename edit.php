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

// Fetch the record to edit
$id = $_GET['id'];
$sql = "SELECT * FROM inquiry WHERE email = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();  // Fetch the record data

?>
<!-- JavaScript function to cancel the update and redirect to the list page -->
<script>
        function cancelUpdate() {
            window.location.href = 'view.php';
        }
    </script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav>WELCOME TO THE TRIG</nav>
    <div class="container mt-5 col rounded">
        <h1 >UPDATE DATA</h1>
        <div class="container p-4 rounded col2">

        <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['email']; ?>">
        <div class="form-group mt-3">
          <label for="firstName" class="form-label">FirstName</label>
          <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $row['firstName']; ?>" placeholder="Enter your firstName" required>
        </div>
        <div class="form-group mt-3">
          <label for="lastname" class="form-label">LastName</label>
          <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $row['lastName']; ?>" placeholder="Enter your lastName" required>
        </div>
        <div class="form-group mt-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" placeholder="Enter your email" required>
        </div>
        
        <div class="form-group mt-3">
          <label for="comment" class="form-label">Comment</label>
          <textarea name="comment" id="comment" class="form-control" rows="4" value="<?php echo $row['comment']; ?>" placeholder="Your comments..." required></textarea >
        </div>
        
        <div class=" mt-3 row justify-content-between">
                <div class="col-auto">
                <button type="button" class="btn btn-success" name="cancel" onclick="cancelUpdate()">Cancel</button>
                </div>
                <div class="col-auto">
                <button type="submit" class="btn btn-success" value="Update">Update</button>
                </div>
            </div>
        </form>
        </div>

    </div>

    
</body>
</html>