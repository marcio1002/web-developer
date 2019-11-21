<?php
    

    function menu($menu, $menuSM,$btnBr,$iconIdioma, $btnEn) {
        echo "<div class='navbar-fixed'>
        <nav class='home'>
            <div>
                <a href='index.php' class='espaco brand-logo red-text'><img src='svg/web2.svg' /> Web Developer</a>
                <ul class='right  ul' id='menu-mobile'>
                    <li class='liElement'><a href='index.php'>Home</a></li>
                    <li class='liElement'><a href='cursos.php'>$menu</a></li>
                    <li class='liElement'><a href='saibaMais.php'>$menuSM</a></li>
                    <li class='butao-login'><a href='login.php'>Login<i
                                class='small material-icons left' >portrait</i></a></li>
                    <li id='btnIdioma'>
                        <a class='viewIdioma'><img class='iconIdioma' src='$iconIdioma'/><img 
                                src='svg/sort-down.svg' /></a>
                        <ul class='hiddenIdioma ulIdioma' id='dropdown'>
                            <form action='tradutor.php' method='GET'>
                                <li><a href='?idioma=en-us' class='english'><img src='svg/gra-bretanha.svg' />$btnEn</a></li>
                                <li><a href='?idioma=pt-br' class='brazil'><img src='svg/brazil.svg'/>$btnBr</a></li>
                            </form>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>";
    }
?>