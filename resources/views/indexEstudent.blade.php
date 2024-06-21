<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAKE HISTORY</title>
    <link rel="icon" type="image/png" href="/imagenes/imagenventana.png">
    <!-- Agrega tus estilos CSS aquí -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-storage.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/stylesEstudent.css">
    <link rel="variables" href="vaiables.scss">
    <script src="../js/crear_cuento.js"></script>
</head>
<body>
    <!-- Página de Bienvenida -->
    <nav class="navbar navbar-expand-lg" style="background-color: #ceacf0;padding:1%;font-family:'Montserrat',sans-serif;font-weight:bold;font-size:18px">
      <div class="container-fluid">
        <a class="navbar-brand" href="#bienvenida">
          <img src="/imagenes/imagenventana.png" alt="Logo" width="70" height="65" class="d-inline-block align-text-center" style="margin-bottom:1%;border:#641908;border-bottom:10%" >MAKE HISTORY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarInicial" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarInicial">
          <ul class="navbar-nav me-auto mb-2 mb-lg-1.2">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  EJEMPLOS
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#ejemplosvideos">Videos</a></li>
                  <li><a class="dropdown-item" href="#ejemplosdocumentos">Documentos</a></li>
                </ul>
            </li>
           <!--
            <li class="nav-item">
              Aqui solo estilice boton-->
              <!-- <a class="nav-link active" aria-current="page" class="d-inline-block align-text-center" href="comentarios-cuentos.html">REVISAR</a>
            </li>
          </ul>-->
          
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <!--boton logout-->
            <a class="nav-link active" aria-current="page" class="d-inline-block align-text-center" href="{{route('logout')}}">CERRAR SESION</a>
             <!--boton login<a href="#" class="nav-link active" data-bs-toggle="modal" data-bs-target="#modalLogin">
              LOGIN
            </a>-->
          </ul>
          <ul class="nav-item">
            <!--boton login-->
            <a class="nav-link active" aria-current="page" class="d-inline-block align-text-center" href="inicioSesion.html">LOGIN</a>
             <!--boton login<a href="#" class="nav-link active" data-bs-toggle="modal" data-bs-target="#modalLogin">
              LOGIN
            </a>-->
          </ul>

        </div>
      </div>
    </nav>
    <div class="container">
       
    <section id="bienvenida">
        <figure class="text-center">
            <blockquote class="blockquote"> <!--Garamond , Brush Script MT , Lucida Bringht , Didot , Copperplate , Monaco-->
                <!--<h2 style="font-family: 'Montserrat',sans-serif;font-weight:bold;font-size:30px;padding:5%;line-height:0;color:#140864;text-align:center">Bienvenido</h2>-->
                <h1 style="font-family: 'Candara',sans-serif;font-weight:bold;font-size:75px;padding:0%;margin-bottom:5px;line-height:2;color: #160eab;box-sizing:border-box;text-align:center">MAKE HISTORY</h1>
                <h3>¡Ayudando a los niños a crear sus propios cuentos!</h3>
            </blockquote>
          </figure>
        
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2000">
                <img src="/imagenes/Carrusel1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5  style="color:#0a0a0a;font-size:25px">APRENDE </h5>
                  <h5 style="color:#060606;font-size:20px">Crea tus propios cuentos.</h5>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="/imagenes/Carrusel2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 style="color:#0a0a0a;font-size:25px">DIVIERTETE</h5>
                  <h5 style="color:#060606;font-size:20px">Con ejemplos interactivos.</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/imagenes/Carrusel3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5 style="color:#f7f3f3;font-size:25px">COMPARTE</h5>
                  <h5 style="color:#f7f3f3;font-size:20px">descarga tu cuento y compartelo.</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <h5 style="color:#060606;font-size:20px;padding:2%;font-family:'Montserrat',sans-serif;font-weight:bold">Diviertete con la pagina de apoyo para que puedas ver:</h5>
          <ul class="list-unstyled" style="padding:1%;font-weight:bold;color:rgb(6, 110, 110);font-family:'Montserrat',sans-serif">
              <ul>
                <li>Videos que puedes usar como ejemplo.</li>
                <li>Textos de creadores recientes.</li>
                <li>Como ordenar tus ideas antes de escribir.</li>
              </ul>
            </li>
            <li></li>
          </ul>
          <p style="color:#026e69;font-size:18px;font-family:'Montserrat',sans-serif">Comienza ya y desliza para ver ejemplos!!!</p>
    </section>
    <!--inicia modal login-->
    <div class="modal fade" id="modalLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">INICIAR SESION</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Nombre de usuario:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Contraseña:</label>
                <input type="text" class="form-control" id="recipient-name">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary">ingresar</button>
          </div>
        </div>
      </div>
    </div>
    <!--fin modal login-->
    <!-- Sección de Ejemplos Videos
    <section id="ejemplos">
        <h2>Ejemplos para Crear Cuentos</h2>
        <p>Aquí puedes encontrar ejemplos de cuentos:</p>
        <ul>
            <li><a href="https://www.youtube.com/watch?v=ejemplo1">Ejemplo de Cuento 1</a></li>
            <li><a href="https://www.youtube.com/watch?v=ejemplo2">Ejemplo de Cuento 2</a></li>
            
        </ul>-->
        <!--Cards de videos youtube-->
        <section id="ejemplosvideos">
            <h2 style="padding:1%;font-family:'Montserrat',sans-serif;font-weight:bold;font-size:25px">EJEMPLOS - VIDEOS</h2>
            <p style="font-family:'Montserrat',sans-serif">Aquí puedes encontrar videos que te ayudaran a crear un cuento:</p>
        <div class="row row-cols-1 row-cols-md-4 g-4" >
            <div class="col">
              <div class="card h-100" >
                <img src="/imagenes/Carrusel1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Como escribir un cuento</h5>
                  <p class="card-text">
                    <a>En este vídeo vamos a explicar los pasos para aprende a escribir un cuento...</a>
                  </p>
                  <div class="card-footer">
                    <small class="text-body-secondary">
                        <a href="https://www.youtube.com/watch?v=4E7cvyuvltw&pp=ygUhY29tbyBlc2NyaWJpciBjdWVudG9zIHBhcmEgbmnDsW9z">Link del video</a>
                    </small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/imagenes/Carrusel2.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">El cuento y sus partes</h5>
                  <p class="card-text">
                    <a>Aula Chachi, videos educativos, descripcion de un cuento y sus partes...</a>
                  </p>
                  <div class="card-footer">
                    <small class="text-body-secondary">
                        <a href="https://www.youtube.com/watch?v=uLnBJMqcXOI&pp=ygUhY29tbyBlc2NyaWJpciBjdWVudG9zIHBhcmEgbmnDsW9z">Link del video</a>
                    </small>
                  </div>  
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/imagenes/Carrusel3.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">¿Cómo crear un cuento?</h5>
                  <p class="card-text">
                    <a>Aprendiendo con Efy, habla del cuento, lo sencillo y divertido que es crear...</a>
                  </p> 
                  <div class="card-footer">
                    <small class="text-body-secondary">
                        <a href="https://www.youtube.com/watch?v=bktO0RxMeoI&pp=ygUhY29tbyBlc2NyaWJpciBjdWVudG9zIHBhcmEgbmnDsW9z">Link del video</a>
                    </small>
                  </div> 
                  </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="/imagenes/Carrusel1.jpg" class="card-img-top d-block w-100" alt="...">
                <div class="card-body">
                  <h5 class="card-title">¿Como escribir un cuento?</h5>
                  <p class="card-text">
                    <a>Maestraa Blanca, enseña a los peques a escribir cuentos paso a paso...</a>
                  </p>
                  <div class="card-footer">
                    <small class="text-body-secondary">
                        <a href="https://www.youtube.com/watch?v=uFzwLEa_MOQ&pp=ygUhY29tbyBlc2NyaWJpciBjdWVudG9zIHBhcmEgbmnDsW9z">Link del video</a>
                    </small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Cards de documentos ejemplos-->
        <section id="ejemplosdocumentos">
            <h2 style="padding:2%;font-family:'Montserrat',sans-serif;font-weight:bold;font-size:25px">EJEMPLOS - DOCUMENTOS</h2>
            <p style="font-family:'Montserrat',sans-serif">Aquí puedes encontrar cuentos que te serviran de ejemplo para crear un cuento:</p>
            <div class="row row-cols-1 row-cols-md-4 g-4" >
                <div class="col">
                  <div class="card h-70" onclick="window.open('/documentos/CaperucitaRoja.pdf', '_blank');">
                    <img src="/imagenes/Carrusel1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Como de Caperucita Roja</h5>
                      <p class="card-text">
                        <a>Presiona para descargar el documento o click en el link...</a>
                      </p>
                      <div class="card-footer">
                        <small class="text-body-secondary">
                            <a href="https://comunidadsm.com.pe/wp-content/uploads/La-Caperucita-Roja-1.pdf">Link del documento</a>
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-70" onclick="window.open('/documentos/mariquita-cochinita.pdf', '_blank');">
                    <img src="/imagenes/Carrusel2.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">El cuento de Mariquita la cochinita</h5>
                      <p class="card-text">
                        <a>Presiona para descargar el documento o click en el link...</a>
                      </p>
                      <div class="card-footer">
                        <small class="text-body-secondary">
                            <a href="https://www.bivica.org/files/mariquita-cochinita.pdf">Link del documento</a>
                        </small>
                      </div>  
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-70" onclick="window.open('/documentos/Pinocho.pdf', '_blank');">
                    <img src="/imagenes/Carrusel3.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cuento de Pinocho</h5>
                      <p class="card-text">
                        <a>Presiona para descargar el documento o click en el link...</a>
                      </p> 
                      <div class="card-footer">
                        <small class="text-body-secondary">
                            <a href="https://www.leer.org/files/Site/2020/Pinocho.pdf">Link del documento</a>
                        </small>
                      </div> 
                      </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card h-70" onclick="window.open('/documentos/Los tres cerditos.pdf', '_blank');">
                    <img src="/imagenes/Carrusel1.jpg" class="card-img-top d-block w-100" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Cuento de los 3 cerditos</h5>
                      <p class="card-text">
                        <a>Presiona para descargar el documento o click en el link...</a>
                      </p>
                      <div class="card-footer">
                        <small class="text-body-secondary">
                            <a href="https://www.micoledevegueta.net/images/actividades-en-casa/cuentos-cortos/cuentos-cortos-los-tres-cerditos.pdf">Link del documento</a>
                        </small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

        </section>
    <!--</section>-->

    <button class="fixed-button" id="openModalBtn">UNIRME A UNA CLASE</button>

    <form id="myModal" class="modal-us"  method="POST" action="{{ route('unirseClase') }}">
      @csrf
      <div class="modal-content-us">
          <div class="modal-header-us">
              <h2>UNIRME A UNA CLASE</h2>
          </div>
          <div class="modal-body-us">
              <p>Pídele a tu profesor el código de la clase, y luego ingrésalo aquí:</p>
              <input name='clave' type="text" id="classCode" style="width: 100%; padding: 10px; margin-top: 10px; border-radius: 5px; border: 1px solid #ccc;">
          </div>
          <div class="modal-footer-us">
              <button class="btn btn-blue" id="joinClassBtn">Unirse</button>
              <a class="nav-link active" aria-current="page" class="d-inline-block align-text-center" href="{{route('login')}}">LOGIN</a>
              <span class="btn btn-red" id="closeModalBtn">Cancelar</span>
          </div>
      </div>
    </form>
</div>


<footer class="footer text-white text-center" style="background-color:#ceacf0;padding:3%;
margin-right: auto; margin-left: auto; position: fixed; bottom:0; width: 100%">
    <!-- Contenido del footer -->
    <div class="container" style="display: block;unicode-bidi: isolate">
        <div class="footer_inner">
            <div class="footer_item ">
                <div class="container">
                <p style="font-family:'Montserrat',sans-serif" >Proyecto de entornos virtuales en proceso</p>
                </div>
            </div>
         </div>
    </div>
</footer>

    <!-- Agrega tus scripts JavaScript aquí -->
    <script src="/js/script2.js"></script>
</body>
</html>
