<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <style>
            #boton1{
                display: box;
                width: 100%;
                margin-left: 25%;
            }
            #boton2{
                 display: box;
                width: 100%;
                margin-left: 25%;
            }
            #sec1{
            border-radius: 10px;
            margin-left: 45%;
            margin-right: 25%;
            background-color: whitesmoke;
            width: 10%;
                }
        </style>
        <link rel="icon" href="/imagenes/icono.ico" type="image/x-icon">
    </head>
    <body>
        <?php 
        include "barradenavegacion.php"; mostrar_barra3(); 
        ?>
        <h1 align="center">Inicio</h1> <hr> <br>
        
        <section id="sec1"> <br>
            <form method="GET" action="registro.php" id="boton1">
               <button type="submit" name="registro" class="btn btn-outline-success">Registrate!</button>
            </form>
            <br>
            <form method="GET" action="iniciosesion.php" id="boton2" > <br>
               <button type="submit" name="inicio"class="btn btn-outline-info">Inicia Sesion</button>
            </form>
            <br>
        </section>
        <?php
        // put your code here
        ?>
    </body>
</html>
