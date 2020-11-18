<?php
// Inclui a conexão com o banco de dados
include("../Database/connection.php");

// Passa os parametros capturados no formulário para as variaveis
$name = $_POST["productname"];
$description = $_POST["description"];
$site = $_POST["discountsite"];
$percentage = $_POST["percentage"];
$code = $_POST["code"];
$photo = $_POST["photo"];
$interest = $_POST["interest"];

// Executa a query de inserção
$query = $db->prepare("INSERT INTO products (name, description, site, percentage, code, photo, interest) VALUES ('$name', '$description', '$site', '$percentage', '$code', '$photo', '$interest')");
$query->execute();
$sql = $query->fetchColumn();

// Leva o usuário de volta para a página anterior
header("Location:javascript://history.go(-1)");
?>