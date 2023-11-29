<?php
// signup_processor.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $hashedPassword);

// Get the data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$plainPassword = $_POST['password'];

// It's important to hash passwords before storing them
$hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

// Check if email already exists
$result = $conn->query("SELECT id FROM users WHERE email = '{$email}'");
if ($result->num_rows > 0) {
    echo "Email already exists.";
} else {
    // Execute the query
    if ($stmt->execute()) {
        header('Location: signin.html');
    exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();
?>
