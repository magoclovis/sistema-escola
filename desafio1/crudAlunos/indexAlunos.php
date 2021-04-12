<?php
// connection
include_once '../crudProfessores/php_action/db_connect.php';
// header
include_once '../crudProfessores/includes/header.php';
// message pop-out
include_once '../crudProfessores/includes/message.php';
// verifica login
include '../sistema_de_login/verifica_login.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light">Alunos</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Sobrenome:</th>
                    <th>Matrícula:</th>
                    <th>Email:</th>
                    <th>Matérias:</th>
                    <th>Nota:</th>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $sql = "SELECT * FROM alunos";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                    
            ?>
            <tr>
                    <td><?php echo $dados['nome']?></td>
                    <td><?php echo $dados['sobrenome']?></td>
                    <td><?php echo $dados['matricula']?></td>
                    <td><?php echo $dados['email']?></td>
                    <td><?php echo $dados['materia']?></td>
                    <td><?php echo $dados['nota']?></td>

                    <td><a href="editarAluno.php?id=<?php echo $dados['id'];?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                    <td><a href="#modal <?php echo $dados['id']?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                    <!-- Modal Structure -->
                    <div id="modal <?php echo $dados['id']?>" class="modal">
                    <div class="modal-content">
                    <!-- <h4>Opa</h4> -->
                    <p>Deseja realmente excluir esse aluno?</p>
                    </div>
                    <div class="modal-footer">
                    <form action="php_action/deleteAluno.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $dados['id']?>">
                        <button type="submit" name="btn-deletar" class="btn red">Sim, desejo deletar.</button>
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                    </form>
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
                    <td>-</td>
                </tr>
                <?php
                endif;
                ?>
            </tbody>
        </table>
        <br>
        <a href="adicionarAluno.php" class="btn">Adicionar aluno</a>
<!--        <a href="" class="btn">Atualizar notas</a>     -->
        <a href="../notasAlunos/exibirNotas.php" class="btn">Atualizar notas</a>
        <a href="../coisas_nao_utilizadas/teste.php" class="btn blue">Testes</a>
        <a href="../sistema_de_login/logout.php" class="btn red">Sair</a>
    </div>
</div>
<?php
include_once '../crudProfessores/includes/footer.php';
?>