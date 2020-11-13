<?php
// Conecta com o banco de dados
include("../../Backend/Database/connection.php");  

// Puxa os dados da tabela produtos
$stmt = $db->prepare("SELECT * FROM products");
$stmt->execute();

?>