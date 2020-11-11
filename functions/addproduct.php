<?php

include("connection.php");

$name = $_POST["name"];
$description = $_POST["description"];
$percentage = $_POST["percentage"];
$code = $_POST["code"];
$photo = $_POST["photo"];

$query = "INSERT INTO products (name, description, percentage, code, photo) VALUES ('$name', '$description', '$percentage', '$code', '$photo')";
$sql = mysqli_query($conn, $query);

header("Location: ../inc/admin.php");
?>