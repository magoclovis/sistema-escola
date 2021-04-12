<?php
// verifica login
include '../sistema_de_login/verifica_login.php';
session_start();
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $getProfessoresSql = "DELETE FROM professores WHERE id = '$id'";

    if(mysqli_query($connect, $getProfessoresSql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar.";
        header('Location: ../index.php');
    endif;
endif;