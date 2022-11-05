<?php
require_once "controllers/post.controller.php";
$endpointPrincipal = $routes_array[2];
$respose = new postController();

if(str_contains($endpointPrincipal, "empleados")){
    $body = json_decode(file_get_contents("php://input"),true);
    $id = $body["id"];
    $nombre = $body["nombre"];
    $apellido = $body["apellido"];
    echo json_encode($respose -> agregarEmpleados($id, $nombre, $apellido, $correo, $edad));   
    
}
