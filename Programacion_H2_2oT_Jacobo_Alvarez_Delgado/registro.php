<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registros</title>
        <style>
            #elformu{
                display: box;
                width: 60%;
                margin-left: 28%;
            }
           #sec2{
            border-radius: 10px;
            margin-left: 40%;
            margin-right: 25%;
            background-color: whitesmoke;
            width: 20%;
                }
        </style>
    </head>
    <body>
        <?php include "barradenavegacion.php"; mostrar_barra3(); ?>
        <h1 align="center">Registro</h1> <br>
        <section id="sec2">
            <form method="GET" action="registro.php" id="elformu">
                <fieldset>
                    <label>Nombre</label>
                <input type="text" name="nombre" required=""> <br>
                <label>Correo:</label>
                <input type="text" name="correo" required=""> <br>
                <label>Contraseña:</label>
                <input type="password" name="contra" required=""> <br> <br>
                <input type="checkbox" required="" >Aceptar las politicas de privacidad
                </fieldset>
                <fieldset>
                    <br>
                <input type="submit" name="enviar"> <br>
                </fieldset>
            </form>
        
        <?php
        // CONEXION
        include "conexion.php"; 
        
        if (isset($_GET['correo']) && isset($_GET['nombre']) && isset($_GET['contra'])) {
        // COMPROBAR QUE EL CORREO NO EXISTE EN LA BASE DE DATOS
        $correo = $_GET['correo'];
        $sql = " SELECT * from usuario WHERE correo = '$correo' ";
        $resultado = $conexion->query($sql);
        
        IF($resultado->num_rows == 0){
            //INSERTARLO A la BD
            $nombre= $_GET['nombre'];
            $correo= $_GET['correo'];
            $contra = $_GET['contra'];
            $contratrucada = password_hash($contra, PASSWORD_DEFAULT);
            $insertar = "INSERT INTO usuario (nombre,correo,contra) values('$nombre','$correo','$contratrucada');";
            $ejecutar = $conexion->query($insertar);
        }else{
            echo"<p align=center>Este correo ya esta registrado en nuestro sistema</p>";
        }
       }
       
        ?>
            </section>
    </body>
</html>
