<?php

    namespace Coworking\controladores;

    use Coworking\modelos\ModeloSalas;
    use Coworking\vistas\VistaSalas;

    class ControladorSalas{

        public static function mostrarSalas()
        {
            //Llamar al modelo para pedir las salas
            $salas = ModeloSalas::mostrarSalas();

            //Llamar al vista para mostrar las salas
            VistaSalas::render($salas);

        }
    }
