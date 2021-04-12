<?php
// verifica login
include '../sistema_de_login/verifica_login.php';

include_once '../crudProfessores/includes/header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Novo aluno</h3>
        <form action="../crudProfessores/php_action/createAluno.php" method = "POST">
        <div class="input-field col s12">
            <input type="text" name="nome" id="nome">
            <label for="nome">Nome</label>
        </div>
        <div class="input-field col s12">
            <input type="text" name="sobrenome" id="sobrenome">
            <label for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-field col s12">
            <input type="text" name="matricula" id="matricula">
            <label for="matricula">Matrícula</label>
        </div>
        <div class="input-field col s12">
            <input type="text" name="email" id="email">
            <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
            <input type="text" name="nota" id="nota">
            <label for="nota">Nota</label>
        </div>        
        <button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
        <a href="indexAlunos.php" class="btn green">Lista de alunos</a>
        </form>
    </div>
</div>
<?php
include_once '../crudProfessores/includes/footer.php';
?>