<?php

include_once ('Person.php');
include_once ('../model/dao/recepcionistaDao.php');

final class Recepcionista extends Person{
    protected $codRecepcionista;
    protected $horarioInicio;
    protected $horarioFim;



        
        function __construct($nome, $phone, $street, $cpf, $birthDate, $cttemerg, $estadocivil, $codRecepcionista, $horarioInicio, $horarioFim){
                parent::__construct($nome, $phone, $street, $cpf, $birthDate, $cttemerg, $estadocivil);
                $this -> setCodRecepcionista($codRecepcionista);
                $this -> setHorarioInicio($horarioInicio);
                $this -> setHorarioFim($horarioFim);
        }

        final public function alterarRecepcionista(){
                $recepcionistaDao = new RecepcionistaDao();
                if($recepcionistaDao->alterarRecepcionista($this)){
                        return true;
                }
                else{
                        return false;
                }
        }

        final public function incluirRecepcionista(){
                $recepcionistaDao = new RecepcionistaDao();
                if ($recepcionistaDao->incluirRecepcionista($this)) {
                        return true;
                }
                else{
                        return false;
                }
        }

    /**
     * Get the value of codRecepcionista
     */ 
    public function getCodRecepcionista()
    {
        return $this->codRecepcionista;
    }

    /**
     * Set the value of codRecepcionista
     *
     * @return  self
     */ 
    public function setCodRecepcionista($codRecepcionista)
    {
        $this->codRecepcionista = $codRecepcionista;

        return $this;
    }

        /**
         * Get the value of horarioInicio
         */ 
        public function getHorarioInicio()
        {
                return $this->horarioInicio;
        }

        /**
         * Set the value of horarioInicio
         *
         * @return  self
         */ 
        public function setHorarioInicio($horarioInicio)
        {
                $this->horarioInicio = $horarioInicio;

                return $this;
        }

        /**
         * Get the value of horarioFim
         */ 
        public function getHorarioFim()
        {
                return $this->horarioFim;
        }

        /**
         * Set the value of horarioFim
         *
         * @return  self
         */ 
        public function setHorarioFim($horarioFim)
        {
                $this->horarioFim = $horarioFim;

                return $this;
        }
}
?>