<?php $this->layout("_theme", ["title" => "Mais Informações","lang" => $lang]); ?>

<div class="saibaMais">
    <div class="row">
        <div class="col s6 m4 left-align">
            <img class="materialboxed responsive-img" src="https://image.freepik.com/vetores-gratis/conceito-de-desenvolvimento-de-aplicativos-com-design-plano_23-2147850291.jpg" alt="desenvolvimento de software">
        </div>
        <h1 class="center-align"><?= $lang["sbMaisH1"] ?? "''"; ?></h1>
        <p><?= $lang["sbMaisDescricao"]; ?></p>
    </div>
</div>