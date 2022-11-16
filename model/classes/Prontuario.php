<?php

include_once ('../model/dao/prontuarioDao.php');


class Prontuario extends Pessoa{
    private $codConsulta;
    private $dataHoraConsulta;
    private $tipoConsulta;
    private $encaminhamento;
    private $descricao;

    //construtor
    public function __construct($codConsulta, $nomePaciente, $nomeMedico, $dataConsulta, $tipoConsulta, $encaminhamento, $descricao) {
        parent::__construct($nomePaciente, $nomeMedico);
        $this -> setCodConsulta();
        $this -> setDataConsulta();
        $this -> setTipoConsulta();
        $this -> setEncaminhamento();
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
}
?>