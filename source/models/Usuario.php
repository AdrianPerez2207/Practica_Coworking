<?php

    namespace Coworking\models;

    class Usuario{

        private $id;
        private $nombre;
        private $apellidos;
        private $email;
        private $password;
        private $fechaRegistro;

        /**
         * @param $id
         * @param $nombre
         * @param $apellidos
         * @param $email
         * @param $password
         * @param $fechaRegistro
         */
        public function __construct($id="", $nombre="", $apellidos="", $email="", $password="", $fechaRegistro="")
        {
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->email = $email;
            $this->password = $password;
            $this->fechaRegistro = $fechaRegistro;
        }


        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getNombre()
        {
            return $this->nombre;
        }

        /**
         * @param mixed $nombre
         */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        /**
         * @return mixed
         */
        public function getApellidos()
        {
            return $this->apellidos;
        }

        /**
         * @param mixed $apellidos
         */
        public function setApellidos($apellidos)
        {
            $this->apellidos = $apellidos;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         */
        public function setEmail($email)
        {
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getPassword()
        {
            return $this->password;
        }

        /**
         * @param mixed $password
         */
        public function setPassword($password)
        {
            $this->password = $password;
        }

        /**
         * @return mixed
         */
        public function getFechaRegistro()
        {
            return $this->fechaRegistro;
        }

        /**
         * @param mixed $fechaRegistro
         */
        public function setFechaRegistro($fechaRegistro)
        {
            $this->fechaRegistro = $fechaRegistro;
        }

    }