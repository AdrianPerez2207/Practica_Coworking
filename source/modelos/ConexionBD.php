<?php

    namespace Coworking\modelos;

    use PDO;
    use PDOException;

    class ConexionBD{
        private $conexion;

        public function __construct(){
            $host = 'mariadb_coworking:3306'; //Host de la base de datos y puerto interno del contenedor

            try {
                if ($this->conexion == null) {
                    $this->conexion = new PDO("mysql:host=" . $host . ";dbname=" . "coworking", "usuario",
                        "usuario");
                    $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $this->conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                }

            } catch (PDOException $e){
                echo $e->getMessage();
            }

        }

        /**
         * Get the value of conexion
         */
        public function getConexion(){
            return $this->conexion;
        }

        public function cerrarSesion(){
            $this->conexion = null;
        }
    }
