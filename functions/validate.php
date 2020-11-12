<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
    include_once("connection.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['username'])) && (isset($_POST['password']))){
        $username = mysqli_real_escape_string($conn, $_POST['username']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password = md5($password);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_user = "SELECT * FROM users WHERE username = '$username' && password = '$password' LIMIT 1";
        $user_result = mysqli_query($conn, $result_user);
        $result = mysqli_fetch_assoc($user_result);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($result)){
            $_SESSION['id'] = $result['id'];
            $_SESSION['firstname'] = $result['first_name'];
            $_SESSION['access_level'] = $result['access_level'];
            if($_SESSION['access_level'] == "2"){
                header("Location: ../inc/admin.php");
            }else{
                header("Location: ../inc/app.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: ../inc/signin.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: ../inc/signin.php");
    }
?>