<?php
//abri a conexão com o db
include_once("conexao.php");

//verifica se não esta(!) logado, redireciona para a pagina de login.
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
    header("location: ../index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel</title>
</head>
<body>
 <a href="sair.php">Sair</a>   
</body>
</html>