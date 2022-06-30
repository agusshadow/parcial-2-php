<?php 

require_once __DIR__ . '/../bootstrap/autoload.php';

$id = $_GET['id'];

try {
    $producto = (new Producto())->traerPorId($id);
    echo "<pre>";
    print_r($producto);
    echo "</pre>";
    echo "se instancia correctaente";
} catch (exception $e) {
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}

try {
    $producto->saludar();
} catch (Exception $e) {
    echo "<pre>";
    print_r($e);
    echo "</pre>";
}





?>

<section class="container py-4">

    <div class="row">
        <div class="col-12 col-md-6 p-4">
            <img src="imagenes/portadas-juegos/<?= $producto->getImagen() ?>" class="img-fluid sticky-top pt-3" alt="<?= $producto->getImgDescripcion() ?>">
        </div>
        <div class="col-12 col-md-6 p-3 p-md-4">
            <h2 class="mt-3 mt-md-5 fw-bold h1"><?= $producto->getNombre() ?></h2>
            <p class="text-secondary">Plataforma: <?= $producto->getFKPlataforma() ?></p>
            <p class="text-secondary">Publicado el: <?= $producto->getFechaPublicacion() ?></p>
            <p class="text-primary fs-5">$ <?= $producto->getPrecio() ?></p>
            <div class="d-flex">
                <a href="#" class="btn btn-primary me-2 px-3 py-2">Comprar ahora</a>
                <a href="#" class="btn btn-primary px-3 py-2">Agregar al carrito</a>
            </div>
            <div class="descripcion">
                <h3 class="mt-4 mt-md-5 h4">Descripcion</h3>
                <p class="text-secondary"><?= $producto->getDescripcion() ?></p>
            </div>
        </div>
    </div>

    <div class="ratio ratio-16x9 pb-5 mb-4">
        <iframe class="mt-5 pb-4"  src="<?= $producto->getUrl() ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

</section>