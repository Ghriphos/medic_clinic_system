<?php

include_once ('Person.php');
include_once ('../model/dao/pacienteDao.php');

final class Paciente extends Person{
        protected $tiposanguineo;
        protected $alergia;
        protected $deficiencia;
        protected $convenio;
        protected $codPaciente;
        
        function __construct($nome, $phone, $street, $cpf, $birthdate, $cttemerg, $tiposanguineo, $alergia, $deficiencia, $convenio, $codPaciente, $estadocivil){
                parent::__construct($nome, $phone, $street, $cpf, $birthdate, $cttemerg, $estadocivil);
                $this -> setTiposanguineo($tiposanguineo);
                $this -> setAlergia($alergia);     
                $this -> setDeficiencia($deficiencia); 
                $this -> setConvenio($convenio); 
                $this -> setCodPaciente($codPaciente);     
        }

        final public function alterarPaciente(){
                $pacienteDao = new PacienteDao();
                if($pacienteDao->alterarPaciente($this)){
                        return true;
                }
                else{
                        return false;
                }
        }

        final public function incluirPaciente(){
                $pacienteDao = new PacienteDao();
                if ($pacienteDao->incluirPaciente($this)) {
                        return true;
                }
                else{
                        return false;
                }
        }

    /**
     * Get the value of tiposanguineo
     */ 
    public function getTiposanguineo()
    {
        return $this->tiposanguineo;
    }

    /**
     * Get the value of alergia
     */ 
    public function getAlergia()
    {
        return $this->alergia;
    }

    /**
     * Set the value of alergia
     *
     * @return  self
     */ 
    public function setAlergia($alergia)
    {
        $this->alergia = $alergia;

        return $this;
    }

    /**
     * Get the value of deficiencia
     */ 
    public function getDeficiencia()
    {
        return $this->deficiencia;
    }

    /**
     * Set the value of deficiencia
     *
     * @return  self
     */ 
    public function setDeficiencia($deficiencia)
    {
        $this->deficiencia = $deficiencia;

        return $this;
    }

    /**
     * Get the value of convenio
     */ 
    public function getConvenio()
    {
        return $this->convenio;
    }

    /**
     * Set the value of convenio
     *
     * @return  self
     */ 
    public function setConvenio($convenio)
    {
        $this->convenio = $convenio;

        return $this;
    }

    /**
     * Get the value of codPaciente
     */ 
    public function getCodPaciente()
    {
        return $this->codPaciente;
    }

    /**
     * Set the value of tiposanguineo
     *
     * @return  self
     */ 
    public function setTiposanguineo($tiposanguineo)
    {
        $this->tiposanguineo = $tiposanguineo;

        return $this;
    }

    /**
     * Set the value of codPaciente
     *
     * @return  self
     */ 
    public function setCodPaciente($codPaciente)
    {
        $this->codPaciente = $codPaciente;

        return $this;
    }
}
?>