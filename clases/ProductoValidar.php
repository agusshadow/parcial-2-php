<?php

class ProductoValidar
{
  protected $data = [];
  protected  $errores = [];

  public function __construct($data){
      $this->data = $data;
      $this->validar($data);
  }

  public function hayErrores() {
      return !empty($this->errores);
  }

  public function validar(array $data) {
        if(empty($data['nombre'])) {
            $this->errores['nombre'] = 'Debes ingresar un nombre para el producto';
        }

        if(empty($data['precio'])) {
            $this->errores['precio'] = 'Debes ingresar un precio para el producto';
        }

        if(empty($data['descripcion'])) {
            $this->errores['descripcion'] = 'Debes ingresar una descripcion para el producto';
        } elseif (strlen($data['descripcion']) < 15) {
            $this->errores['descripcion'] = 'Debes ingresar una descripcion de al menos 15 caracteres';
        }

        if(empty($data['img_descripcion'])) {
            $this->errores['img_descripcion'] = 'Debes ingresar una descripcion para la imagen';
        }

          if($data['fk_tipo'] == null) {
              $this->errores['fk_tipo'] = 'Debes aclarar el tipo de producto';
          }

      if($data['fk_plataforma'] == null) {
          $this->errores['fk_plataforma'] = 'Debes seleccionar la plataforma del producto';
      }

    }

    public function getErrores()
    {
        return $this->errores;
    }

}
?>