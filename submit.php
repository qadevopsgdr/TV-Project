<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$mysqli = new mysqli('techvedikadb.cf6cym0o01e2.ap-south-1.rds.amazonaws.com', 'durgarao', 'Durga12345', 'capstone');
if ($mysqli->connect_errno) {
    die('Failed to connect to MySQL: ' . $mysqli->connect_error);
}

$query = "INSERT INTO customers (name, gender, email, phone) VALUES ('$name', '$gender', '$email', '$phone')";
if (!$result = $mysqli->query($query)) {
    die('Error executing query: ' . $mysqli->error);
}

$mysqli->close();


include 'thankyou.html';

?>
