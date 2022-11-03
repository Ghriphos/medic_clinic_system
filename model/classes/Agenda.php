<?php

include_once ('../model/dao/ClinicDao.php');
//get = pessoa pode ver     set = pessoa pode alterar
//baixando php get e setters e php debbug
class Agenda{
    private $data_e_hora;
    private $status;
    private $descricao;
    private $codConsulta;

    //construtor
    public function __construct($data_e_hora, $status, $descricao, $codConsulta) {
        $this -> setData_e_hora($data_e_hora); //vc ta pegando o dado pelo get, para alterar pelo set
        $this -> setStatus($status);
        $this -> setDescricao($descricao);
        $this -> setCodConsulta($codConsulta);
    }


    /**
     * Get the value of data_e_hora
     */ 
    public function getData_e_hora()
    {
        return $this->data_e_hora;
    }

    /**
     * Set the value of data_e_hora
     *
     * @return  self
     */ 
    public function setData_e_hora($data_e_hora)
    {
        $this->data_e_hora = $data_e_hora;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

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
}

    ?>