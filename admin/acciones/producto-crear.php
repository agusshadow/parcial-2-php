<?php

require_once __DIR__ . '/../../bootstrap/autoload.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$fk_tipo = $_POST['tipo'];
$fk_plataforma = $_POST['plataforma'];
$url_video = $_POST['url_video'];
$imagen = $_FILES['imagen'];
$img_descripcion = $_POST['descripcion_imagen'];


$validador = new ProductoValidar([
    'nombre' => $nombre,
    'precio' => $precio,
    'img_descripcion' =>$img_descripcion,
    'descripcion' => $descripcion,
    'fk_tipo' => $fk_tipo,
    'fk_plataforma' => $fk_plataforma,
]);

if($validador->hayErrores()) {
    $_SESSION['errores'] = $validador->getErrores();
    $_SESSION['data_form'] = $_POST;
    header('location: ../index.php?s=form-producto-crear');
    exit();
}

# le concateno la fecha al nombr de la imagen
$nombre_imagen = date('YmdHis_') . $imagen['name'];
# muevo el archivo de la carpeta donde esta por defecto hasta donde la quiero guardar
move_uploaded_file($imagen['tmp_name'], __DIR__ . '/../../imagenes/portadas-juegos/' . $nombre_imagen);


try {
    (new Producto)->crear([
        'id_producto' => null,
        'nombre' => $nombre,
        'precio' => $precio,
        'img' => $nombre_imagen ?? '',
        'img_descripcion' =>$img_descripcion,
        'descripcion' => $descripcion,
        'url_video' => $url_video,
        'fecha_publicacion' =>date('y-m-d H:i;s'),
        'fk_tipo' => $fk_tipo,
        'fk_plataforma' => $fk_plataforma,
    ]);
    $_SESSION['mensaje_exito'] = "El producto " . $nombre . " fue publicado con exito";
    header("location: ../index.php?s=panel-productos-admin");
    exit();
} catch (Exception $e) {
    $_SESSION['mensaje_error'] = "Ocurrio un error al publicar el producto";
    $_SESSION['data_form'] = $_POST;
    header("location: ../index.php?s=form-producto-crear");
}



?>
