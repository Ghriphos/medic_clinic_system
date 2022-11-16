<?php

include_once ('../model/dao/prontuarioDao.php');


class Prontuario{
    private $codConsulta;
    private $nomeMedico;
    private $nomePaciente;
    private $dataHoraConsulta;
    private $tipoConsulta;
    private $encaminhamento;
    private $retornoEncaminhamento; // caso o paciente tenha trago um exame anteriormente requisitado pelo médico
    private $descricao;

    //construtor
    public function __construct($codConsulta, $nomePaciente, $nomeMedico, $dataConsulta, $tipoConsulta, $encaminhamento, $retornoEncaminhamento, $descricao) {
        $this -> setCodConsulta();
        $this -> setNomePaciente();
        $this -> setNomeMedico();
        $this -> setDataConsulta();
        $this -> setTipoConsulta();
        $this -> setEncaminhamento();
        $this -> setRetornoEncaminhamento();
        $this -> setDescricao();
    }

    public function alterarProntuario(){
        $ProntuarioDao = new ProntuarioDao;
        if($ProntuarioDao -> alterarProntuario($this)){
            return true;
        }else{
            return false;
        }
    }

    public function incluirProntuario(){
        $prontuarioDao = new ProntuarioDao();
        if ($prontuarioDao->incluirProntuario($this)) {
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Get the value of codConsulta
     */ 
    public function getCodConsulta()
    {
        return $this->codConsulta;
    }

    /**
     * Set the value of codConsulta
     *
     * @return  self
     */ 
    public function setCodConsulta($codConsulta)
    {
        $this->codConsulta = $codConsulta;

        return $this;
    }

    /**
     * Get the value of encaminhamento
     */ 
    public function getEncaminhamento()
    {
        return $this->encaminhamento;
    }

    /**
     * Set the value of encaminhamento
     *
     * @return  self
     */ 
    public function setEncaminhamento($encaminhamento)
    {
        $this->encaminhamento = $encaminhamento;

        return $this;
    }

    /**
     * Get the value of descricao
     */ 
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @return  self
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of tipoConsulta
     */ 
    public function getTipoConsulta()
    {
        return $this->tipoConsulta;
    }

    /**
     * Set the value of tipoConsulta
     *
     * @return  self
     */ 
    public function setTipoConsulta($tipoConsulta)
    {
        $this->tipoConsulta = $tipoConsulta;

        return $this;
    }

    /**
     * Get the value of dataHoraConsulta
     */ 
    public function getDataHoraConsulta()
    {
        return $this->dataHoraConsulta;
    }

    /**
     * Set the value of dataHoraConsulta
     *
     * @return  self
     */ 
    public function setDataHoraConsulta($dataHoraConsulta)
    {
        $this->dataHoraConsulta = $dataHoraConsulta;

        return $this;
    }

    /**
     * Get the value of nomeMedico
     */ 
    public function getNomeMedico()
    {
        return $this->nomeMedico;
    }

    /**
     * Set the value of nomeMedico
     *
     * @return  self
     */ 
    public function setNomeMedico($nomeMedico)
    {
        $this->nomeMedico = $nomeMedico;

        return $this;
    }

    /**
     * Get the value of nomePaciente
     */ 
    public function getNomePaciente()
    {
        return $this->nomePaciente;
    }

    /**
     * Set the value of nomePaciente
     *
     * @return  self
     */ 
    public function setNomePaciente($nomePaciente)
    {
        $this->nomePaciente = $nomePaciente;

        return $this;
    }

    /**
     * Get the value of retornoEncaminhamento
     */ 
    public function getRetornoEncaminhamento()
    {
        return $this->retornoEncaminhamento;
    }

    /**
     * Set the value of retornoEncaminhamento
     *
     * @return  self
     */ 
    public function setRetornoEncaminhamento($retornoEncaminhamento)
    {
        $this->retornoEncaminhamento = $retornoEncaminhamento;

        return $this;
    }
}
?>