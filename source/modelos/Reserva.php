<?php

    namespace Coworking\modelos;

    //Definimos ENUM
    enum EstadoReserva: string{
        case CONFIRMADA = "confirmada";
        case CANCELADA = "cancelada";
    }

    class Reserva{
        private $id;
        private $id_usuario;
        private $id_sala;
        private $fecha_reserva;
        private $hora_inicio;
        private $hora_fin;
        private EstadoReserva $estado;

        /**
         * @param $id
         * @param $id_usuario
         * @param $id_sala
         * @param $fecha_reserva
         * @param $hora_inicio
         * @param $hora_fin
         */
        public function __construct($id="", $id_usuario="", $id_sala="", $fecha_reserva="", $hora_inicio="", $hora_fin="")
        {
            $this->id = $id;
            $this->id_usuario = $id_usuario;
            $this->id_sala = $id_sala;
            $this->fecha_reserva = $fecha_reserva;
            $this->hora_inicio = $hora_inicio;
            $this->hora_fin = $hora_fin;
            $this->estado = EstadoReserva::CONFIRMADA;
        }

        public function getId(): mixed
        {
            return $this->id;
        }

        public function setId(mixed $id): void
        {
            $this->id = $id;
        }

        public function getIdUsuario(): mixed
        {
            return $this->id_usuario;
        }

        public function setIdUsuario(mixed $id_usuario): void
        {
            $this->id_usuario = $id_usuario;
        }

        public function getIdSala(): mixed
        {
            return $this->id_sala;
        }

        public function setIdSala(mixed $id_sala): void
        {
            $this->id_sala = $id_sala;
        }

        public function getFechaReserva(): mixed
        {
            return $this->fecha_reserva;
        }

        public function setFechaReserva(mixed $fecha_reserva): void
        {
            $this->fecha_reserva = $fecha_reserva;
        }

        public function getHoraInicio(): mixed
        {
            return $this->hora_inicio;
        }

        public function setHoraInicio(mixed $hora_inicio): void
        {
            $this->hora_inicio = $hora_inicio;
        }

        public function getHoraFin(): mixed
        {
            return $this->hora_fin;
        }

        public function setHoraFin(mixed $hora_fin): void
        {
            $this->hora_fin = $hora_fin;
        }

        public function getEstado(): EstadoReserva
        {
            return $this->estado;
        }

        public function setEstado(EstadoReserva $estado): void
        {
            $this->estado = $estado;
        }


    }
