<?php
// verifica login
include '../sistema_de_login/verifica_login.php';
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM alunos WHERE id = '$id'";

    if(mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../crudAlunos/indexAlunos.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar.";
        header('Location: ../crudAlunos/indexAlunos.php');
    endif;
endif;
