<?php

    namespace Coworking\modelos;

    use PDO;


    class ModeloSalas{
        public static function mostrarSalas()
        {
            $conexion = new ConexionBD();
            //Consulta a la BD
            $stmt = $conexion->getConexion()->query("SELECT * FROM salas");
            //Cambiamos el modo en que nos devuelve el Fetch
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Coworking\modelos\Sala');
            //Cerrar la conexion
            $conexion->cerrarSesion();
            return $stmt->fetchAll();
        }
    }
