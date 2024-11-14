<?php

    namespace Coworking\controladores;

    use Coworking\modelos\ModeloUsuarios;
    use Coworking\vistas\VistaLogin;

    class ControladorUsuarios{

        public static function login($email, $password){
            $usuario = ModeloUsuarios::getPassword($email);
            //Verificamos la contraseña
            if(password_verify($password, $usuario->getPassword())){
                //Si la contraseña es correcta, metemos al usuario en la sesión
                $_SESSION["usuario"] = $usuario->getEmail();
                //Y redireccionamos al usuario
                header("Location: index.php?accion=mostrarSalas");
            } else{
                //Si la contraseña es incorrecta, muestra un mensaje de error
                ControladorUsuarios::mostrarLogin("Error Login");
            }
        }

        public static function mostrarLogin($error){
            VistaLogin::render($error);
        }
    }