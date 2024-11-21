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

        public static function detallesSala($nombre){
            $conexion = new ConexionBD();
            //Consulta a la BD
            $stmt = $conexion->getConexion()->prepare("SELECT usuarios.nombre as nombre_usuario, reservas.fecha_reserva, reservas.hora_inicio, reservas.hora_fin
                                    FROM salas JOIN reservas ON reservas.id_sala = salas.id JOIN usuarios ON usuarios.id = reservas.id_usuario
                                    WHERE salas.nombre = :nombre AND reservas.estado = 'confirmada' ORDER BY reservas.fecha_reserva ASC");
            $stmt->bindValue(1, $nombre);
            //Cambiamos el modo en que nos devuelve el Fetch
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Coworking\modelos\Reserva');
            //Ejecutamos la consulta
            $stmt->execute();
            //Obtenemos el resultado
            $detalles = $stmt->fetchAll();
            //Cerrar la conexion
            $conexion->cerrarSesion();
            return $detalles;
        }

        public static function buscarSala($NombreSala){
            $conexion = new ConexionBD();
            //Consulta a la BD
            $stmt = $conexion->getConexion()->prepare("SELECT * FROM salas WHERE nombre LIKE :nombre");
            $salaEncontrada = "%$NombreSala%";
            $stmt->bindValue(1, $salaEncontrada);
            //Cambiamos el modo en que nos devuelve el Fetch
            $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Coworking\modelos\Sala');
            //Ejecutamos la consulta
            $stmt->execute();
            //Obtenemos el resultado
            $sala = $stmt->fetchAll();
            //Cerrar la conexion
            $conexion->cerrarSesion();
            return $sala;
        }
    }
