<?php

include_once ('../model/dao/agendaDao.php');
//get = pessoa pode ver     set = pessoa pode alterar
//baixando php get e setters e php debbug
class Agenda{
    private $dataehora;
    private $stats;
    private $descricao;
    private $codConsulta;

    //construtor
    public function __construct($dataehora, $stats, $descricao, $codConsulta) {
        $this -> setDataehora($dataehora); //vc ta pegando o dado pelo get, para alterar pelo set
        $this -> setStats($stats);
        $this -> setDescricao($descricao);
        $this -> setCodConsulta($codConsulta);
    }

    public function incluirAgenda(){
        $AgendaDao = new AgendaDao;
        if($AgendaDao -> incluirAgenda($this)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the value of dataehora
     */ 
    public function getDataehora()
    {
        return $this->dataehora;
    }

    /**
     * Set the value of dataehora
     *
     * @return  self
     */ 
    public function setDataehora($dataehora)
    {
        $this->dataehora = $dataehora;

        return $this;
    }

    /**
     * Get the value of stats
     */ 
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Set the value of stats
     *
     * @return  self
     */ 
    public function setStats($stats)
    {
        $this->stats = $stats;

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