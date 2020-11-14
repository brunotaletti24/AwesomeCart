<?php
    //Incluindo a conexão com banco de dados   
    include_once("../Database/connection.php");  
    
    // Inicia a sessão
    session_start(); 

    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['username'])) && (isset($_POST['password']))){
        $username = $_POST['username']; //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $password = $_POST['password'];
        $password = md5($password);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $stmt = $db->prepare("SELECT * FROM users WHERE username = '$username' && password = '$password' LIMIT 1");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($result)){
            $_SESSION['id'] = $result['id'];
            $_SESSION['firstname'] = $result['first_name'];
            $_SESSION['lastname'] = $result['last_name'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['phone'] = $result['phone'];
            $_SESSION['access_level'] = $result['access_level'];
            if($_SESSION['access_level'] == "2"){
                header("Location: ../../Frontend/Pages/admin.php");
            }else{
                header("Location: ../../Frontend/Pages/app.php");
            }
        }
    }
?>