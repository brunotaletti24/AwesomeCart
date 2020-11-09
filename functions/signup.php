<?php 
include_once("connection.php");

$name = mysqli_real_escape_string($conn, $_POST['name']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password = md5($password);

$query = "INSERT INTO user (name, username, email, phone, password, access_level) VALUES ('$name', '$username', '$email', '$phone', '$password', '1')";
$sql = mysqli_query($conn, $query);

header('Location: ../inc/signin.php');
?>