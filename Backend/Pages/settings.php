<?php

// Inclui a conexão com banco de dados   
include_once("../Database/connection.php"); 

// Inicia a sessão
session_start(); 

// Passa os parametros capturados no formulário para as variaveis abaixo
$id = $_SESSION['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
    
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
if($verify_username_result > 0 && $verify_email_result > 0){ // Verifica email e usuarios iguais
    echo "Sorry, this username and email is already registred!";
} else if($verify_username_result > 0){ // Verifica usuário igual
    echo "Sorry, username is already registred!";
} else if($verify_email_result > 0){ // Verifica email iguail
    echo "Sorry, this email already registred!";
} else{  // Caso esteja tudo certo

    // Atualiza os dados do usuário no banco
    $query = $db->prepare("UPDATE users 
    SET first_name='$firstname',
    last_name='$lastname',
    first_name='$firstname',
    username='$username',
    email='$email',
    phone='$phone'
    WHERE id='$id'
    LIMIT 1");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    // Atualiza os dados da sessão
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;

    // Leva o usuário de volta a página de ajustes
    header("Location:javascript://history.go(-1)");
}

?>