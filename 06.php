<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<style>
  body {
    font-family: Arial, sans-serif;
  }
  .container {
    width: 300px;
    margin: 50px auto;
  }
  input[type="text"], input[type="password"], input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
</style>
</head>
<body>

<div class="container">
  <h2>Login Form</h2>
  <form action="" method="post">
    <input type="text" name="userId" placeholder="User ID" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" name="submit" value="Login">
  </form>
</div>

<?php
// Define predefined user ID and password
$validUserId = "exampleUser";
$validPassword = "examplePassword";

// Check if form is submitted
if(isset($_POST['submit'])) {
    // Retrieve user input
    $userId = $_POST['userId'];
    $password = $_POST['password'];
    
    // Check if user ID and password match
    if($userId === $validUserId && $password === $validPassword) {
        // If user ID and password match, show welcome message
        echo "<script>alert('Welcome! You are logged in.');</script>";
        // You can redirect to a new page or show a new window here
    } else {
        // If user ID and password do not match, show error message
        echo "<script>alert('Invalid User ID or Password. Please try again.');</script>";
    }
}
?>

</body>
</html>
