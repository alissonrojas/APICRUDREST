<?php
   require_once "conexion.php";

class getmodel
{
    static public function obtenerEmpleados()
    {
        $sql = "SELECT * FROM empleados";
        $stmt = Conexion::conectar()->prepare($sql);
        if($stmt->execute())
        {
            $results = $stmt-> fetchAll(PDO::FETCH_OBJ);
            return $results;
        }
        else{
            return "La sentencia no se pudo ejecutar";
        }
    }

}
