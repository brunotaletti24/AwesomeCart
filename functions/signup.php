<?php 
// Inclui a conexao com o banco
include_once("connection.php");

// Puxa os itens do forulario e trata para evitar ataque sqli
$name = mysqli_real_escape_string($conn, $_POST['name']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password = md5($password);

// Executa a query para adicionar o usuario ao banco
$query = "INSERT INTO user (name, username, email, phone, password, access_level) VALUES ('$name', '$username', '$email', '$phone', '$password', '1')";
$sql = mysqli_query($conn, $query);

// Verifica se o usuario ja existe e executa uma ação
if(mysqli_insert_id($conn)){
    header("url=../inc/signin.php");
} else{
    echo("Usuário já existe!");
}

?>