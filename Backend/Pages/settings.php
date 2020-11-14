<?php
    //Incluindo a conexão com banco de dados   
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

    // Realiza a query com os dados informados pelo usuário
    $stmt = $db->prepare("UPDATE users 
    SET first_name='$firstname',
    last_name='$lastname',
    first_name='$firstname',
    username='$username',
    email='$email',
    phone='$phone'
    WHERE id='$id'
    LIMIT 1");

    // Atualiza a tabela users com os parametros informados pelo usuario
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    header("javascript:history.back()");
?>