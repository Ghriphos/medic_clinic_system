<?php

include_once ('Person.php');
include_once ('../model/dao/medicoDao.php');

final class Medico extends Person{
        protected $cargo;
        protected $PHD;
        protected $codMedico;
        
        function __construct($nome, $phone, $street, $cpf, $birthdate, $cttemerg, $cargo, $PHD, $codMedico, $estadocivil){
                parent::__construct($nome, $phone, $street, $cpf, $birthdate, $cttemerg, $estadocivil);
                $this -> setCargo($cargo);
                $this -> setPHD($PHD);     
                $this -> setCodMedico($codMedico);     
        }

        final public function alterar(){
                $medicoDao = new MedicoDao();
                if($medicoDao->alterarMedico($this)){
                        return true;
                }
                else{
                        return false;
                }
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
