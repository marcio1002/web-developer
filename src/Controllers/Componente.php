<?php

namespace WebDeveloper\Controllers;

class Componente {

  public static function menu(array $lang) : string
  {
    $urlIndex = renderUrl();
    $urlCursos = renderUrl("/cursos");
    $urlSaibaMais = renderUrl("/saiba-mais");
    $urlLogin = renderUrl("/login");
return <<<menu
    <div class='navbar-fixed'>
        <nav class='home'>
            <div>
                <a href='{$urlIndex}' class='espaco brand-logo red-text'><img src='./src/assets/svg/web2.svg' /> Web Developer</a>
                <ul class='right  hide-on-med-and-down ul' id='menu-mobile'>
                    <li class='liElement'><a href='{$urlIndex}'>Home</a></li>
                    <li class='liElement'><a href='{$urlCursos}'>{$lang["menu"]}</a></li>
                    <li class='liElement'><a href='{$urlSaibaMais}'>{$lang["menuSM"]}</a></li>
                    <li class='butao-login'><a href='{$urlLogin}'>Login<i class='small material-icons left' >portrait</i></a></li>
                    <li id='btnIdioma'>
                        <a class='viewIdioma'><img class='right' src='./src/assets/svg/sort-down.svg' />{$lang["menuIdioma"]}</a>
                        <ul class='ulIdioma hiddenIdioma' id='dropdown'>
                            <form id="formLanguage" method='GET'>
                                <li><a id="btnLanguageEnUS"  href='?language=en-US' class='english'><img src='./src/assets/svg/gra-bretanha.svg' style="width: 10%;"/> {$lang["btnEnUS"]}</a></li>
                                <li><a id="btnLanguagePtRB" href='?language=pt-BR' class='brazil'><img src='./src/assets/svg/brazil.svg' style="width: 10%;"/> {$lang["btnPtBR"]}</a></li>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
menu;
  }

  public static function footer($lang): string
  {
return <<<footer
  <footer class='page-footer'>
  <div class='container'>
      <div class='row'>
          <div class='col l6 s9'>
              <h5 class='text-footer white-text'><img src='./src/assets/svg/web2.svg' /> Web Developer</h5>
              <ul>
                  <p class='grey-text text-lighten-4'>{$lang["footerMSG"]}</p>
                  <p class='grey-text text-lighten-4'>(11) 4750-5032</p>
                  <li><a class='grey-text text-lighten-3' href='#!'><img src='./src/assets/svg/email.svg' /><span>E-mail</span></a></li>
              </ul>
          </div>
          <div class='col l4 offset-l2 s12'>
              <h5 class='white-text'>{$lang["footerContact"]}</h5>
              <ul>
                  <li><a class='yellow-text' href='https://br.freepik.com/' target='_blanck'>{$lang["footerFreepik"]}</a></li>
                  <p class='grey-text text-lighten-4'>{$lang["footerMsgNetworks"]}</p>
                  <li><a class='grey-text text-lighten-3' href='#!'><img src='./src/assets/svg/facebook.svg' /><span>Facebook</span> </a></li>
                  <li><a class='grey-text text-lighten-3' href='#!'><img src='./src/assets/svg/twitter.svg' /><span>Twiter</span> </a></li>
                  <li><a class='grey-text text-lighten-3' href='#!'><img src='./src/assets/svg/instagram.svg' /><span>Instagram</span> </a></li>
              </ul>
          </div>
      </div>
  </div>
  <div class='footer-copyright'>
      <div class='container'>
          ©2019 Web Developer
          <a class='grey-text text-lighten-4 right' href='#!'>Marcio Alemão</a>
      </div>
  </div>
  </footer>
footer;
  }
}