<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Navegación</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body{
            background-image: url('imagenes/fondo.jpg');
            background-size: cover;
            background-repeat:no-repeat; 
        }
        h1{
            color: white;
        }
    </style>
    <link rel="icon" href="/imagenes/icono.ico" type="image/x-icon">
</head>
<body>

   
   <?php 
     //FUNCION PARA MOSTRAR LA BARRA DE NAVEGACION
   
     function mostrar_barra3(){
      ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        <a class="nav-link" href="registro.php">Registro</a>
        <a class="nav-link" href="iniciosesion.php">Inicio de Sesion</a>
        <a class="nav-link disabled" aria-disabled="true">Ver Tareas</a>
      </div>
    </div>
  </div>
</nav>
   
     <?php }  ?>
    <?php
      function mostrar_barra1(){
      ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary"  data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="vertareas.php">Tareas</a>
        <a class="nav-link" href="mastareas.php">Añadir Tareas</a>
      </div>
    </div>
  </div>
</nav>
   
     <?php } 
       
       
     ?>
</body>
</html>