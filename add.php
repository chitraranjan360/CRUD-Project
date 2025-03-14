<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
  <!-- Navigation bar -->
  <nav>WELCOME TO THE TRIG</nav>
  <div class="container mt-5  col rounded">
    <!-- Main heading of the page -->
    <h1>CLIENT'S DATA</h1>
    <div class="container p-4 border col2 rounded">
      <!-- Form for submitting client data -->
      <form action="process.php" method="POST">
        <div class="form-group mt-3">
          <!-- Label and input for first name -->
          <label for="firstName" class="form-label">FirstName</label>
          <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter your firstName" required>
        </div>
        <div class="form-group mt-3">
          <label for="lastName" class="form-label">LastName</label>
          <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter your lastName" required>
        </div>
        <div class="form-group mt-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        
        <div class="form-group mt-3">
          <label for="comment" class="form-label">Comment</label>
          <textarea name="comment" id="comment" class="form-control" rows="4" placeholder="Your comments..." required></textarea >
        </div>

        <div class=" mt-3 row justify-content-between">
                <div class="col-auto">
                   <!-- Reset button -->
                <button type="reset" class="btn btn-success">Reset</button>
                </div>
                <div class="col-auto">
                  <!-- Submit button -->
                <button type="submit" class="btn btn-success">SAVE</button>
                </div>
            </div>
       
      </form>
    </div>
  </div>
  
</body>
</html>