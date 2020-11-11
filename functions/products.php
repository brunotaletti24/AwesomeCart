<?php
// Conecta com o banco de dados
include("connection.php");
// Puxa os dados da tabela produtos
$query = "SELECT * FROM products";
$product = mysqli_query($conn, $query);
?>