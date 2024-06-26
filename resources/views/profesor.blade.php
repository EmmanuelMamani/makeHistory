<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFESOR</title>
    <link rel="icon" type="image/png" href="/imagenes/imagenventana.png">
    <!-- Agrega tus estilos CSS aquí -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-storage.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="variables" href="vaiables.scss">
    <script src="../js/crear_cuento.js"></script>
</head>
<body class="">
    <!-- Página de Bienvenida -->
    <nav class="navbar navbar-expand-lg" style="background-color: #ceacf0;padding:1%;font-family:'Montserrat',sans-serif;font-weight:bold;font-size:18px">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="/imagenes/imagenventana.png" alt="Logo" width="70" height="65" class="d-inline-block align-text-center" style="margin-bottom:1%;border:#641908;border-bottom:10%" >MAKE HISTORY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarProfesor" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarProfesor">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <!--boton logout-->
            <a class="nav-link active" aria-current="page" class="d-inline-block align-text-center" href="{{route('logout')}}">CERRAR SESION</a>
             <!--boton login<a href="#" class="nav-link active" data-bs-toggle="modal" data-bs-target="#modalLogin">
              LOGIN
            </a>-->
          </ul>
          
            <!--Aqui solo estilice boton-->
          <ul class="nav-item">
            <a class="nav-link active" aria-current="page" class="d-inline-block align-text-center" href="comentarios-cuentos.html">REVISAR</a>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="container text-center" style="padding-top: 4%;">
        <div class="row g-2">
          <div class="col">
            <div class="p-3"> 
              <div class="card" style="width:auto; height:auto">
              <img src="/documentos/IconoUser.png" alt="Icono" width="130" height="130" class="rounded mx-auto d-block">
              <div class="card-header">
                MI PERFIL
              </div>
              <div class="card-body">
                <ul class="list-unstyled">
                  <li><strong>Nombre de Usuario:</strong>{{$profesor->name}}</li>
                  <li><strong>Email:</strong>{{$profesor->email}}</li>
                  <li><strong>Teléfono:</strong>+591 {{$profesor->telefono}}</li>
                  <li><strong>Dirección:</strong>{{$profesor->direccion}}</li>
                  <li><strong>Happy Birthday:</strong>{{$profesor->fechaNacimiento}}</li>
                  <li><strong>Hobbies:</strong>{{$profesor->hobbies}}</li>
              </ul>
              </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="p-3">
            <h3>MIS CLASES</h3>
            <div class="scroll-container">
              <p></p>
              <div class="d-grid gap-4 col-12 col-md-10 mx-auto " >
                @foreach ($profesor->clases as $clase)
                  <a href="{{route('clase',['id'=>$clase->id])}}" class="btn btn-primary" type="button">{{$clase->nombreClase}}</a>
                @endforeach
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
      <!--MODAL CREAR CLASE-->
      <button class="fixed-button" data-bs-toggle="modal" data-bs-target="#modalCrearClase">
        NUEVA CLASE
      </button>
      <div class="modal fade" id="modalCrearClase" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="newClass">CREAR NUEVA CLASE</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form  method="POST" action="{{ route('crearClase') }}">
                @csrf
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Nombre de la clase:</label>
                  <input type="text" class="form-control" id="recipient-name" name='nombre'>
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Año:</label>
                  <input type="text" class="form-control" id="recipient-name" name='anio'>
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Codigo de clase:</label>
                  <input type="text" class="form-control" id="recipient-name" name='clave'>
                </div>
                <div class="modal-footer">
                  <span type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</span>
                  <button class="btn btn-primary">Crear</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div><!--FIN MODAL CREAR CLASE-->
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
    <script src="scripts.js"></script>
</body>
</html>
