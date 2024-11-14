<?php

    namespace Coworking\modelos;

    use PDO;

    class ModeloUsuarios{

        public static function getPassword($email){
            $conexion = new ConexionBD();
            //Consulta a la BD
            $stmt = $conexion->getConexion()->prepare("SELECT * FROM usuarios WHERE email = ?");
            $stmt->bindValue(1, $email);
            //Cambiamos el modo en que nos devuelve el Fetch
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Coworking\modelos\Usuario');
            //Ejecutamos la consulta
            $stmt->execute();
            //Obtenemos el resultado
            $usuario = $stmt->fetch();
            //Cerrar la conexion
            $conexion->cerrarSesion();
            return $usuario;
        }
    }