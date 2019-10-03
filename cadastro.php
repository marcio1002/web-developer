<?php require_once "conexao.php";?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="description" content="Os melhores cursos EAD de programação gratuito com certificado.">
    <meta name="author" content="Marcio alemão">
    <title>Web Developer</title>
    <link rel="shortcut icon" type="image/x-icon" href="svg/web.svg">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="navbar-fixed">
        <nav class="home">
            <div class="nav">
                <a href="index.php" class="espaco brand-logo red-text "><img src="svg/web2.svg" /> Web Developer</a>
                <ul class="right  hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="cursos.php">Cursos</a></li>
                    <li><a href="https://www.intelectua.com.br/blog/o-que-e-desenvolvimento-web" target="_blanck">Saiba
                            mais</a></li>
                    <li class="butao-cdt"><a href="cadastro.php">cadastre-se<i
                                class="small material-icons right ">create</i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div id="for">
        <div class="row caix-row">
            <form action="usercadastro.php" method="POST" class="form col s5 right">
                <div class="row">
                    <div class="input-field col s4">
                        <input type="text" id="name" name="nome" maxlength="40" />
                        <label for="name" class="black-text">Nome completo:</label>
                    </div>
                    <div class="input-field col s4">
                        <input type="email" name="email" id="e-mail" class="validate" placeholder="usuario@enderoço.com"
                            autocomplete required />
                        <label for="e-mail" data-error="E-mail Inválido" class="black-text"><span
                                class="required">*</span>E-mail:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="text" name="cpf" id="cpf" class="validate" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                            maxlength="15" title="Dica: 123.456.789-22" placeholder="123.456.789-22" required />
                        <label for="cpf" class="black-text"><span class="required">*</span>Digite o CPF:</label>
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
                        <label for="est" class="black-text"><span class="required">*</span>Escolha o curso:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                        <input type="text" name="cidade" id="cidade" placeholder="Cidade" class="validate" required />
                        <label for="ende" class="black-text"><span class="required">*</span>Cidade:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                        <input type="text" name="endereco" id="ende" placeholder="Rua... n°" class="validate"
                            required />
                        <label for="ende" class="black-text"><span class="required">*</span>Endereço:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s5">
                        <input type="password" id="senha" class="validate" name="senha" data-lenght="8"
                            title="No maximo 8 caracteres" maxlength="8"
                            title="Dica: A senha deve conter numeros, letras e cacteres" required />
                        <i class="material-icons botao">visibility_off</i>
                        <label for="senha" class="black-text"><span class="required">*</span>Senha:</label>
                    </div>
                </div>
                <div class="row">
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in" checked="checked" />
                            <span>Confirmo o registro</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input id="indeterminate-checkbox" type="checkbox" />
                            <span>Aceito os termos de serviços</span>
                        </label>
                    </p>
                    <button class="btn center waves-effect  indigo lighten-1" type="submit"><i class="material-icons small right">person_add</i> Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s9">
                    <h5 class="text-footer white-text"><img src="svg/web2.svg" /> Web Developer</h5>
                    <ul>
                        <p class="grey-text text-lighten-4">Dúvidas ou sujestões,quer da seu feedback entre contato com
                            a gente.</p>
                        <p class="grey-text text-lighten-4">(11) 4750-5032</p>
                        <li><a class="grey-text text-lighten-3" href="#!"><img src="svg/email.svg" /><span>E-mail</span>
                            </a></li>
                    </ul>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contatos</h5>
                    <ul>
                        <li><a class="yellow-text" href="https://br.freepik.com/" target="_blanck">Conheça o site
                                Freepik</a></li>
                        <p class="grey-text text-lighten-4">Siga-nos pelas redes sociais.</p>
                        <li><a class="grey-text text-lighten-3" href="#!"><img
                                    src="svg/facebook.svg" /><span>Facebook</span> </a></li>
                        <li><a class="grey-text text-lighten-3" href="#!"><img src="svg/twitter.svg" />
                                <span>Twiter</span> </a></li>
                        <li><a class="grey-text text-lighten-3" href="#!"><img src="svg/instagram.svg" />
                                <span>Instagram</span> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                ©2019 Web Developer
                <a class="grey-text text-lighten-4 right">Etec de itaquaquecetuba</a>
            </div>
        </div>
    </footer>
    <!--jaquery-->
    <script src="js/jquery.js"></script>
    <!--javaScript materialize -->
    <script src="js/materialize.min.js"></script>
    <!--JavaScript -->
    <script src="js/index.js"></script>
</body>

</html>