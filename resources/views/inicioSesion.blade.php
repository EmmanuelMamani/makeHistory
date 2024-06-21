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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="variables" href="css/variables.scss">
    <script src="../js/crear_cuento.js"></script>
</head>
<body>
    <!-- Página de Bienvenida -->
    <nav class="navbar navbar-expand-lg" style="background-color: #ceacf0;padding:1%;font-family:'Montserrat',sans-serif;font-weight:bold;font-size:18px">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
          <img src="/imagenes/imagenventana.png" alt="Logo" width="70" height="65" class="d-inline-block align-text-center" style="margin-bottom:1%;border:#641908;border-bottom:10%" >MAKE HISTORY</a>
      </div> 
    </nav>
    <div class="container" box-sizing="border-box" display="block" line-height="21px" position="relative">
    <!-- Formulario para Escribir Cuentos -->
    <section id="escribir-cuento" style="padding:5%">
        <h2 style="padding:2%;font-family:'Montserrat',sans-serif;font-weight:bold;font-size:25px">INGRESAR</h2>
        <div id="formulario-cuento" class="was-validated" >
       <div class="row g-3">
        <!--Ingresar titulo-->

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre de usuario:</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Debes Ingresar un usuario ya creado.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Recordar datos</label>
          </div>
          
          <button class="btn btn-primary" href="profesor.html" role="button">Ingresar</button>
          <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Crear Cuenta</a>
        </form>
      </div>
    </section>
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

