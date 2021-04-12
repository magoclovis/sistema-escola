<?php
//conexão com o banco de dados
require_once '../crudProfessores/php_action/db_connect.php';

//sessão
//session_start();

// verifica login
include '../sistema_de_login/verifica_login.php';

// header
include_once '../crudProfessores/includes/header.php';

?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Alunos</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Matricula:</th>
                    <th>Email:</th>
                    <th>Matérias:</th>
<!--                    <th>Nota:</th>        -->
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php

                $getAlunosSql = "SELECT * FROM alunos";
                $resultado = mysqli_query($connect, $getAlunosSql);

                if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                    
            ?>
                <tr>
                    <td><?php echo $dados['nome']?></td>
                    <td><?php echo $dados['sobrenome']?></td>
                    <td><?php echo $dados['matricula']?></td>
                    <td><?php echo $dados['email']?></td>
                    <td><?php echo $dados['materia']?></td>

                    <!-- Modal Structure -->
                    <div id="modal <?php echo $dados['id']?>" class="modal">
                    <div class="modal-content">

                    </div>
                    </div>

                </tr>
                <?php 
                endwhile;
                else: 
                ?>
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <?php
                endif;
                ?>
            </tbody>
        </table>
        <br>
        <a href="exibirNotas.php" class="btn">Exibir notas</a>
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