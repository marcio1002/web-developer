<?php
    require_once "tradutor.php";
    $_SESSION['idioma'];
    function footer($sujestoes,$contatos,$freepik,$redeSociais) {
        echo " <footer class='page-footer'>
        <div class='container'>
            <div class='row'>
                <div class='col l6 s9'>
                    <h5 class='text-footer white-text'><img src='svg/web2.svg' /> Web Developer</h5>
                    <ul>
                        <p class='grey-text text-lighten-4'>$sujestoes</p>
                        <p class='grey-text text-lighten-4'>(11) 4750-5032</p>
                        <li><a class='grey-text text-lighten-3' href='#!'><img src='svg/email.svg' /><span>E-mail</span>
                            </a></li>
                    </ul>
                </div>
                <div class='col l4 offset-l2 s12'>
                    <h5 class='white-text'>$contatos</h5>
                    <ul>
                        <li><a class='yellow-text' href='https://br.freepik.com/' target='_blanck'>$freepik</a></li>
                        <p class='grey-text text-lighten-4'>$redeSociais</p>
                        <li><a class='grey-text text-lighten-3' href='#!'><img
                                    src='svg/facebook.svg' /><span>Facebook</span> </a></li>
                        <li><a class='grey-text text-lighten-3' href='#!'><img src='svg/twitter.svg' />
                                <span>Twiter</span> </a></li>
                        <li><a class='grey-text text-lighten-3' href='#!'><img src='svg/instagram.svg' />
                                <span>Instagram</span> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class='footer-copyright'>
            <div class='container'>
                ©2019 Web Developer
                <a class='grey-text text-lighten-4 right' href='#!'>Etec de itaquaquecetuba</a>
            </div>
        </div>
    </footer>";
    }
?>