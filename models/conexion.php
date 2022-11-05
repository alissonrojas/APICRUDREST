<?php
    class Conexion
    { 
        static public funtion InfoDatabase(){ 
            $infoDB = array(
                "host" => "localhost",
                "database" => "db_as1",
                "user" => "alison",
                "password" => "12345"
            );
            return $infoDB;
        }

        static public function conectar()
        {
            try
            {
                $link = new PDD(
                    "mysql:host=".Conexion::infoDatabase()["host"].";dbname=".Conexion::infoDatabase()["database"],
                    Conexion::infoDatabase()["user"],
                    Conexion::infoDatabase()["password"]
                );
                $link ->exec("set names utf8");
            }
            catch(PDOException $e)
            {
                die("Error: ".$e->getMessage());
            }
            return $link;
         }
    }