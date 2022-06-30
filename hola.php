<?php

require_once __DIR__ . '/clases/Producto.php';

$producto = (new Producto())->traerPorId(2);
echo "<pre>";
print_r($producto);
echo "</pre>";

echo $producto->saludar();

?>
