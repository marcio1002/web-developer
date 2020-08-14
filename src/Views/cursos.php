<?php $this->layout("_theme", ["title" => "Cursos", "lang" => $lang]); ?>

<div class="cards">
    <ul>
        <li>
            <div class="card z-depth-3">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="./src/assets/img/html-css.png">
                    <span class="card-title activator grey-text black-text ">
                        <?= $lang["cursosHC"];?></span>
                </div>
                <div class="card-content">
                    <a href=<?= renderUrl("/cadastro");?> class="btn btn-large waves-effect waves-light "><i class="material-icons small">card_giftcard</i> <?= $lang["labelGratis"]; ?></a>
                </div>
            </div>
            <!-- card 2 -->
            <div class="card z-depth-3">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="./src/assets/img/js.jpg">
                    <span class="card-title activator white-text "><?= $lang["cursosJS"] ?? "''"; ?></span>
                </div>
                <div class="card-content">
                    <a href=<?= renderUrl("/cadastro");?> class="btn btn-large waves-effect waves-light"><i class="material-icons small">card_giftcard</i> <?= $lang["labelGratis"]; ?></a>
                </div>
            </div>
            <!-- card 3 -->
            <div class="card z-depth-3">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="./src/assets/img/php.png">
                    <span class="card-title activator white-text">
                        <?= $lang["cursosPHP"];?></span>
                </div>
                <div class="card-content">
                    <a href=<?= renderUrl("/cadastro");?> class="btn btn-large waves-effect waves-light"><i class="material-icons small">card_giftcard</i> <?= $lang["labelGratis"]; ?></a>
                </div>
            </div>
        </li>
        <!-- card 4 -->
        <li>
            <div class="card z-depth-3">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="./src/assets/img/developer.png">
                    <span class="card-title activator grey-text text-darken-4">
                        <?= $lang["cursosCPC"];?></span>
                </div>
                <div class="card-content">
                    <span class="card-title  red-text">$45,00 </span>
                    <a href=<?= renderUrl("/cadastro");?> class="btn btn-large waves-effect waves-light"><i class="material-icons small">shopping_cart</i>
                        <?= $lang["labelPago"]; ?></a>
                </div>
            </div>
            <!-- card 5 -->
            <div class="card z-depth-3">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="./src/assets/img/framework.png">
                    <span class="card-title activator grey-text text-darken-4"><?= $lang["cursosFrame"]; ?></span>
                </div>
                <div class="card-content">
                    <span class="card-title  red-text">$25,00 </span>
                    <a href=<?= renderUrl("/cadastro");?> class="btn btn-large waves-effect waves-light"><i class="material-icons small">shopping_cart</i>
                        <?= $lang["labelPago"]; ?>
                    </a>
                </div>
            </div>
            <!-- card 6 -->
            <div class="card z-depth-3">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="./src/assets/img/cell.jpg">
                    <span class="card-title activator white-text"><?= $lang["cursosMobile"]; ?></span>
                </div>
                <div class="card-content">
                    <span class="card-title  red-text">$25,00 </span>
                    <a href=<?= renderUrl("/cadastro");?> class="btn btn-large waves-effect waves-light"><i class="material-icons small">shopping_cart</i>
                        <?= $lang["labelPago"]; ?>
                    </a>
                </div>
            </div>
        </li>
    </ul>
</div>