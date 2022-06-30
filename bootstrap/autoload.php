<?php 

session_start();

spl_autoload_register(function($classname) {
   $filename = __DIR__ . '/../clases/' . $classname . '.php';

    if(file_exists($filename)) {
        require_once $filename;
    }

})

?>