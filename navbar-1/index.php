<!DOCTYPE html>
<html lang="en">
  <head>
  
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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
        <span class="material-icons button_naranja">menu</span>
      </button>
  
      <a href="index.php"><img class="logo_portada" src="Imagenes/WEB_INNSER/01.INICIO/LOGO-RENOVADO-INNSER-.png_2.png" height="90px"></a>
      <nav class="navbar-menu">
        <button onclick="location.href='index.php'" type="button" class="active">Inicio</button>
        <button onclick="location.href='index.php#cursos'" type="button" class="active">Cursos</button>
        <button onclick="location.href='empresa.php'" type="button" class="active">Empresa</button>
        <button onclick="location.href='servicios.php'" type="button" class="active">Servicios</button>
        <button onclick="location.href='responsablidad_social.php'" type="button" class="active">Responsabilidad Social</button>
        <button onclick="location.href='nosotros.php'" type="button" class="active">Nosotros</button>
      </nav>
    </nav>

    <div class="container_grid_total">
        <div><section id="banner" class="sec"></section></div>
    </div>
    
  
     
     
     
     
     <!--


      <div class="col">

          <div class="card">
            <div class="imgBx">
              <a href="#"><img src="curso1_marinera.png" onclick="curso1();"></a>
            </div>
            <div class="content">
              <div class="contentBx">
                <h5>Curso de Marinera Norteña<br>
                   <p>Para adultos y niños</p></h5>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="imgBx">
              <a href="#"><img src="curso2_empresario.jpg" onclick="curso2();"></a>
            </div>
            <div class="content">
              <div class="contentBx">
                <h5>Empresario innovador junior<br>
                   <p>Dirigido a jovenes de 12 años a más</p></h5>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="imgBx">
              <a href="#"><img src="curso1_marinera.png" onclick="curso3();"></a>
            </div>
            <div class="content">
              <div class="contentBx">
                <h5>Curso de Marinera Norteña<br>
                   <p>Para adultos y niños</p></h5>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="imgBx">
              <a href="#"><img src="curso2_empresario.jpg" onclick="curso2();"></a>
            </div>
            <div class="content">
              <div class="contentBx">
                <h5>Empresario innovador junior<br>
                   <p>Dirigido a jovenes de 12 años a más</p></h5>
              </div>
            </div>
          </div>
      </div>
      -->


      <!--
      <ul class="sci">
        <li><a href=""><img src="../Imagenes/WEB INNSER/facebook.png" ></a></li>
        <li><a href=""><img src="../Imagenes/WEB INNSER/instagram.png" ></a></li>
        <li><a href=""><img src="../Imagenes/WEB INNSER/linkedin.png" ></a></li>
      </ul>
      -->
      <ul class="social">
        <li class="sc-item">
          <a href="https://www.facebook.com/InnserAcademy" target="_blank"   class="sc-link">
            <img src="Imagenes/WEB_INNSER/01.INICIO/fb.png" >
            <span class="name">Facebook</span>
          </a>
        </li>

        <li class="sc-item">
          <a href="https://www.youtube.com/@rosaalcantara973" target="_blank" class="sc-link">
            <img src="Imagenes/WEB_INNSER/01.INICIO/yt.png" >
            <span class="name">Youtube</span>
          </a>
        </li>

        <li class="sc-item">
          <a href="https://www.linkedin.com/company/innserpe/" target="_blank" class="sc-link">
            <img src="Imagenes/WEB_INNSER/01.INICIO/in.png" >
            <span class="name">Linkedin</span>
          </a>
        </li>
      </ul>

      <button class="btn-abrir-popup" id="btn-abrir-popup">Contáctanos</button>

    <div class="cursos-contenedor-general" id="cursos">
      <div class="tittle-cursos">
        <p>Cursos disponibles</p>
      </div>

      <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="cursos-tarjetas" data-aos="flip-left"  >
          <div class="cursos-tarjetas-img1">
          </div>
          <div class="titulo-cursos-tarjeta1">
            <h1>Empresario innovador Junior</h1>
          </div>
        </div>
        <div class="cursos-tarjetas" data-aos="flip-right">
          <div class="cursos-tarjetas-img2">
          </div>
          <div class="titulo-cursos-tarjeta2">
            <h1>Empresario innovador Master</h1>
          </div>
        </div>
        <div class="cursos-tarjetas" data-aos="flip-left">
          <div class="cursos-tarjetas-img2">
          </div>
          <div class="titulo-cursos-tarjeta3">
            <h1>Empresario innovador Master</h1>
          </div>
        </div>

    </div>

    <div class="go-top-container">
      <div class="go-top-button">
        <i class="fa-solid fa-arrow-up"></i>
    </div>
    </div>

    <div class="overlay" id="overlay">
      <div class="popup" id="popup">
        <a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
        <h3>Formulario de contacto</h3>
        <h4>Innova y potencia a tu equipo</h4>
        <form method="post"  class="formulario" id="formulario" name="formulario">
		
          <!-- Grupo: Nombre -->
          <div class="formulario__grupo" id="grupo__nombre">
            <label for="nombre" class="formulario__label">Nombre</label>
            <div class="formulario__grupo-input">
              <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre solo puede contener letras, espacios y pueden llevar acento</p>
          </div>
    
          <!-- Grupo: Usuario -->
          <div class="formulario__grupo" id="grupo__usuario">
            <label for="usuario" class="formulario__label">Nombre de la empresa</label>
            <div class="formulario__grupo-input">
              <input type="text" class="formulario__input" name="usuario" id="usuario" placeholder="">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Debe rellenar el campo y solo puede contener numeros, letras y guion bajo.</p>
          </div>
    
          <!-- Grupo: Cargo -->
          <div class="formulario__grupo" id="grupo__cargo">
            <label for="cargo" class="formulario__label">Cargo actual</label>
            <div class="formulario__grupo-input">
              <input type="text" class="formulario__input" name="cargo" id="cargo" placeholder="">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Debe rellenar el campo y solo puede contener numeros, letras y guion bajo.</p>
          </div>
    
          <!-- Grupo: Numero de empleados -->
          <div class="formulario__grupo" id="grupo__empleados">
            <label for="empleados" class="formulario__label">Numero de empleados</label>
            <div class="formulario__grupo-input">
              <input type="text" class="formulario__input" name="empleados" id="empleados" placeholder="">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Debe rellenar el campo y solo puede contener numeros.</p>
          </div>
    
          <!-- 
            
          <div class="formulario__grupo" id="grupo__password">
            <label for="password" class="formulario__label">Contraseña</label>
            <div class="formulario__grupo-input">
              <input type="password" class="formulario__input" name="password" id="password">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
          </div>
    
        
          <div class="formulario__grupo" id="grupo__password2">
            <label for="password2" class="formulario__label">Repetir Contraseña</label>
            <div class="formulario__grupo-input">
              <input type="password" class="formulario__input" name="password2" id="password2">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
          </div>
    
          -->	
    
          <!-- Grupo: Correo Electronico -->
          <div class="formulario__grupo" id="grupo__correo">
            <label for="correo" class="formulario__label">Correo Electrónico</label>
            <div class="formulario__grupo-input">
              <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
          </div>
    
          <!-- Grupo: Teléfono -->
          <div class="formulario__grupo" id="grupo__telefono">
            <label for="telefono" class="formulario__label">Teléfono</label>
            <div class="formulario__grupo-input">
              <input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="">
              <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
          </div>
    
    
          <!-- Grupo: Terminos y Condiciones -->
          <div class="formulario__grupo" id="grupo__terminos">
            <label class="formulario__label">
              <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos">
              Acepto los Terminos y Condiciones
            </label>
          </div>
    
          <div class="formulario__mensaje" id="formulario__mensaje">
            <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
          </div>
    
          <div class="formulario__grupo formulario__grupo-btn-enviar">
            <button type="submit" name="register" id="register" class="formulario__btn">Enviar</button>
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
          </div>
        </form>
      </div>
    </div>

    <?php include("registrar.php")  ?>


<!--

    <div class="panel">
        <div class="informacion">
        <h1>Entrenate y certifica tus habilidades de innovación</h1>
          <p>Innser Bootcamp es un entrenamiento poderoso para universitarios y corporativos.Reserva tu vacante ahora</p>
        </div>
        <button class="boton1">Registrate Ahora</button>
        <button class="boton2">Conoce más</button>
    </div>



    <div class="metodo_probado">
      
      <div class="metodo_probado_contenedor">
        <h1>Metodo probado</h1>
        <h2>4 Principios para potenciar tus habilidades de innovación</h2>
      </div>
      <div class="carrito-cuadrilla">
        <div class="carrito1">
          <br><br>
          <div class="item"><img src="../Imagenes/WEB INNSER/01. INICIO/METODO PROBADO/Recurso 24.png"></div>
          <div class="item"><span>Aula Invertida</span></div>
          <div class="item"><p>Revisa microvideos antes de aplicar las herramientas en tus proyectos</p></div>
        </div>
        <div class="carrito2">
          <br><br>
          <div class="item"><img src="../Imagenes/WEB INNSER/01. INICIO/METODO PROBADO/Recurso 25.png" ></div>
          <br>
          <div class="item"><span>Pedagogia basada en proyectos</span></div>
          <div class="item"><p>Gana conocimiento profundo realizando en equipo un proyecto real</p></div>
        </div>
        <div class="carrito3">
          <br><br>
          <div class="item"><img src="../Imagenes/WEB INNSER/01. INICIO/METODO PROBADO/Recurso 26.png" alt=""></div>
          <div class="item"><span>Aprendizaje entre pares</span></div>
          <div class="item"><p>Forma Parte de una comunidad donde aprendes y enseñas a la vez</p></div>
        </div>
        <div class="carrito4">
          <br><br>
          <div class="item"><img src="../Imagenes/WEB INNSER/01. INICIO/METODO PROBADO/Recurso 27.png" alt=""></div>
          <div class="item"><span>Gamificacion</span></div>
          <div class="item"><p>Reta tus habilidades para conseguir mentorias que mejoren tu proyecto</p></div>
        </div>
      </div> 
    </div>  


    <div class="como_funciona">
      <div class="como_funciona_contenedor">
        <h1>CÓMO FUNCIONA</h1>
        <h2>4 Pasos para impulsar tu carrera en la innovación</h2>
      </div>

    <div class="carrito-cuadricula2">
      <div class="carrito5">
        <div class="item"><img src="../Imagenes/WEB INNSER/01. INICIO/CÓMO FUNCIONA/Recurso 28.png" alt=""></div>
        <div class="item"><span>1° Registra tu participación</span></div>
      </div>
      <div class="carrito6">
        <div><img src="../Imagenes/WEB INNSER/01. INICIO/CÓMO FUNCIONA/flecha.png" alt=""></div>
      </div>
      <div class="carrito7">
        <div class="item"><img src="../Imagenes/WEB INNSER/01. INICIO/CÓMO FUNCIONA/Recurso 29.png" alt=""></div>
        <div class="item"><span>Construye tu equipo innovador</span></div>
      </div>
      <div class="carrito8">
        <div><img src="../Imagenes/WEB INNSER/01. INICIO/CÓMO FUNCIONA/flecha.png" alt=""></div>
      </div>
      <div class="carrito9">
        <div class="item"><img src="../Imagenes/WEB INNSER/01. INICIO/CÓMO FUNCIONA/Recurso 30.png" alt=""></div>
        <div class="item"><span>Desarrolla tu proyecto de innovación</span></div>
      </div>
      <div class="carrito10">
        <img src="../Imagenes/WEB INNSER/01. INICIO/CÓMO FUNCIONA/flecha.png" alt=""></div>
      <div class="carrito11">
        <div class="item"><img src="../Imagenes/WEB INNSER/01. INICIO/CÓMO FUNCIONA/Recurso 31.png" alt=""></div>
        <div class="item"><span>Consigue tu certificacion</span></div>
      </div>
      <div>
        <button class="carrito12">Registrate Ahora</button>
      </div>
    </div>
  </div>


<div class="fondo">
      <div class="precios_accesibles_para_todos">
        <h1>Precios accesibles para todos</h1>
        <h2>Desde 30 dólares por persona</h2>
      </div>

      <br><br><br>

    <div class="contenedor1">
      <div class="tabla">
        <h2>Explorador</h2>
        <img src="../Imagenes/WEB INNSER/01. INICIO/PRECIOS ACCESIBLES/Recurso 32.png">
        <h3>Ideal para principiantes</h3>
        <h1>$30</h1>
        <button class="boton">Microlearning</button>
        <button class="boton">Feedback Offline</button>
        <button class="boton">Sin tutoría</button>
        <button class="boton">Sin mentoría</button>
        <button class="boton">Sin certificación</button>
        <button >Inicia Ahora</button>
      </div>

      <div class="tabla">
        <h2>Experimentador</h2>
        <img src="../Imagenes/WEB INNSER/01. INICIO/PRECIOS ACCESIBLES/Recurso 33.png">
        <h3>Para innovadores</h3>
        <h1 class="excepcion">$300</h1>
        <button class="boton">Microlearning</button>
        <button class="boton">Feedback en vivo</button>
        <button class="boton">Tutoría</button>
        <button class="boton">Mentoría</button>
        <button class="boton">Certificación</button>
        <button >Reserva Ahora</button>
      </div>

      <div class="tabla">
        <h2>Corporativo</h2>
        <img src="../Imagenes/WEB INNSER/01. INICIO/PRECIOS ACCESIBLES/Recurso 34.png">
        <h3>Para universidades y empresas</h3>
        <h1>$500</h1>
        <button class="boton">Microlearning</button>
        <button class="boton">Feedback en vivo</button>
        <button class="boton">Tutoria dedicada</button>
        <button class="boton">Mentoría dedicada</button>
        <button class="boton">Certificación brandeada</button>
        <button >Solicita una reunión ahora</button>
      </div>
    </div>
    <br><br><br><br><br><br><br><br><br>
  </div>

    <div class="peliculas-recomendadas contenedor">
      <div class="contenedor-titulo-controles">
          <h3>Ayudamos a universidades y empresas a crear valor</h3>
          <div class="indicadores"></div>
      </div>

      <div class="contenedor-principal">
          <button role="button" id="flecha-izquierda" class="flecha-izquierda"><i class="fas fa-angle-left"></i></button>

          <div class="contenedor-carousel">
              <div class="carousel">
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/330438_330604650292544_191719750847702_1274488_761934256_o_400x400_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/AS_267463156011010@1440779593061_l_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/descarga (10)_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/descarga (11)_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/descarga (12)_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/descarga (13)_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/descarga (14)_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/descarga (15)_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/descarga (9)_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/logo-isa_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/logo-SLider-UNCP_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/logo-isa_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/logo-SLider-UNCP_preview_rev_1.png" alt=""></a>
                  </div>
                  <div class="pelicula">
                      <a href="#"><img src="../Imagenes/WEB INNSER/01. INICIO/Ayudamos a universidades y empresas a crear valor/perfil-1546345661_preview_rev_1.png" alt=""></a>
                  </div>
              </div>
          </div>
          <button role="button" id="flecha-derecha" class="flecha-derecha"><i class="fas fa-angle-right"></i></button>
      </div>
  </div>

<div class="barra">
  <div>
  <div class="carrito13">
    <img src="../Imagenes/WEB INNSER/01. INICIO/INDICADORES/Recurso 20.png" alt="">
    <h1>+1000</h1>
    <p>Jóvenes y adultos entrenados para innovar</p>
  </div>
  <div style="border-left:4px solid #fff;height:220px;position: absolute; margin-left: 460px; margin-top: 50px;"></div>
  <div class="carrito14">
    <img src="../Imagenes/WEB INNSER/01. INICIO/INDICADORES/mujer.png" alt="">
    <h1>+400</h1>
    <p>Mujeres empoderadas por la innovación</p>
  </div>
  <div style="border-left:4px solid #fff;height:220px;position: absolute; margin-left: 780px; margin-top: 50px;"></div>
  <div class="carrito15">
    <img src="../Imagenes/WEB INNSER/01. INICIO/INDICADORES/Recurso 19.png" alt="">
    <h1>+200</h1>
    <p>Ideas innovadoras generadas para crear valor</p>
  </div>
  <div style="border-left:4px solid #fff;height:220px;position: absolute; margin-left: 1050px; margin-top: 50px;"></div>
  <div class="carrito16">
    <img src="../Imagenes/WEB INNSER/01. INICIO/INDICADORES/Recurso 23.png" alt="">
    <h1>+20</h1>
    <p>Innovaciones probadas para impactar</p>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <hr size="5px" width="75%" align="center" color="white"/>
  </div>

  <div>
    <div class="carrito17"><h1>ODS:</h1></div>
    <div class="carrito18">
      <img src="../Imagenes/WEB INNSER/01. INICIO/INDICADORES/ODS/1200px-Sustainable_Development_Goal-es-14_preview_rev_1.png" alt="">
    </div>
    <div class="carrito19">

      <img src="../Imagenes/WEB INNSER/01. INICIO/INDICADORES/ODS/S_SDG-goals_icons-individual-rgb-05_preview_rev_1.png" alt="">
    </div>
    <div class="carrito20">

      <img src="../Imagenes/WEB INNSER/01. INICIO/INDICADORES/ODS/Sustainable_Development_Goal-es-10_preview_rev_1.png" alt="">
    </div>
    <div class="carrito21">
      <img src="../Imagenes/WEB INNSER/01. INICIO/INDICADORES/ODS/S_SDG-goals_icons-individual-rgb-09_preview_rev_1.png" alt="">
    </div>
  </div>
</div>

<div>
  <button class="carrito22">Solicita una reunión</button>
</div>
<br><br><br><br>
    <div class="post-footer">
    <div class="carrito23">
      <p>Empresa</p>
      <p>Innser®</p>
      <p>Materiales</p>
      <p>Nuestro Proceso</p>
    </div>
    <div class="carrito24">
      <h1>SOCIOS GLOBALES</h1>
      <div class="footer_img">
      <img src="../Imagenes/WEB INNSER/18700165_842154202589843_6628178582687717499_n_preview_rev_1.png" alt=""><img src="../Imagenes/WEB INNSER/unnamed (3)_preview_rev_1 (1).png" alt="">
      </div>
    </div>
    <div class="carrito25">
    <h1>Encuentranos como:</h1>
    <div class="footer_redes">
      <a href="https://www.facebook.com/InnserAcademy"><img src="../Imagenes/WEB INNSER/facebook.png" alt=""></a>
      <img src="../Imagenes/WEB INNSER/instagram.png" alt="">
      <a href="https://www.linkedin.com/company/innserpe/"><img src="../Imagenes/WEB INNSER/linkedin.png" alt=""></a>
    </div>
  </div>
  </div> 

-->

<div class="footer-pagina2">
  <div class="footer1">
    <div class="footer1-1">
    <a href="index.php"><img src="Imagenes/WEB_INNSER/01.INICIO/LOGO-RENOVADO-INNSER-.png_2.png" width="200px"></a>
    </div>
    <div class="footer1-2">
      <br><br>
    <p>® Innser 2023</p>
    </div>
  </div>
  <div class="footer2">
    <div class="footer2-1">
      <h1>Socios Globales:</h1>
    </div>
    <div class="footer2-2">
    <a href="https://tsunagaru-edutech.com/" target="_blank"><img src="Imagenes/WEB_INNSER/Footer/Recurso28.png" width="70px"></a>
    <a href="https://fractalup.com/" target="_blank"><img src="Imagenes/WEB_INNSER/Footer/Recurso29.png" width="70px"></a>
    <a href="https://certiprof.com/" target="_blank"><img src="Imagenes/WEB_INNSER/Footer/Recurso30.png" width="65px"></a>
    </div>
  </div>
  <div class="footer3">
    <div class="footer3-1">
      <h1>Contenido:</h1>
    </div>
    <div class="footer3-2">
      <a href="index.php">Inicio</a>
      <a href="index.php">Cursos</a>
      <a href="empresa.php">Empresa</a>
      <a href="nosotros.php">Nosotros</a>
    </div>
  </div>
  <div class="footer4">
    <div class="footer4-1">
      <h1>Contacto:</h1>
    </div>
    <div class="footer4-2">
      <a href="https://www.facebook.com/InnserAcademy" target="_blank"><img src="Imagenes/WEB_INNSER/01.INICIO/fb.png" width="30px"></a>
      <a href="https://www.linkedin.com/company/innserpe/" target="_blank"><img src="Imagenes/WEB_INNSER/01.INICIO/in.png" width="30px" ></a>
      <a href="https://www.youtube.com/@rosaalcantara973" target="_blank"><img src="Imagenes/WEB_INNSER/01.INICIO/yt.png"  width="30px"></a>
    </div>
  </div>
</div>


<script type="text/javascript" src="./main.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init({duration:2000});
      </script>
  <script src="formulario.js"></script>
  <script src="https://kit.fontawesome.com/e013d55bb1.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <script src="barra_lateral.js"></script>  

  </body>
</html>
