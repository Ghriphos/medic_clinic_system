<?php

    class Medico extends Pessoa{
        protected $cargo;
        protected $PHD;
        
        function __construct($nome, $phone, $street, $idade, $cpf, $datanasct, $cttemerg, $cargo, $PHD, $codMedico){
                parent::__construct($nome, $phone, $street, $idade, $cpf, $datanasct, $cttemerg);
                $this -> setCargo($cargo);
                $this -> setPHD($PHD); 
        }

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
    }