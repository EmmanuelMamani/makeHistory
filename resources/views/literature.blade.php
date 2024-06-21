<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literatura</title>
    <link rel="stylesheet" href="/css/estilos_literatura.css">
    <!-- Agrega tus estilos CSS aquí -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-storage.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #ceacf0;padding:1%;font-family:'Montserrat',sans-serif;font-weight:bold;font-size:18px">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="/imagenes/imagenventana.png" alt="Logo" width="70" height="65" class="d-inline-block align-text-center" style="margin-bottom:1%;border:#641908;border-bottom:10%" >MAKE HISTORY</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
<div class="literature-page">
    <h1>Literatura</h1>
    <div class="tasks">
        <div class="task-list">
            <h2>Tareas publicadas</h2>
            @foreach ($tareas as $tarea)
              <a href="{{route('tarea',['id'=>$tarea->id])}}" class="task" id="taskA">{{$tarea->titulo}}</a>   
            @endforeach
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
              <form  method="POST" action="{{route('crearTarea')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Titulo de la tarea:</label>
                  <input type="text" class="form-control" id="recipient-name" name='titulo'>
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Descripcion:</label>
                  <input type="text" class="form-control" id="recipient-name" name='descripcion'>
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">puntaje:</label>
                  <input type="text" class="form-control" id="recipient-name" name='puntos'>
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Fecha de entrega:</label>
                  <input type="date" class="form-control" id="recipient-name" name='fecha'>
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Imagen:</label>
                  <input type="file" class="form-control" id="recipient-name" name='imagen'>
                </div>
                <input type="hidden" name="clase_id" value="{{$clase->id}}" >
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
<script src="/js/script.js"></script>
</body>



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
</html>
