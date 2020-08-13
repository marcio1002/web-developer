<?php $this->layout("_theme", ["title" => "Home","lang" => $lang]); ?>

<div id="principal">
    <div class="row">
        <div class=" col l4 s6">
            <div class="caixa-text col s8">
                <p><?= $lang["p1"] ?? "''"; ?></p>
            </div>
        </div>
        <div class="caixa-img col  s6">
            <img class="img-desen responsive-img" src="./src/assets/img/desen.jpg" />
        </div>
    </div>
</div>
<div class="slide-carrosel">
    <div class="carousel carousel-slider">
        <a class="carousel-item" id="um" href="#one!"><img src="./src/assets/img/web-designer.jpg"></a>
        <a class="carousel-item" id="dois" href="#two!"><img src="./src/assets/img/lenguage.jpg"></a>
        <a class="carousel-item" id="tres" href="#three!"><img src="./src/assets/img/web-dev.jpg"></a>
    </div>
</div>