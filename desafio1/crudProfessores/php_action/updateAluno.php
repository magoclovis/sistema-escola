<?php
// verifica login
include '../sistema_de_login/verifica_login.php';
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $matricula = mysqli_escape_string($connect, $_POST['matricula']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $nota = mysqli_escape_string($connect, $_POST['nota']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE alunos SET nome = '$nome', sobrenome = '$sobrenome', matricula = '$matricula', email = '$email', nota = '$nota' WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../crudAlunos/indexAlunos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar.";
        header('Location: ../crudAlunos/indexAlunos.php');
    endif;
endif;