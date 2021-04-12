<?php
// verifica login
include '../sistema_de_login/verifica_login.php';
session_start();
require_once 'db_connect.php';

function clear($input) {
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn-cadastrar'])):
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $matricula = clear($_POST['matricula']);
    $email = clear($_POST['email']);
    $nota = clear($_POST['nota']);

    $sql = "INSERT INTO alunos (nome, sobrenome, matricula, email, nota) VALUES ('$nome', '$sobrenome', '$matricula', '$email', '$nota')";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../../crudAlunos/indexAlunos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar.";
        header('Location: ../../crudAlunos/indexAlunos.php');
    endif;
endif;