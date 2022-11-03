<?php

include_once ('../classes/person.php');
include_once ('../dao/medicoDao');

    class Medico extends Pessoa{
        protected $cargo;
        protected $PHD;
        protected $codMedico;
        
        function __construct($nome, $phone, $street, $idade, $cpf, $birthdate, $cttemerg, $cargo, $PHD, $codMedico){
                parent::__construct($nome, $phone, $street, $idade, $cpf, $birthdate, $cttemerg);
                $this -> setCargo($cargo);
                $this -> setPHD($PHD);         
        }

        public function alterar(){
                $medicoDao = new MedicoDao();
                if(medicoDao->alterarProfessor($this)){
                        return true;
                }else{
                return false;
                }
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

        public function incluirMedico(){
        $medicoDao = new MedicoDao();
        if ($medicoDao->incluirMedico($this)) {
                return true;
        }
        else{
                return false;
        }
        }
    }