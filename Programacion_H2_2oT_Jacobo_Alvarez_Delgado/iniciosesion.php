<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio de Sesion</title>
        <style>
            #formuformu{
                display: Box;
                width: 42%;
                margin-left: 25%;
            }
            #sec3{
            border-radius: 10px;
            margin-left: 40%;
            margin-right: 25%;
            background-color: whitesmoke;
            width: 20%;
                }
                p{
                    color:white;
                }
        </style>
        <link rel="icon" href="/imagenes/icono.ico" type="image/x-icon">
    </head>
    <body>
        <?php include "barradenavegacion.php"; mostrar_barra3(); 
        ?>
           <h1 aling="center" align="center">Inicio de Sesión</h1> <hr> <br>
           <section id="sec3"> <br> 
           <form action="iniciosesion.php" method="GET" id="formuformu"> 
               <label>Correo:  </label> 
               <input type="text" name="correo" required> <br> <br>
               <label>Contraseña:</label>
               <input type="password" name="contra" required> <br> <br>
               <input type="submit"> 
           </form>
               <br>
           </section>    
        <?php
          session_start();
          //CONEXION
          include "conexion.php"; 

          if (isset($_GET['correo']) && isset($_GET['contra'])) {
              $correito = $_GET['correo'];
              $contra = $_GET['contra'];

              // CONSULTA QUE TENEMOS QUE EJECUTAR
              $sql = "SELECT * FROM usuario WHERE correo = ?";
              $funcionar = $conexion->prepare($sql);
              $funcionar->bind_param("s", $correito);
              $funcionar->execute();
              $comprobar = $funcionar->get_result();

              if ($comprobar->num_rows == 0) {
                  echo "<p align=center>No tenemos este correo registrado en nuestra página</p>";
              } else {
                  $filonga = $comprobar->fetch_assoc();

                  // VERIFICACION DE CONTRASEÑA
                  if (password_verify($contra, $filonga['contra'])) {
                      $_SESSION['usuario'] = $correito;
                      header("Location: vertareas.php");
                      exit;
                  } else {
                      echo "<p align=center>Contraseña incorrecta</p>";
                  }
              }
          }
          ?>
    </body>
</html>



