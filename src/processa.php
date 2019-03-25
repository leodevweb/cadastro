<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuarios (nome,email,senha) values ('$nome', '$email', '$senha')";
$salvar =  mysqli_query($conexao, $sql);

$linha = mysqli_affected_rows($conexao);

mysqli_close($conexao);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!--Bootstrap CSS--> 
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!--Carrega o css da pasta css-->
    <link rel="stylesheet" href="../css/style.css">


    <title>Sistema</title>
</head>

<body class="bg-light">
<!--Container-->
    <div class="container">
        <div class="row my-5 justify-content-center">
            <div class="col-sm-3 p-4 bg-danger text-center rounded">
            <?php

                if($linha == 1){
                    echo "Cadastro efetuado com sucesso! Aguarde um instante...";
                    
                } else{
                    echo "Cadastro não efetuado.<br/>E-mail já existe!"; 
                }
            ?>   
            </div>
        </div>
    </div>
    

<!--RETORNA PARA A PAGINA ANTERIOR EM 5 SEGUNDOS-->
<script>                      
       var aviso = setInterval(foco, 1000);
        cont = 0;
        function foco(){
          if(document.hasFocus()){
            cont++;
          }	
            if(cont >= 5){
                location.href="../cadastro.html";
            }	
        }
</script>  
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="./node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script> 
</body>
</html>