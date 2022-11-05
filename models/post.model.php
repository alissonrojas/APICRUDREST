<?php
require_once "conexion.php";

class postModel
{   
    static public function agregarEmpleados($id, $nombre, $apellido, $correo, $edad)
    {
        $sql = "INSERT INTO `empleados` (`id_empleado`, `nombre_empleado`, `apellido_empleado`) 
                VALUES ('".$id."', '".$nombre."', '".$apellido."');";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt->execute())
        {
            return "Agrego todo corrrectamente";
        }
        else{
            return "La sentencia no se pudo ejecutar";
        }
    }
}  