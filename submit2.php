<?php
// MySQL server configuration
$servername = "techvedikadb.cf6cym0o01e2.ap-south-1.rds.amazonaws.com";
$username = "durgarao";
$password = "Durga12345";
$dbname = "capstone";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the username entered by the user
$userInput = $_POST['Name'];

// Prepare the SQL statement to check username validity
$stmt = $conn->prepare("SELECT * FROM capstone.customers WHERE Name = ?");
$stmt->bind_param("s", $userInput);
$stmt->execute();
$result = $stmt->get_result();

// Check if the username exists
if ($result->num_rows > 0) {
    include 'thankyou.html';
} else {
    echo '<div style="
        color: red;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-top: 100px;
        font-family: Segoe UI, Tahoma, sans-serif;
    ">
        ❌ User not found.<br>Please check your name and try again.
    </div>';
}

// Close the connection
$conn->close();
?>
