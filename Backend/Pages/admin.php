<?php
    // Puxa o nível de acesso do usuário
    $access = $_SESSION["access_level"];
    $previous_page = "javascript:history.go(-1)";
    
    // Verifica se o usuário tem permissão, caso contrario ele é redirecionado a pagina do app
    if($access != "2"){
        echo '<script type="text/Javascript">
            history.go(-1);
        </script>';
    }

?>

