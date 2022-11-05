<?php
require_once "controllers/get.controller.php";
$endpointPrincipal = $routes_array[2];
$respose = new getController();

if(str_contains($endpointPrincipal, "Empleados")){
    if(count($routes_array) == 3){
        $endpointSecundario = $routes_array[3];
        if(str_contains($endpointSecundario, "Cedula")){
            echo "Estas son las cedulas del empleado";
        }
        else if(str_contains($endpointSecundario, "Nombre")){
            echo "Estos son las nombres de los empleados";
        }
    }
    else{
        echo json_encode($respose -> obtenerEmpleados());   
    }
}
