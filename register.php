<?php
// Database configuration
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];

// Insert user data into the database
$sql = "INSERT INTO users (first_name, last_name, mobile, email) VALUES ('$first_name', '$last_name', '$mobile', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
