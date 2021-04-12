<?php
// verifica login
include '../sistema_de_login/verifica_login.php';

//include_once '../crudProfessores/includes/header.php';
?>

<div class="row">
<form class="col s12">

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">História</label>
</p>

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">Geografia</label>
</p>

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">Português</label>
</p>

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">Matemática</label>
</p>

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">Inglês</label>
</p>

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">Educação Física</label>
</p>

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">Informática</label>
</p>

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">Sociologia</label>
</p>

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">Filosofia</label>
</p>

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">Artes</label>
</p>

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">Química</label>
</p>

<p>
<input name="materias" type="radio" id="materia">
<label for="materia">Física</label>
</p>

</div>

<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
    <a href="../crudProfessores/index.php" class="btn green">Lista de professores</a>

</form>

<?php
include_once '../crudProfessores/includes/footer.php';
?>