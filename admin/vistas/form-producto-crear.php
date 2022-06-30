<?php

$errores = $_SESSION['errores'] ?? [];
$data_form = $_SESSION['data_form'] ?? [];

unset($_SESSION['errores'], $_SESSION['data_form']);

?>

<section class="container pt-4">

    <h2>Crear un producto</h2>

    <p class="pb-3 pt-1">Completa el formulario para publicar un producto</p>

    <form action="acciones/producto-crear.php" method="post" enctype="multipart/form-data">
        <div class="mb-4">
            <label class="form-label" for="nombre">Nombre</label>
            <input
                    class="form-control"
                    type="text"
                    id="nombre"
                    name="nombre"
                    <?php if(isset($errores['nombre'])):?>aria-describedby="error-nombre" <?php endif;?>
                    value="<?= $data_form['nombre'] ?? null; ?>">
            <?php
            if (isset($errores['nombre'])):
                ?>
                <p class="error-form mt-1 text-danger" id="error-nombre"><span class="visually-hidden">Error: </span><?= $errores['nombre']?></p>
            <?php
            endif;
            ?>
        </div>

        <div class="mb-4">
            <label class="form-label" for="precio">Precio</label>
            <input
                    class="form-control"
                    type="number"
                    id="precio"
                    name="precio"
                    <?php if(isset($errores['precio'])):?>aria-describedby="error-precio"<?php endif;?>
                    value="<?= $data_form['precio'] ?? null; ?>">
            <?php
            if (isset($errores['precio'])):
                ?>
                <p class="error-form mt-1 text-danger" id="error-precio"><span class="visually-hidden">Error: </span><?= $errores['precio']?></p>
            <?php
            endif;
            ?>
        </div>

        <div class="mb-4">
            <label class="form-label" for="descripcion">Descripcion</label>
            <textarea
                    class="form-control"
                    type="text"
                    id="descripcion"
                    name="descripcion"
                    <?php if(isset($errores['descripcion'])):?>aria-describedby="error-descripcion"<?php endif;?>
                    ><?= $data_form['descripcion'] ?? null; ?></textarea>
            <?php
            if (isset($errores['descripcion'])):
                ?>
                <p class="error-form mt-1 text-danger" id="error-descripcion"><span class="visually-hidden">Error: </span><?= $errores['descripcion']?></p>
            <?php
            endif;
            ?>
        </div>

        <div class="mb-4">
            <label class="form-label" for="tipo">Tipo</label>
            <select
                    class="form-select"
                    id="tipo"
                    name="tipo"
                    <?php if(isset($errores['fk_tipo'])):?>aria-describedby="error-tipo"<?php endif;?>
                    value="<?= $data_form['fk_tipo'] ?? null; ?>">
                <option selected disabled value="0">Selecciona una opcion</option>
                <option value="1">Juego</option>
                <option value="2">Subscripcion</option>
            </select>
            <?php
            if (isset($errores['fk_tipo'])):
                ?>
                <p class="error-form mt-1 text-danger" id="error-tipo"><span class="visually-hidden">Error: </span><?= $errores['fk_tipo']?></p>
            <?php
            endif;
            ?>
        </div>

        <div class="mb-4">
            <label class="form-label" for="plataforma">Plataforma</label>
            <select
                    class="form-select"
                    id="plataforma"
                    name="plataforma"
                    <?php if(isset($errores['fk_plataforma'])):?>aria-describedby="error-plataforma"<?php endif;?>
                    value="<?= $data_form['fk_plataforma'] ?? null; ?>">
                <option selected disabled value="0">Selecciona una opcion</option>
                <option value="1">PS4</option>
                <option value="2">PS5</option>
            </select>
            <?php
            if (isset($errores['fk_plataforma'])):
                ?>
                <p class="error-form mt-1 text-danger" id="error-plataforma"><span class="visually-hidden">Error: </span><?= $errores['fk_plataforma']?></p>
            <?php
            endif;
            ?>
        </div>

        <div class="mb-4">
            <label class="form-label" for="url_video">URL video (opcional)</label>
            <input
                    class="form-control"
                    type="text"
                    id="url_video"
                    name="url_video"
                    value="<?= $data_form['url_video'] ?? null; ?>">
        </div>
        <div class="mb-4">
            <label class="form-label" for="imagen">Imagen</label>
            <input
                    class="form-control"
                    type="file"
                    id="imagen"
                    name="imagen"
                    value="<?= $data_form['img'] ?? null; ?>">
        </div>
        <div class="mb-4">
            <label class="form-label" for="descripcion_imagen">Descripcion imagen</label>
            <input
                    class="form-control"
                    type="text"
                    id="descripcion_imagen"
                    name="descripcion_imagen"
                    <?php if(isset($errores['img_descripcion'])):?>aria-describedby="error-descripcion-imagen"<?php endif;?>
                    value="<?= $data_form['descripcion_imagen'] ?? null; ?>">
            <?php
            if (isset($errores['img_descripcion'])):
                ?>
                <p class="error-form mt-1 text-danger" id="error-descripcion-imagen"><span class="visually-hidden">Error: </span><?= $errores['img_descripcion']?></p>
            <?php
            endif;
            ?>
        </div>

        <div class="mt-4">
            <input class="btn btn-primary" type="submit" value="Publicar">
        </div>
    </form>
</section>

