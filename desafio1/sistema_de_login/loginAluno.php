<?php
//conexão
require_once '../crudProfessores/php_action/db_connect.php';
//sessão
session_start();
//botão enviar
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $_SESSION['nao_autenticado'] = true;
        $erros[] = "<li> O campo login/senha precisa ser preenchido </li>";
    else:
        $sql = "SELECT login FROM loginalunos WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);
            $sql = "SELECT * FROM loginalunos WHERE login = '$login' AND senha = '$senha'";
            $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);
                $_SESSION['login'] = $login;
                $_SESSION['id_login'] = $dados['id'];
                header('Location: ../notasAlunos/notas.php');
            else:
            $_SESSION['nao_autenticado'] = true;
            $erros[] = "<li> Usuário e senha não conferem </li>";
            endif;
        else:
            $_SESSION['nao_autenticado'] = true;
            $erros[] = "<li> Usuário inexistente </li>";
        endif;
    endif;
endif;
?>

<html>
<head>
    <title>Login - Alunos</title>
    <meta charset="utf-8">
</head>
<body>

<h1> Login - Alunos</h1>

<?php
if(!empty($erros)):
    foreach ($erros as $erro) :
    echo $erro;
    endforeach;
endif;
?>

<hr>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
Login: <input type="text" name="login"><br>
Senha: <input type="password" name="senha"><br>
<button type="submit" name="btn-entrar"> Entrar </button>

</form>
</body>
</html>