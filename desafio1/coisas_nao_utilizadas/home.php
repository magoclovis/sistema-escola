<?php
//conexão com o banco de dados
require_once '../crudProfessores/php_action/db_connect.php';

//sessão
session_start();

//verificação
//if((!$_SESSION['login'])):
//    header('Location: login.php');
//endif;

//dados
$id = $_SESSION['id_login'];
$sql = "SELECT * FROM professores WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);
?>

<html>
<head>
    <title>Página Restrita</title>
    <meta charset="utf-8">
</head>
<body>
<h1>Olá <?php echo $dados['nome']; ?> </h1>
<a href="logout.php">Sair</a>
</body>
</html>