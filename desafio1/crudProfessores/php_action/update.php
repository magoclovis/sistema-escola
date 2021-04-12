<?php
// verifica login
include '../sistema_de_login/verifica_login.php';
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $materia = mysqli_escape_string($connect, $_POST['materia']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $getProfessoresSql = "UPDATE professores SET nome = '$nome', sobrenome = '$sobrenome', email = '$email', materia = '$materia', idade = '$idade' WHERE id = '$id'";

    if(mysqli_query($connect, $getProfessoresSql)):
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao atualizar.";
        header('Location: ../index.php');
    endif;
endif;