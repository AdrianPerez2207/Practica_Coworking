<?php

    namespace Coworking;
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

        //Tratamiento de forms
    } else if ($_POST != null) {

    } else {
        //Página de inicio
        if (isset($_SESSION["usuario"])) {
            //Página de la app


        } else{
            //Formulario de login

        }
    }
