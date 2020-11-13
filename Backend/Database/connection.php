<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "awesomecart";

try{
    $db = new PDO("mysql:host=$host;dbname=$database", $username, $password);
} catch(PDOException $e){
    die('Connection Error: ' . $e->getMessage());
}
?>