<?php

include_once ('../model/dao/prontuarioDao.php');


class Prontuario{
    private $codConsulta;
    private $nomePaciente;
    private $nomeMedico;
    private $data;
    private $tipo;
    private $encaminhamento;
    private $descricao;

    //construtor
    public function __construct($vacina, $examepedido, $examevisto, $cirurgia, $receita) {
        $this -> setVacina($vacina);
        $this -> setExamepedido($examepedido);
        $this -> setExamevisto($examevisto);
        $this -> setCirurgia($cirurgia);
        $this -> setReceita($receita);;
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
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of tipo
     */ 
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     *
     * @return  self
     */ 
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

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
}
?>