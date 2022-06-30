<div class="card p-0" style="width: 18rem;">
    <img src="../imagenes/portadas-juegos/<?= $producto->getImagen(); ?>" class="card-img-top" alt="">
    <div class="card-body">
        <h3 class="card-title fw-bold h3"><?= $producto->getNombre(); ?></h3>
        <p class="card-text">Tipo: <span class="text-secondary"><?= $producto->getFKTipo(); ?></span></p>
        <p class="card-text">Plataforma: <span class="text-secondary"><?= $producto->getFKPlataforma(); ?></span></p>
        <p class="card-text">Descripcion: <span class="text-secondary "><?= $producto->getDescripcion(); ?></span></p>
        <p class=" border-top-2">Publicado: <span class="text-secondary"><?= $producto->getFechaPublicacion(); ?></span></p>
        <p>Estado: <span class="text-secondary">(aca poner el estado)</span></p>
        <p class="fs-5 azul-secundario-texto">$ <?= $producto->getPrecio(); ?></p>
        <a href="" class="btn btn-primary">Editar</a>
        <form action="acciones/producto-eliminar.php" method="post">
            <input type="hidden" name="id" value="<?= $producto->getId(); ?>">
            <button href="acciones/producto-eliminar" class="btn btn-danger mt-2">Eliminar</button>
        </form>

    </div>
</div>