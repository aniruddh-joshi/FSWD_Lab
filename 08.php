<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "myDB"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submissions
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create
    if(isset($_POST['create'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    // Update
    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        
        $sql = "UPDATE users SET name='$name', email='$email' WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    
    // Delete
    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        
        $sql = "DELETE FROM users WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

// Display records
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "No records found";
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<body>

<h2>CRUD Application</h2>

<form method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <input type="submit" name="create" value="Create">
</form>

</body>
</html>
