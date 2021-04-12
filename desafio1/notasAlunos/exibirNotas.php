<?php
// inicio da sessao
//session_start();

// connection
include_once '../crudProfessores/php_action/db_connect.php';

// header
include_once '../crudProfessores/includes/header.php';

// verifica login
include '../sistema_de_login/verifica_login.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Notas lançadas</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Matéria:</th>
                    <th>Nota:</th>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php

            //verificar o que ta rolando com o session login
            //echo !$_SESSION['login'];

                $getAlunosSql = "SELECT * FROM alunos";
                $resultado = mysqli_query($connect, $getAlunosSql);

                if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                    
            ?>
                <tr>
                    <td><?php echo $dados['materia']?></td>
                    <td><?php echo $dados['nota']?></td>

                </tr>
                <?php 
                endwhile;
                else: 
                ?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <?php
                endif;
                ?>
            </tbody>
        </table>
        <br>

        <a href="notas.php" class="btn">Ir para a página de alunos</a>
        <a href="../coisas_nao_utilizadas/teste.php" class="btn blue">Testes</a>
        <a href="../sistema_de_login/logoutAluno.php" class="btn red">Sair</a>

    <!--   tirar autenticacao após logout, não sei aonde colocar isso no script do index   -->
    <?php
        if(isset($_SESSION['nao_autenticado'])):
    ?>
<div class="notification is-danger"></div>
    <?php
        endif;
    ?>

</div>
</div>
<?php
include_once '../crudProfessores/includes/footer.php';
?>