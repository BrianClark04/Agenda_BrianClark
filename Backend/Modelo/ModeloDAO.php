<?php
require_once '../Conexion/conexion.php';
class ModeloDAO{
function obtenerTareaModelo() {
    $conexion = new conn;
    $conn = $conexion->connection();
    $sql = "SELECT * FROM tareas";
    $respuesta = $conn->query($sql);
    $tareas = $respuesta->fetch_all(MYSQLI_ASSOC);
    return $tareas;
}

function agregarTareaModelo($nombre, $fecha, $hora, $estado) {
    $conexion = new conn;
    $conn =  $conexion->connection();
    $sql = "INSERT INTO tareas (nombre,fecha,hora,estado) VALUES ('$nombre', '$fecha','$hora', '$estado')";
    $conn->query($sql);
   $respuesta=$conn->affected_rows;
    if ($respuesta){
        return "se registro";
        }else{
            return "no se registro";
        
    }
}

function eliminarTareaModelo($id_tarea) {
    $conexion = new conn;
    $conn = $conexion->connection();
    $sql = "DELETE FROM tareas WHERE (id = $id_tarea)";
    $respuesta = $conn->query($sql);
    return $respuesta;
}

function modificarTareaModelo($id, $nombre, $fecha,$hora, $estado) {
    $conexion = new conn;
        $conn = $conexion->connection();
    $sql = "UPDATE tareas SET nombre = '$nombre', fecha = '$fecha', hora = '$hora', estado = '$estado' WHERE id = $id";
    $respuesta = $conn->query($sql);
    return $respuesta;
}
}