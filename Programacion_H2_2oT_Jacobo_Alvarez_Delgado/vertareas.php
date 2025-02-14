<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ver Tareas</title>
        <style>
               #sec3{
            border-radius: 10px;
            margin-left: 40%;
            margin-right: 25%;
            background-color: whitesmoke;
            width: 16%;
                }
             #tablita{
                    width: 70%; 
                    margin-left: 18%;
             }
             p{
                 color: white;
                 margin-right: 4%;
             } 
             #tareas{
                 margin-right:10%;
             }
        </style>
    </head>
    <body>
        <?php include "barradenavegacion.php"; mostrar_barra1();?>
        <section id='tablita'>
            <h1 align="center" id="tareas">TAREAS</h1>
        <?php
             //CONEXION
        include "conexion.php";
        session_start();
        //COMPROBAR SI LA SESSION EXISTE
        IF(isset($_SESSION['usuario'])){
         // MOSTRAR TAREAS
         $idsesion = $_SESSION['usuario'];
         $tareas = "SELECT * FROM tareas where correo = '$idsesion' ";
         $resultado = $conexion->query($tareas);
         echo "<br>";
         echo "<table border=1 class='table table-dark table-hover' id=tablita";
            echo "<tr>";
            echo "<td><p>NOMBRE TAREA</p></td>";
            echo "<td><p>DESCRIPCIÓN</p></td>";
            echo "<td><p>USUARIO</p></td>";
            echo "<td><p>ELIMINAR</p></td>";
            echo "</tr>";
         //LA TABLA
         while($row=$resultado->fetch_assoc()){
             echo "<tr>";
             echo "<td>" . $row['titulo'] . "</td>";
             echo "<td>" . $row['descripcion'] . "</td>";
             echo "<td>" . $row['correo'] . "</td>";
              echo "<td><form method='GET' action='vertareas.php'>
                <input type='hidden' name='idtarea' value=". $row['id_tarea']. ">"
                    . "<input type='submit' name=Eliminar value=Eliminar class='btn btn-danger'> </form> </td>"; 
             echo "</tr>";
         }
         echo "</table>";
        }
        echo "</section>";
        if (!empty($_GET['Eliminar']) && isset($_GET['idtarea'])) {  // Aquí cambiamos !isset a isset
        $idtarea = $_GET['idtarea']; 
    
            // Sentencia de Eliminar
            $borrando = "DELETE FROM tareas WHERE id_tarea = ?";

            // Preparar la ejecución de la sentencia
            $hagamoslo = $conexion->prepare($borrando);
             $hagamoslo->bind_param("i",$idtarea);  
            // Ejecutar la consulta
            if ($hagamoslo->execute()) {
                echo "<p align=center>Tarea eliminada correctamente.</p>";
            } else {
                echo "Error al eliminar la tarea.";
            }

            // Cerrar la consulta
            $hagamoslo->close();
        }
        ?>
        <section id='sec3'>
        <button type="button" class="btn btn-outline-success"><a href="mastareas.php">AÑADIR TAREAS</a></button>
        <button type="button" class="btn btn-outline-danger"><a href="cerrar.php">CERRAR SESION</a></button>
        </section>
   </body>
</html>
