<?php 

// Inclui a conexao com o banco
include_once("../Database/connection.php");

// Puxa os itens do forulario
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = md5($_POST['password']);

// Verifica se os dados estão disponiveis

// Procura o Usuário
$verify_username = $db->prepare("SELECT username FROM users WHERE username='$username'");
$verify_username->execute();
$verify_username_result = $verify_username->fetchColumn();

// Procura o Email
$verify_email = $db->prepare("SELECT email FROM users WHERE email='$email'");
$verify_email->execute();
$verify_email_result = $verify_email->fetchColumn();

// Faz a verificação
if($verify_username_result && $verify_email_result){ // Verifica email e usuarios iguais
    echo "Sorry, this username and email is already registred!";
} else if($verify_username_result){ // Verifica usuário igual
    echo "Sorry, username is already registred!";
} else if($verify_email_result){ // Verifica email iguail
    echo "Sorry, this email is already registred!";
} else{
    // Insere o usuário no banco de dados
    $query = $db->prepare("INSERT INTO users (first_name, last_name, username, email, phone, password, access_level) VALUES ('$firstname', '$lastname', '$username', '$email', '$phone', '$password', '1')");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    // Redireciona o mesmo para a página de login
    header("Location: ../../Frontend/Pages/signin.php");
}

?>