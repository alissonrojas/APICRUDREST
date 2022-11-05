<?php
require_once "models/get.model.php";
    class getController
    {
        static public function obtenerEmpleados()
        {
            return getModel::obtenerEmpleados();        
        }
        
    } 