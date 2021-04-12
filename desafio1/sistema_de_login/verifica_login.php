<?php
session_start();

//sempre entra nesse if fazendo voltar pro login, a ideia é quando logar sair desse if
if(!$_SESSION['login']):
    header('Location: ../sistema_de_login/login.php');
endif;