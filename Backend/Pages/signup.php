<?php 
// Inclui a conexao com o banco
include_once("../Database/connection.php");

// Puxa os itens do forulario e trata para evitar ataque sqli
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$password = md5($password);

// Executa a query para adicionar o usuario ao banco
$stmt = $db->prepare("INSERT INTO users (first_name, last_name, username, email, phone, password, access_level) VALUES ('$firstname', '$lastname', '$username', '$email', '$phone', '$password', '1')");
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

// Verifica se o usuario ja existe e executa uma ação
if(!$result){
    echo "usuario ja registrado!";
} else{
    header("Location: ../../Frontend/Pages/signin.php");
}

?>