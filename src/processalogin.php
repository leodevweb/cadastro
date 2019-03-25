<?php
include_once("conexao.php");


$email = $_POST["email"];
$senha = $_POST["senha"];

//faz uma consulta no db pra ver se existe
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
$consulta = mysqli_query($conexao, $sql);
$registros = mysqli_num_rows($consulta); //conta quantas linhas possui no db com esses registros digitados  em consulta.
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!--Carrega o css da pasta css-->
    <link rel="stylesheet" href="css/style.css">


    <title>Sistema</title>
  </head>
  <body class="bg-light">
<!--Container-->
      <div class="container">
          <div class="row my-5 justify-content-center">
              <div class="col-sm-3 p-4 bg-danger text-center rounded">
                  <?php
                    if($registros > 0){
                        session_start(); // abre uma sessão
                        $_SESSION["email"]=$_POST["email"];
                        $_SESSION["senha"]=$_POST["senha"];
                        header("location: painel.php");
                    
                    }else {
                        echo "Nome de Usuário ou senha inválidos";  
                    }
                    
                    mysqli_close($conexao);

                
                  ?>
                  <a href="../index.html">Voltar</a>
              </div>
            </div>
      </div>







    </div>
<!--Container-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>

