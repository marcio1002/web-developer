<?php $this->layout("_theme", ["title" => "Cadastro de cursos", "lang" => $lang]); ?>
<?php $this->start("cadastro-curso");?>
<div class="row" id="cursosbox">
    <h1>Cadastro do Curso</h1>
    <form id="formCadCurses" class="col s12" enctype="multipart/form-data">
        <div>
            <div class="input-field col s5">
                <input id="nameCurse" type="text" name="nome" class="validate input" />
                <label class="active black-text" for="nameCurse"><?= $lang["labelCadCurso01"]?></label>
            </div>
        </div>
        <div class="btn-cursos">
            <button id="btnCadCurses" class="btn center waves-effect  red lighten-1" type="submit"><i class=" material-icons right">book</i><?= $lang["btnCadCurso"]?></button>
        </div>
    </form>
</div>
<?php $this->stop();?>
<?php $this->start("scripts")?>
    <script src="./src/assets/js/cadastroCursos.js"></script>
<?php $this->stop();?>