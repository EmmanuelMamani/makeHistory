<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revision</title>
    <!--Añadí icono 1 linea y 7 lineas de bootstrap+firebase-->
    <link rel="icon" type="image/png" href="/imagenes/imagenventana.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-storage.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css">  
    <!--Añadí estilo de variables-->
    <link rel="variables" href="vaiables.scss">

</head>
<body>
  <div >
    <!--Agregue Navbar-->
        <nav class="navbar navbar-expand-lg" style="background-color: #ceacf0;padding:1%;font-family:'Montserrat',sans-serif;font-weight:bold;font-size:18px">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">
                <img src="/imagenes/imagenventana.png" alt="Logo" width="70" height="65" class="d-inline-block align-text-center" style="margin-bottom:1%;border:#641908;border-bottom:10%" >MAKE HISTORY</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-1.2">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            TAREAS
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#tarea1">TAREA 1</a></li>
                            <li><a class="dropdown-item" href="#tarea2">TAREA 2</a></li>
                          </ul>
                      </li>
                </ul>
                
              </div>
            </div>
          </nav> <!--hasta aqui Nav-->

          <div class="container">
            <div class="content">
              <section id="tarea1" style="padding:1%">
                <h3 style="font-family: 'Candara',sans-serif;font-weight:bold;font-size:45px;padding:0%;margin-bottom:4px;line-height:2">EL LOBO Y LA GRULLA</h3>
                <p id="story">
                    A un lobo que comía un hueso, se le atragantó el hueso en la garganta, y corría por todas partes en busca de auxilio. En su correr encontró a una grulla y le pidió que le salvara de aquella situación angustiosa a cambio de que le pagaría por ello.
    
                    La grulla se fió del lobo y aceptó el trato. Introdujo su pico y su cabeza en la boca del lobo, sacando de la garganta el hueso atravesado.
    
                    La grulla pidió entonces la cancelación de la paga convenida y el lobo le contestó:
    
                    - Oye amiga, ¿No crees que ya es suficiente paga con haber podido sacar tu cabeza sana y salva de mi boca
                </p>
                <button id="save-button">Guardar Versión</button>
            </div>
            <div class="versions-menu">
                <h2>Versiones</h2>
                <div id="versions-list"></div>
            </div>
            <div id="comment-display" class="comment-box" style="display:none;"></div>
        </div>
    
        <!-- Modal para añadir comentario o guardar versión -->
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <h2 id="modal-title"></h2>
                <textarea id="modal-text" rows="4" cols="50" placeholder="Escribe aquí..."></textarea>
                <button id="modal-action-button"></button>
            </div>
        </div>
      </section>
      </div>
  
      <footer class="footer text-white text-center" style="background-color:#ceacf0;padding:3%;margin-top: 50px;
      margin-left: auto; width:100%; position:absolute; bottom: 0;">
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

        <script src="js/script.js"></script>
</body>
</html>
