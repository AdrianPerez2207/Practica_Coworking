<?php

namespace Coworking\controladores;

use Coworking\vistas\VistaReservas;

class ControladorReservas{

    public static function mostrarReservas($error){
        VistaReservas::render($error);
    }

}