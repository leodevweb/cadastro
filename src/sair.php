<?php //botao de sair do login
    session_start(); //inicia a sessão
    session_destroy();//destroe a sessão    
    header("location: ../index.html"); //redireciona para a pagina de login
?>