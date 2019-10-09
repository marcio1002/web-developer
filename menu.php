<?php
    function menu() {
        echo "<div class='navbar-fixed'>
        <nav class='home'>
            <div>
                <a href='index.php' class='espaco brand-logo red-text'><img src='svg/web2.svg' /> Web Developer</a>
                <ul class='right  hide-on-med-and-down ul' id='menu-mobile'>
                    <li class='liElement'><a href='index.php'>Home</a></li>
                    <li class='liElement'><a href='cursos.php'>Cursos</a></li>
                    <li class='liElement'><a href='https://www.intelectua.com.br/blog/o-que-e-desenvolvimento-web' target='_blanck'>Saiba
                            mais</a></li>
                    <li class='butao-login'><a href='login.php'>Login<i
                                class='small material-icons left' >portrait</i></a></li>
                    <li id='btnIdioma'>
                        <a class='viewIdioma'><img class='right'
                                src='svg/sort-down.svg' />Idioma</a>
                        <ul class='hiddenIdioma ulIdioma' id='dropdown'>
                            <li><a href='#' class='english'><img src='svg/gra-bretanha.svg' />Inglês</a></li>
                            <li><a href='#' class='brazil'><img src='svg/brazil.svg'/>Português</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>";
    }
?>