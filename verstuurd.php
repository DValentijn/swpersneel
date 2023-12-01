<?php

require 'connect.php';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $name = htmlspecialchars($_POST["name"]);
    $tijd = htmlspecialchars($_POST["tijd"]);
    $opmerking = htmlspecialchars($_POST["opmerking"]);

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO submissions (name, tijd, opmerking) VALUES (?, ?, ?)");
    
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }

    $stmt->bind_param("sss", $name, $tijd, $opmerking);

    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    }

    $stmt->close();
}

$conn->close();

// Redirect to the specified page
$redirect_url = "index.php"; // Adjust this to the desired page
header("Location: $redirect_url");
exit;

?>
