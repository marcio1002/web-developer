<?php $this->layout("_theme", ["title" => "Cadastro","lang" => $lang]); ?>

<div id="form">
    <div class="row caix-row">
        <form class="form col s5 right" enctype="multipart/form-data">
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" id="name" name="nome" maxlength="40" />
                    <label for="name" class="black-text"><?= $lang["formName"]; ?></label>
                </div>
                <div class="input-field col s4">
                    <input type="email" name="email" id="e-mail" class="validate" placeholder="usuario@enderoço.com" autocomplete required />
                    <label for="e-mail" data-error="E-mail Inválido" class="black-text"><span class="required">*</span><?= $lang["formEmail"]; ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input type="text" name="cpf" id="cpf" class="validate" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" maxlength="15" title="Dica: 123.456.789-22" placeholder="123.456.789-22" required />
                    <label for="cpf" class="black-text"><span class="required">*</span><?= $lang['formCpf']; ?></label>
                </div>
                <div class=" input-field col s4">
                    <select name="curso" id="est">
                        <option disable selected></option>
                        <?php
                        $select = "SELECT * FROM cursos ORDER BY nomeCursos ASC";
                        if(isset($conexaoMysql)) {
                            $dadosCursos = mysqli_query($conexaoMysql, $select);

                            while ($dadosCursosArray = mysqli_fetch_array($dadosCursos)) {
                                echo "<option value='$dadosCursosArray[id_curso]'>$dadosCursosArray[nomeCursos]</option>";
                            }
                        }
                        ?>
                    </select>
                    <label for="est" class="black-text"><span class="required">*</span><?= $lang['formSelect']; ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s5">
                    <input type="text" name="cidade" id="cidade" placeholder="Cidade" class="validate" required />
                    <label for="ende" class="black-text"><span class="required">*</span><?= $lang['formCity']; ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s5">
                    <input type="text" name="endereco" id="ende" placeholder="Rua... n°" class="validate" required />
                    <label for="ende" class="black-text"><span class="required">*</span><?= $lang['formAddress']; ?></label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s5">
                    <input type="password" id="senha" class="validate" name="senha" data-lenght="8" title="No maximo 8 caracteres" maxlength="8" title="Dica: A senha deve conter numeros, letras e cacteres" required />
                    <i class="material-icons botao">visibility_off</i>
                    <label for="senha" class="black-text"><span class="required">*</span><?= $lang['formPasswd']; ?></php></label>
                </div>
            </div>
            <div class="row">
                <p>
                    <label>
                        <input type="checkbox" class="filled-in" checked="checked" />
                        <span><?= $lang['btnConfirm']; ?></span>
                    </label>
                </p>
                <p>
                    <label>
                        <input id="indeterminate-checkbox" type="checkbox" />
                        <span><?= $lang['btnTerms']; ?></span>
                    </label>
                </p>
                <button class="btn center waves-effect  indigo lighten-1" type="submit"><i class="material-icons small right">person_add</i><?= $lang['btnSubmit']; ?></button>
            </div>
        </form>
    </div>
</div>