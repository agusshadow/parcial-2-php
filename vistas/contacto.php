<?php 

require_once __DIR__ . '/banner.php';

?>

<section class="container py-5" id="preguntas">

  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Son juegos originales?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        Si, los juegos son 100% originales y con licencia oficial, se descargan directamente en tu consola accediendo a la tienda oficial de Play Station y cuentan con garantía del fabricante.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Como y cuando envian los juegos?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        Una vez realizada la compra y acreditado el pago, te enviamos por mail un usuario y contraseña que te permitirán descargar el juego en tu consola.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Ofrecen garantia?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        Sí, ofrecemos garantía en todas tus compras. Si por algún error en tu consola, daño en el disco duro o problemas de compatibilidad de software el juego no descarga o funciona correctamente, te devolvemos tu dinero sin vueltas. Somos una empresa seria y cuidamos a cada cliente, sabemos que existen situaciones en las que, por circunstancias ajenas a su voluntad, la instalación no se puede concretar. En esos casos, devolvemos el dinero sin demoras.
        </div>
      </div>
    </div>
  </div>

</section>

<section class="container">

  <h2 class="py-2 mb-4 fw-bold azul-secundario-texto">Si tenes alguna duda contactate con nosotros!</h2>

  <form>
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre">
    </div>
    <div class="mb-3">
      <label for="mail" class="form-label">Mail</label>
      <input type="email" class="form-control" id="mail">
    </div>
    <div class="mb-3">
      <label for="mensaje" class="form-label">Mensaje</label>
      <textarea class="form-control" id="mensaje" rows="3"></textarea>
    </div>
    <div>
      <button type="submit" class="btn btn-primary mb-3 px-5">Enviar</button>
    </div>
  </form>

</section>