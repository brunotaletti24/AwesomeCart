<?php 
// Inclui a conexao com o banco
include_once("connection.php");

// Puxa os itens do forulario e trata para evitar ataque sqli
$firstname = mysqli_real_escape_string($conn, $_POST['first_name']);
$lastname = mysqli_real_escape_string($conn, $_POST['last_name']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password = md5($password);

// Executa a query para adicionar o usuario ao banco
$query = "INSERT INTO users (first_name, last_name, username, email, phone, password, access_level) VALUES ('$firstname', '$lastname', '$username', '$email', '$phone', '$password', '1')";
$sql = mysqli_query($conn, $query);

// Verifica se o usuario ja existe e executa uma ação
if(mysqli_insert_id($conn)){
    header("Location: ../inc/signin.php");
} else{
    echo "Usuário já existe!";
}

?>