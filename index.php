<?php 

require_once __DIR__ . '/bootstrap/autoload.php';

$rutas_permitidas = [
  'inicio' => [
    'title' => 'PS Games | Inicio',
    'portada' => 'banner-inicio.png',
    'alt_portada' => 'imagen del juego god of war',
  ],
  'listado' => [
    'title' => 'PS Games | Productos',
    'portada' => 'banner-fortnite.png',
    'alt_portada' => 'imagen del juego fortnite',
  ],
  'contacto' => [
    'title' => 'PS Games | Contacto',
    'portada' => 'banner-days-gone.png',
    'alt_portada' => 'imagen del juego days gone',
  ],
  'detalle-producto' => [
    'title' => 'PS Games | Detalle Producto',
  ],
  '404' => [
    'title' => 'Pagina no encontrada'
  ],
];

$vista = isset($_GET['s']) ? $_GET['s'] : 'inicio';

if (!isset($rutas_permitidas[$vista])) {
  $vista = '404';
}

$vista_seleccionada = $rutas_permitidas[$vista];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo-chico.ico">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?= $vista_seleccionada['title'] ?></title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
              <a class="navbar-brand logo" href="index.php?s=inicio"><h1 class="m-0">logo</h1></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?s=listado">Productos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.php?s=contacto">Preguntas frecuentes</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn" type="submit">Buscar</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
    
    <main class="pt-5 mt-4">

        <?php 

        if (file_exists('vistas/' . $vista . '.php')) {
          require_once __DIR__ . '/vistas/' . $vista . '.php';
        } else {
          require_once __DIR__ . '/vistas/404.php';
        }
        
        ?>

    </main>

    <div class="container-fluid">
      <footer class="py-4 mt-5 row">
        <div class="col-12 col-md-3 d-flex justify-content-center align-items-center py-3">
        <a class="logo-footer" href="index.php?s=inicio">logo</a>
        </div>
        <div class="col-12 col-md-3 py-2">
          <h4 class="titulos-footer">Categorias</h4>
          <ul>
            <li><a href="index.php?s=listado#juegos">Juegos</a></li>
            <li><a href="index.php?s=listado#psplus">Playstation Plus</a></li>
            <li><a href="#">Consolas</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-3 py-2">
          <h4 class="titulos-footer">Datos</h4>
          <ul>
            <li><a href="#">Política de privacidad</a></li>
            <li><a href="index.php?s=contacto#preguntas">Preguntas frecuentes</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-3 py-2">
          <h4 class="titulos-footer">Newsletter</h4>
          <form action="">
            <label>
              <input type="email" name="" id="" placeholder="E-mail">
              <input type="submit" value="Enviar">
            </label>
          </form>
        </div>
        </div>
        <div class="py-3 py-2 copy">
          <small class="text-center d-block">Copyright© 2022</small>
        </div>
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>