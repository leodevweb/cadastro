<?php
$hostname = "localhost";		
$user = "root";				//padrão de localhost			
$password = "";				//senha em branco			
$database = "sistema2";			//nome do db	
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){ 
	print "Falha na conexão com o db";
}

?>