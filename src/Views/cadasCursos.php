<?php $this->layout("_theme", ["title" => "Cadastro de cursos", "lang" => $lang]); ?>

<div class="row cursosbox">
    <h1>Cadastro do Curso</h1>
    <form action="cadastrarCursos.php" method="POST">
        <div>
            <div class="input-field col s5">
                <input id="first_name" type="text" name="curso" class="validate input" />
                <label class="active black-text" for="first_name"><?= $lang["labelCadCurso01"]?></label>
            </div>
        </div>
        <div class="btn-cursos">
            <button class="btn center waves-effect  red lighten-1" type="submit"><i class=" material-icons right">book</i><?= $lang["btnCadCurso"]?></button>
        </div>
    </form>
</div>