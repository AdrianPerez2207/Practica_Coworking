<?php

    namespace Coworking\modelos;

    use PDO;

    class ModeloUsuarios{

        public static function getEmail($email){
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

        public static function registrar($nombre, $apellidos, $email, $password, $telefono){
            //Obtenemos la conexion
            $conexion = new ConexionBD();
            //Preparamos la consulta
            $stmt = $conexion->getConexion()->prepare("INSERT INTO usuarios (nombre, apellidos, email, password, telefono) 
                                                        VALUES (:nombre, :apellidos, :email, :password, :telefono)");
            //Pasamos el password a Hash
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            //Asignamos los valores
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $passwordHash);
            $stmt->bindParam(':telefono', $telefono);
            //Ejecutamos la consulta
            $stmt->execute();
            $id = $conexion->getConexion()->lastInsertId();
            //Cerrar la conexion
            $conexion->cerrarSesion();
            return $id;
        }
    }