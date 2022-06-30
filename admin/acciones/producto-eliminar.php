<?php

require_once __DIR__ . '/../../bootstrap/autoload.php';

$id = $_POST['id'];

$producto = (new Producto())->traerPorId($id);

if (!$producto) {
    $_SESSION['mensaje_error'] = "No existe el producto que se esta tratando eliminar";
    header('location: ../index.php?s=panel-productos-admin');
    exit();
}

try {
    (new Producto)->eliminar($id);
/*
    if(!empty($producto->getImagen()) && file_exists(__DIR__ . '/../../imagenes/portadas-juegos/' . $producto->getImagen())) {
        chmod(__DIR__ . '/../../imagenes/portadas-juegos/' . $producto->getImagen(), 0775);
        unlink(__DIR__ . '/../../imagenes/portadas-juegos/' . $producto->getImagen());
    }
*/
    $_SESSION['mensaje_exito'] = "El producto fue eliminado exitosamente";
    header('location: ../index.php?s=panel-productos-admin');
    exit();
} catch (exception $e) {
    print_r($e);
    $_SESSION['mensaje_error'] = "No existe el producto que se esta tratando eliminar";
    header('location: ../index.php?s=panel-productos-admin');
    exit();
}

?>
