<?php

    class Medico{
        private $cargo;
        private $agenda;
        private $PHD;
        private $codMedico;

        /**
         * Get the value of cargo
         */ 
        public function getCargo()
        {
                return $this->cargo;
        }

        /**
         * Set the value of cargo
         *
         * @return  self
         */ 
        public function setCargo($cargo)
        {
                $this->cargo = $cargo;

                return $this;
        }

        /**
         * Get the value of agenda
         */ 
        public function getAgenda()
        {
                return $this->agenda;
        }

        /**
         * Set the value of agenda
         *
         * @return  self
         */ 
        public function setAgenda($agenda)
        {
                $this->agenda = $agenda;

                return $this;
        }

        /**
         * Get the value of PHD
         */ 
        public function getPHD()
        {
                return $this->PHD;
        }

        /**
         * Set the value of PHD
         *
         * @return  self
         */ 
        public function setPHD($PHD)
        {
                $this->PHD = $PHD;

                return $this;
        }

        /**
         * Get the value of codMedico
         */ 
        public function getCodMedico()
        {
                return $this->codMedico;
        }

        /**
         * Set the value of codMedico
         *
         * @return  self
         */ 
        public function setCodMedico($codMedico)
        {
                $this->codMedico = $codMedico;

                return $this;
        }
    }