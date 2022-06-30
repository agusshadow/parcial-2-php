<?php 

require_once __DIR__ . '/banner.php';

?>

<section class="container" id="juegos">

    <h2 class="pt-4 pt-md-5 text-center fw-bold titulo text-uppercase azul-secundario-texto">Juegos</h2>

    <div class="row row-cols-4 gap-3 py-4 py-md-5 justify-content-center">

    <?php

    $productos = (new Producto())->traerPorTipo(1);

    foreach ($productos as $producto) {
    require __DIR__ . './producto.php';
    }
    ?>

    </div>
</section>

<section class="container" id="psplus">
    
    <h2 class="pt-4 pt-md-5 text-center text-primary fw-bold titulo text-uppercase">Subscripciones</h2>

    <div class="row row-cols-4 gap-3 py-4 py-md-5 justify-content-center">

    <?php

    $productos = (new Producto())->traerPorTipo(2);

    foreach ($productos as $producto) {
    require __DIR__ . './producto.php';
    }

    ?>

    </div>
</section>









