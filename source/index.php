<?php

    namespace Coworking;
    use Coworking\controladores\ControladorReservas;
    use Coworking\controladores\ControladorUsuarios;
    use Coworking\controladores\ControladorSalas;
    use Coworking\vistas\VistaLogin;
    use Coworking\vistas\VistaRegistro;

    session_start();

    /**
     * AUTOLOAD
     */
    spl_autoload_register(function ($class) {
        //echo $class."<br>";
        //echo substr($class, strpos($class,"\\")+1);
        $ruta = substr($class, strpos($class,"\\")+1);
        $ruta = str_replace("\\", "/", $ruta);
        include_once "./" . $ruta . ".php";
    });

    //ENRUTADOR - CONTROLADOR BASE

    //Tratamiento de botones, links
    if (isset($_REQUEST["accion"])) {
        //Vista de login
        if ($_REQUEST["accion"] == "login") {
            ControladorUsuarios::mostrarLogin("");
        }
        //Vista de registro
        if ($_REQUEST["accion"] == "registro") {
            ControladorUsuarios::mostrarRegistro("");
        }
        //Cerrar sesión
        if ($_REQUEST["accion"] == "cerrarSesion") {
            session_destroy();
            header("Location: index.php?accion=login");
        }
        //Vista de salas
        if ($_REQUEST["accion"] == "mostrarSalas") {
            ControladorSalas::mostrarSalas();
        }
        //Vista reservas
        if ($_REQUEST["accion"] == "reservar") {
            ControladorReservas::mostrarReservas("");
        }
        //Vista detalles de sala
        if ($_REQUEST["accion"] == "detalles") {
            ControladorSalas::detallesSala($_REQUEST["nombre"]);
        }
        //Tratamiento de formularios
    } else if ($_POST != null) {
        //Login
        if (isset($_POST["login"])) {
            ControladorUsuarios::login($_POST["email"], $_POST["password"]);
        }
        if (isset($_POST["registro"])){
            ControladorUsuarios::registro($_POST["nombre"], $_POST["apellidos"], $_POST["email"], $_POST["password"], $_POST["telefono"]);
        }

    } else {
        //Página de inicio
        if (isset($_SESSION["usuario"])) {
            //Página de la app
            ControladorSalas::mostrarSalas();

        } else{
            //Formulario de login
            ControladorUsuarios::mostrarLogin("");
        }
    }
