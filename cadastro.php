<?php 
    require_once "conexao.php";
    require_once "menu.php";
    require_once "footer.php";
    require_once "tradutor.php";
    $_SESSION['idioma'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="description" content="Os melhores cursos EAD de programação gratuito com certificado.">
    <meta name="author" content="Marcio alemão">
    <title><?php echo title;?></title>
    <link rel="shortcut icon" type="image/x-icon" href="svg/web.svg">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php
       menu($menu, $menuSM, $menuIdioma,$btnBr, $btnEn);
    ?>
    <div id="form">
        <div class="row caix-row">
            <form action="usercadastro.php" method="POST" class="form col s5 right">
                <div class="row">
                    <div class="input-field col s4">
                        <input type="text" id="name" name="nome" maxlength="40" />
                        <label for="name" class="black-text"><?php echo $formName;?></label>
                    </div>
                    <div class="input-field col s4">
                        <input type="email" name="email" id="e-mail" class="validate" placeholder="usuario@enderoço.com"
                            autocomplete required />
                        <label for="e-mail" data-error="E-mail Inválido" class="black-text"><span
                                class="required">*</span><?php echo $formEmail;?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="text" name="cpf" id="cpf" class="validate" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                            maxlength="15" title="Dica: 123.456.789-22" placeholder="123.456.789-22" required />
                        <label for="cpf" class="black-text"><span class="required">*</span><?php echo $formCpf;?></label>
                    </div>
                    <div class=" input-field col s4">
                        <select name="curso" id="est">
                            <option disable selected></option>
                            <?php
									 $select = "SELECT * FROM cursos ORDER BY nomeCursos ASC";
									 $dadosCursos = mysqli_query($conexaoMysql, $select);

									 while($dadosCursosArray = mysqli_fetch_array($dadosCursos)){
										 echo "<option value='$dadosCursosArray[id_curso]'>$dadosCursosArray[nomeCursos]</option>";
									 }
							  ?>
                        </select>
                        <label for="est" class="black-text"><span class="required">*</span><?php echo $formSelect;?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" class="validate" required />
                        <label for="ende" class="black-text"><span class="required">*</span><?php echo $formCity;?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                        <input type="text" name="endereco" id="ende" placeholder="Rua... n°" class="validate"
                            required />
                        <label for="ende" class="black-text"><span class="required">*</span><?php echo $formEnd;?></label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                        <input type="password" id="senha" class="validate" name="senha" data-lenght="8"
                            title="No maximo 8 caracteres" maxlength="8"
                            title="Dica: A senha deve conter numeros, letras e cacteres" required />
                        <i class="material-icons botao">visibility_off</i>
                        <label for="senha" class="black-text"><span class="required">*</span><?php echo $formPassword;?></php></label>
                    </div>
                </div>
                <div class="row">
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in" checked="checked" />
                            <span><?php echo $btnConfi;?></span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="indeterminate-checkbox" type="checkbox" />
                            <span><?php $btnTerms;?></span>
                        </label>
                    </p>
                    <button class="btn center waves-effect  indigo lighten-1" type="submit"><i
                            class="material-icons small right">person_add</i><?php echo $btnSubmit;?></button>
                </div>
            </form>
        </div>
    </div>
    <?php
        footer($sujestoes,$contatos,$freepik,$redeSociais);
    ?>
    <!--jaquery-->
    <script src="js/jquery.js"></script>
    <!--javaScript materialize -->
    <script src="js/materialize.min.js"></script>
    <!--JavaScript -->
    <script src="js/index.js"></script>
</body>

</html>