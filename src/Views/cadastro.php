<?php $this->layout("_theme", ["title" => "Cadastro","lang" => $lang]); ?>

<div id="form">
    <div class="row caix-row">
        <form  id="formCadastro" class="form col s5 right" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" id="name" name="nome" class="validate" maxlength="40" data-required=""/>
                    <label for="name" class="black-text"><?= $lang["formName"]; ?></label>
                </div>
                <div class="input-field col s4">
                    <input type="email" name="email" id="email" class="validate" placeholder="usuario@enderoço.com" autocomplete data-required=""/>
                    <label for="e-mail" data-error="E-mail Inválido" class="black-text"><span class="required">*</span><?= $lang["formEmail"]; ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" name="cpf" id="cpf" maxlength="11" placeholder="123.456.789-22" data-required=""/>
                    <label for="cpf" class="black-text"><span class="required">*</span><?= $lang['formCpf']; ?></label>
                </div>
                <div class=" input-field col s4">
                    <select name="id_curso" id="id_curso" data-required="">
                        <option disable selected></option>
                    </select>
                    <label for="curso" class="black-text"><span class="required">*</span><?= $lang['formSelect']; ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s5">
                    <input type="text" name="cidade" id="cidade" placeholder="Cidade" class="validate" data-required=""/>
                    <label for="ende" class="black-text"><span class="required">*</span><?= $lang['formCity']; ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s5">
                    <input type="text" name="endereco" id="address" placeholder="Rua... n°" class="validate" data-required=""/>
                    <label for="address" class="black-text"><span class="required">*</span><?= $lang['formAddress']; ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s5">
                    <input type="password" id="passwd" class="validate" name="senha" maxlength="8" title="No máximo 8 caracteres" maxlength="8" title="Dica: A senha deve conter números, letras e caracteres" data-required=""/>
                    <i class="material-icons botao">visibility_off</i>
                    <label for="senha" class="black-text"><span class="required">*</span><?= $lang['formPasswd']; ?></php></label>
                </div>
            </div>
            <div class="row">
                <p>
                    <label>
                        <input type="checkbox" id="confirm" class="filled-in" checked="checked" />
                        <span><?= $lang['btnConfirm']; ?></span>
                    </label>
                </p>
                <p>
                    <label>
                        <input id="terms" type="checkbox" />
                        <span><?= $lang['btnTerms']; ?></span>
                    </label>
                </p>
                <button class="btn center waves-effect  indigo lighten-1"><i class="material-icons small right">person_add</i><?= $lang['btnSubmit']; ?></button>
            </div>
        </form>
    </div>
</div>

<?php $this->start("scripts");?>

<script src="./src/assets/js/cadastro.js"></script>
<?php $this->stop();?>