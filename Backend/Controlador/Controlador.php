<?php
require_once '../Modelo/ModeloDAO.php';

$funcion = $_GET['funcion'];

switch ($funcion) {
    case "agregar":

        agregarTarea();

        break;
    case "eliminar":

        eliminarTarea();

        break;
    case "obtener":

        obtenerTarea();

        break;

    case "modificar":

        modificarTarea();

        break;
}

function obtenerTarea() {
    $resultado = (new ModeloDAO())->obtenerTareaModelo();
    echo json_encode($resultado);
}

function agregarTarea() 
    {
        $id=$_POST['ìd'];
        $nombre= $_POST['nombre'];
        $fecha= $_POST['fecha'];
        $hora= $_POST['hora'];
        $estado=$_POST['estado'] ;
        $resultado = (new ModeloDAO())->agregarTareaModelo($nombre,$fecha,$hora,$estado);
    echo json_encode($resultado);
}
    


function eliminarTarea() {
    $id = $_POST['id'];
    $resultado = (new ModeloDAO())->eliminarTareaModelo($id);
    echo json_encode($resultado);
}

function modificarTarea() {
    $id=$_POST['id'];
    $nombre= $_POST['nombre'];
    $fecha= $_POST['fecha'];
    $hora= $_POST['hora'];
    $estado=$_POST['estado'] ;
    $resultado = (new ModeloDAO())->modificarTareaModelo($id,$nombre,$fecha,$hora,$estado);
    echo json_encode($resultado);
}




