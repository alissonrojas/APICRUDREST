<?php
require_once "models/post.model.php";
    class postController
    {
    
        static public function agregarEmpleados($id, $nombre, $apellido, $correo, $edad)
        {   
            return postModel::agregarEmpleados($id, $nombre, $apellido, $correo, $edad);
        }
        static public function agregarEmpleados($id, $nombre, $apellido, $correo, $edad)
        {   
            return postModel::agregarEmpleados($id, $nombre, $apellido, $correo, $edad);
        }
    }