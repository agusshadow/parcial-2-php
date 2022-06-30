<?php

require_once __DIR__ . '/../../bootstrap/autoload.php';

$productos = (new Producto())->traerProductos();

?>


<section class="container pt-4">

    <div class="row">
        <div class="col-12 col-md-6">
            <h1>Administrar productos</h1>
        </div>
        <div class="col-12 col-md-6">
            <a href="index.php?s=form-producto-crear" class="btn btn-primary mt-1">Crear un nuevo producto</a>
        </div>
    </div>

    <div class="row row-cols-4 gap-3 py-4 py-md-5 justify-content-center">

    <?php
    foreach ($productos as $producto) {
        require __DIR__ . '/producto-admin.php';
    }
    ?>

    </div>

</section>

