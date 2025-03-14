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

// Fetch all inquiries
$sql = "SELECT * FROM inquiry";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Navigation bar -->
<nav>WELCOME TO THE TRIG</nav>
    <div class="container mt-5 col rounded">
        
        <h1 >CLIENT'S DATA</h1>
        <div class="container p-4 border rounded col2 ">
        <table class="table table-bordered table-hover border-primary ">
    <thead class="table-info">  
    <tr>
      <th scope="col">FirstName</th>
      <th scope="col">LastName</th>
      <th scope="col">Email</th>
      <th scope="col">Comments</th>
      <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
    // Check if there are any records in the result set
            if ($result->num_rows > 0) {
                // Iterate through each record and display it in a table row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>

                            <td>{$row['firstName']}</td>
                            <td>{$row['lastName']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['comment']}</td>
                            <td class='actions'>
                                <a href='edit.php?id={$row['email']}' onclick = 'return confirm(\"Are you sure you want to edit this record?\");' >Edit</a> |
                                <a href='delete.php?id={$row['email']}' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                            </td>
                          </tr>";
                }
            } else {
                // Display a message if no records are found
                echo "<tr><td colspan='8'>No Data found!</td></tr>";
            }
            ?>
    </tbody>
    </table>
    <div>
         <!-- Button to add new client data -->
        <button id="addButton" class="btn btn-success">ADD</button> 
    </div>
    
    </div>
    
</body>
</html>
<?php
$conn->close();
?>

<script>
    // JavaScript function to redirect to the add.php page
        document.getElementById("addButton").addEventListener("click", function() {
            window.location.href = "add.php";
        });
    </script>