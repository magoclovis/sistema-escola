<?php
//Encerrando a sessão
session_start();
session_destroy();
header('Location: login.php');
