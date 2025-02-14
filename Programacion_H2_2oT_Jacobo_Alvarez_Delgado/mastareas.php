<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Añadir Tareas</title>
        <style>
               #sec3{
            border-radius: 10px;
            margin-left: 37%;
            margin-right: 25%;
            background-color: whitesmoke;
            width: 27%;
                }
              #formulario{
                display: Box;
                width: 42%;
                margin-left: 18%;     
                }
                p{
                    color: white;
                }
        </style>
        <link rel="icon" href="/imagenes/icono.ico" type="image/x-icon">
    </head>
    <body>
        <?php include "barradenavegacion.php"; mostrar_barra1();?>
        <br> 
        <h1 align="center">Nueva Tarea</h1>  <br>
        <section id="sec3">
            <form method="GET" action="mastareas.php" id="formulario"> <br>
            <fieldset>
                <label>Titulo: </label>
            <input type="text" name="titulotarea" required> <br>
            <label>Descripcion de la tarea</label> <BR>
            <textarea COLS="50" rows="2" name="texto"> 
            </textarea> </fieldset> <br>
            <label>ESTADO DE LA TAREA</label>
            <select name="selector" class="form-select" aria-label="Default select example" required="">
                 <option selected>Elige una opcion</option>
                <option value="pendiente">Pendiente</option>
                <option value="proceso"> En Proceso...</option>
                <option value="fin">Finalizado</option> 
            </select>
            <br>    
            <input type="submit" value="Enviar"> 
        </form>
            <br>
        </section>
        <?php 
        session_start();
        //CONEXION 
        include "conexion.php";
        
        // AGREGAR LA TAREA A LA BASE DE DATOS
        
        if(isset($_GET['titulotarea']) && isset($_GET['texto'])&& isset($_GET['selector'])){
            // RECUPERAMOS EL FORMULARIO
            $titulo = $_GET['titulotarea'];
            $texto = $_GET['texto'];
            $selector = $_GET['selector'];
            $usuario = $_SESSION['usuario'];
            // CREAMOS LA SENTENCIA SQL PARA AGREGAR A LA BASE DE DATOS
            $nuevo = "INSERT INTO tareas VALUES (NULL,'$titulo','$texto','$selector','$usuario')";
            
            // EJECUTAMOS SQL
            $si = $conexion->query($nuevo);
            if ($si) {
                echo "<p align=center>Se ha agregado la tarea de manera exitosa</p>";
            }else{
                 echo "Rellena bien el formulario";
            }
        }
        ?>
    </body>
</html>
