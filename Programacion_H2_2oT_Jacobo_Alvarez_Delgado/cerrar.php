<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
    </head>
    <body>
       <?php
// EMPEZAR UNA SESION
session_start();

// ELIMINAR TODAS LAS SESIONES
session_unset();

// "CERRAR" LA SESION
session_destroy();

// VOLVER AL PRINCIPIO
header("Location: index.php");
exit();
?>
    </body>
</html>

