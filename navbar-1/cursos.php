<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Innser</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link href="styles.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <!-- Demo styles -->
    <style>
      html,
      body {
        position: relative;
        height: 100%;
      }

      body {
        background: #eee;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        z-index: 10;
        margin-top: 120px;
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .swiper {
        margin-left: auto;
        margin-right: auto;
      }
    </style>
  </head>

  <body>
    <div class="cargador">
      <div class="habilidades">
          <div class="barrita">
            <div class="progreso" style=" --w:100%"></div>
          </div>
      </div>
    </div>
    <nav class="navbar">
      <div class="navbar-overlay" onclick="toggleMenuOpen()">
      </div>

      <button type="button" class="navbar-burger" onclick="toggleMenuOpen()">
        <span class="material-icons">menu</span>
      </button>
      
      <a href="index.html"><img src="Imagenes/WEB_INNSER/01.INICIO/LOGO-RENOVADO-INNSER-.png_2.png" height="90px"></a>
      <nav class="navbar-menu">
        <button onclick="location.href='index.html'" type="button" class="active">Inicio</button>
        <button onclick="location.href='cursos.html'" type="button" class="active">Cursos</button>
        <button onclick="location.href='empresa.html'" type="button" class="active">Empresa</button>
        <button onclick="location.href='nosotros.html'" type="button" class="active">Nosotros</button>
      </nav>
    </nav>

    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="card-cursos">
            <div class="img-card-cursos1">
            </div>
            <div class="content-cursos">
              <div class="title-cursos">
                <h3>Marinera norteña</h3>
                <span>Inicio 20 de Enero</span>
              </div>
              <div class="text-cursos">
                <ul>
                  <li>Nivel:</li>
                  <p>Basico</p>
                  <p>Intermedio</p>
                  <li>Horario</li>
                  <p>Niños: Lunes y Jueves de 4:00pm a 6:00pm</p>
                  <p>Adultos: Lunes y Jueves de 6:00pm a 8:00pm</p>
                  <li>Ubicacion:</li>
                  <p>Local Karpa(Jr. Los Cedros N° 219 Urb. Reparticion) Comas</p>

                </ul>
              </div>
              <div class="btn-container-cursos">
                <button>Adquirir</button>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="card-cursos">
            <div class="img-card-cursos2">
            </div>
            <div class="content-cursos">
              <div class="title-cursos">
                <h3>Empresario innovador junior</h3>
                <span>Inicio 20 de Enero</span>
              </div>
              <div class="text-cursos">
                <ul>
                  <li>Programa de actividades:</li>
                  <p>Problema</p>
                  <p>Solución</p>
                  <p>Clientes</p>
                  <p>Prototipado</p>
                  <p>Elevator pitch</p>
                  <p>Validacion de producto</p>
                  <p>Feria de emprendimiento</p>
                  <li>Beneficios</li>
                  <p>Habilidades de comunicacion</p>
                  <p>Trabajo en equipo</p>
                  <p>Liderazgo y autoestima</p>
                  <li>Horario</li>
                  <p>Lunes y Jueves de 10:00am a 12:00pm</p>
                  <li>Ubicacion:</li>
                  <p>Local Karpa(Jr. Los Cedros N° 219 Urb. Reparticion) Comas</p>

                </ul>
              </div>
              <div class="btn-container-cursos">
                <button>Adquirir</button>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./main.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>
</html>