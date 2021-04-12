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
    $email = clear($_POST['email']);
    $materia = clear($_POST['materia']);
    $idade = clear($_POST['idade']);

    $getProfessoresSql = "INSERT INTO professores (nome, sobrenome, email, materia, idade) VALUES ('$nome', '$sobrenome', '$email', '$materia', '$idade')";

    if(mysqli_query($connect, $getProfessoresSql)):
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao cadastrar.";
        header('Location: ../index.php');
    endif;
endif;