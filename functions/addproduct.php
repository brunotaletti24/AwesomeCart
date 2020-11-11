<?php

include("connection.php");

$nome = $_POST["name"];
$description = $_POST["description"];
$code = $_POST["code"];
$photo = $_POST["photo"];

$query = "INSERT INTO products (name, description, code, photo) VALUES ('$nome', '$description', '$code', '$photo')";
$sql = mysqli_query($conn, $query);

header("Location: ../inc/admin.php");
?>