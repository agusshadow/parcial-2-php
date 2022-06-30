<div class="card p-0" style="width: 18rem;">
    <img src="imagenes/portadas-juegos/<?= $producto->getImagen(); ?>" class="card-img-top" alt="">
    <div class="card-body">
        <h3 class="card-title fw-bold h3"><?= $producto->getNombre(); ?></h3>
        <p class="card-text text-secondary">Plataforma: <?= $producto->getFKPlataforma(); ?></p>
        <p class="fs-5 azul-secundario-texto">$ <?= $producto->getPrecio(); ?></p>
        <a href="index.php?s=detalle-producto&id=<?= $producto->getId(); ?>" class="btn btn-primary">Ver Producto</a>
    </div>
</div>