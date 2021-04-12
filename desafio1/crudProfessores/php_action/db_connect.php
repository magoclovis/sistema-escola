<?php
//conexao com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "desafio1";

$connect = mysqli_connect($servername, $username, $password, $db_name) or die ('Não foi possível conectar');
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;