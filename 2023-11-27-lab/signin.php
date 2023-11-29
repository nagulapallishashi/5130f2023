<?php
$servername = "localhost"; // or your server
$username = "root"; // your database username
$password = ""; // your database password
$dbname = "assignment"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the email and password from POST data
$email = $_POST['email'];
$password = $_POST['password'];

// You should use prepared statements to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    
    // Verify the password (assuming you have hashed passwords stored in your database)
    if (password_verify($password, $user['password'])) {
        // Start the session and set user as logged in
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['logged_in'] = true;
        
        // Instead of echoing "Success", we'll echo "Verified" to trigger the JavaScript 2FA
        echo "Verified";
    } else {
        echo "Invalid password.";
    }
} else {
    echo "User not found.";
}

$stmt->close();
$conn->close();
?>
