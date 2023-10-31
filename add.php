<?php
session_start();
include './config.php';

// Get the values from the form
$name = $_POST['name'];
$location = $_POST['location'];
$price = $_POST['price'];
$desc = $_POST['desc'];
$rooms = $_POST['rooms'];

// Get the image
$fileName = $_FILES['image']['name'];
$tempName = $_FILES['image']['tmp_name'];

// Store the image in the local storage
move_uploaded_file($tempName, './images/' . $fileName);

// Send the data to the database
$insert = "INSERT INTO hotel(name, location, price, description, rooms, image) VALUES ('$name', '$location', $price, '$desc', $rooms, '$fileName')";

// Execute the query

$result = mysqli_query($connection, $insert);

// Start a session to store your message
$_SESSION['success'] = 'Hotel Added Successfully!!!';

// Return back
header("Location: {$hostname}/add-hotel.php");
?>