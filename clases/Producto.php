<?php

require_once __DIR__ . "/../bootstrap/autoload.php";

class Producto {
    protected $id_producto;
    protected $nombre;
    protected $precio;
    protected $imagen;
    protected $img_descripcion;
    protected $descripcion;
    protected $url_video;
    protected $fecha_publicacion;
    protected $fk_tipo;
    protected $fk_plataforma;

    public function traerProductos() {

        $db = (new DBConexion())->obtenerConexion();
        $query = "SELECT * FROM productos";

        $stmt = $db->prepare($query);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $data = $stmt->fetchAll();

        $productos = [];

        foreach ($data as $valor) {
            $producto = new Producto();
            $producto->setId($valor['id_producto']);
            $producto->setNombre($valor['nombre']);
            $producto->setPrecio($valor['precio']);
            $producto->setImagen($valor['img']);
            $producto->setImgDescripcion($valor['img_descripcion']);
            $producto->setDescripcion($valor['descripcion']);
            $producto->setUrl($valor['url_video']);
            $producto->setFechaPublicacion($valor['fecha_publicacion']);
            $producto->setFkTipo($valor['fk_tipo']);
            $producto->setFkPlataforma($valor['fk_plataforma']);

            array_push($productos, $producto);
        };
      return $productos;
    }

    public function traerPorId($id) {

        $db = (new DBConexion())->obtenerConexion();
        $query = "SELECT * FROM productos WHERE id_producto = ?";

        $stmt = $db->prepare($query);
        $stmt->execute([$id]);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $producto = $stmt->fetch();

        return $producto;
    }

    public function traerPorTipo($tipo) {

        $productos = (new Producto())->traerProductos();
        $array_productos = [];
        foreach ($productos as $producto) {
            if ($producto->fk_tipo === $tipo) {
                array_push($array_productos, $producto);
            }
        }
        return $array_productos;
    }

    public function crear($data) {
        $db = (new DBConexion())->obtenerConexion();
        $query = "INSERT INTO productos (id_producto, nombre, precio, img, img_descripcion, descripcion, url_video, fecha_publicacion, fk_tipo, fk_plataforma)
                  VALUES(:id_producto, :nombre, :precio, :img, :img_descripcion, :descripcion, :url_video, :fecha_publicacion, :fk_tipo, :fk_plataforma);";

        $stmt = $db->prepare($query);
        $stmt->execute([
            'id_producto' => $data['id_producto'],
            'nombre' => $data['nombre'],
            'precio' => $data['precio'],
            'img' => $data['img'],
            'img_descripcion' => $data['img_descripcion'],
            'descripcion' => $data['descripcion'],
            'url_video' => $data['url_video'],
            'fecha_publicacion' => $data['fecha_publicacion'],
            'fk_tipo' => $data['fk_tipo'],
            'fk_plataforma' => $data['fk_plataforma'],
        ]);

    }

    public function eliminar($id): void{
        $db = (new DBConexion())->obtenerConexion();
        $query = "DELETE FROM productos WHERE id_producto = ?";

        $stmt = $db->prepare($query);
        $stmt->execute([$id]);
    }

    public function saludar() {
        return "hola a todos";
    }


    # SETTERS

    public function setId($valor) {
        $this->id_producto = $valor;
    }

    public function setNombre($valor) {
        $this->nombre = $valor;
    }

    public function setPrecio($valor) {
        $this->precio = $valor;
    }

    public function setImagen($valor) {
        $this->imagen = $valor;
    }

    public function setImgDescripcion($valor) {
        $this->alt = $valor;
    }

    public function setDescripcion($valor) {
        $this->descripcion = $valor;
    }

    public function setUrl($valor) {
        $this->url_video = $valor;
    }

    public function setFechaPublicacion($valor)
    {
        $this->fecha_publicacion = $valor;
    }

    public function setFkTipo($valor)
    {
        $this->fk_tipo = $valor;
    }

    public function setFkPlataforma($valor)
    {
        $this->fk_plataforma = $valor;
    }

    # GETTERS

    public function getId() {
        return $this->id_producto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function getImgDescripcion() {
        return $this->img_descripcion;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getUrl() {
        return $this->url_video;
    }

    public function getFechaPublicacion()
    {
        return $this->fecha_publicacion;
    }

    public function getFkTipo()
    {
        return $this->fk_tipo;
    }

    public function getFkPlataforma()
    {
        return $this->fk_plataforma;
    }

};

?>