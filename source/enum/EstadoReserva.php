<?php

    namespace Coworking\enum;

    //Definimos ENUM
    enum EstadoReserva: string{
        case CONFIRMADA = "confirmada";
        case CANCELADA = "cancelada";
    }
