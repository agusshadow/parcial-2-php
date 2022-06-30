<?php

class DBConexion
{
    public const HOST = "127.0.0.1";
    public const USUARIO = "root";
    public const CONTRASENA = "";
    public const NOMBREDB = "ps_digital";

    protected $db;

    public function __construct(){
        $dns = "mysql:host=" . self::HOST . ";dbname=" . self::NOMBREDB . ";charset=utf8mb4";
        $this->db = new PDO($dns, username:self::USUARIO, password:self::CONTRASENA);
    }

    public function obtenerConexion() {
        return $this->db;
    }


}
