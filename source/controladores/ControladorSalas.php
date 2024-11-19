<?php

    namespace Coworking\controladores;

    use Coworking\modelos\ModeloSalas;
    use Coworking\vistas\VistaDetalles;
    use Coworking\vistas\VistaSalas;

    class ControladorSalas{

        public static function mostrarSalas()
        {
            //Llamar al modelo para pedir las salas
            $salas = ModeloSalas::mostrarSalas();

            //Llamar al vista para mostrar las salas
            VistaSalas::render($salas);

        }

        public static function detallesSala($nombre){

            //Llamar al modelo para pedir los detalles de la sala
            $detalles = ModeloSalas::detallesSala($nombre);

            //Llamar al vista para mostrar los detalles de la sala
            VistaDetalles::render($detalles);
        }
    }
