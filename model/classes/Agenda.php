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

    public function alterarAgenda(){
        $AgendaDao = new AgendaDao;
        if($AgendaDao -> alterarAgenda($this)){
            return true;
        }else{
            return false;
        }
    }

    final public function consultar(){
        $AgendaDao = new AgendaDao;
        $testaConsulta = $AgendaDao->ConsultarAgenda($this);
        $qtdLinhas = mysqli_num_rows($testaConsulta);
        if ($qtdLinhas == 0) {
            $_SESSION['msg'] = "\n" . "Não existem registros na tabela Agenda ";
        }else{
            $linha = mysqli_fetch_assoc($testaConsulta);
            $this->setDataehora($linha['dataehora']);
            $this->setStats($linha['stats']);
            $this->setDescricao($linha['descricao']);
            $this->setCodConsulta($linha['codConsulta']);
        }
    }

    final public function consultarLista(){
        $agendaDao = new AgendaDao();
        $testaConsulta = $agendaDao->consultarListaAgenda();
        $qtdLinhas = mysqli_num_rows($testaConsulta);
        if ($qtdLinhas == 0){
            $_SESSION['msg'] = "\n" . "Não existem registros na tabela agenda";
        }
        else{
            $listaAgenda = array();
            for ($i = 0; $i < $qtdLinhas; $i++){
                $linha = mysqli_fetch_assoc($testaConsulta);
                $tempAgenda = null;
                $tempAgenda = new Agenda($linha['dataehora'], $linha['stats'], 
                $linha['descricao'], $linha['codConsulta']);
                $listaAgenda[$i]=$tempAgenda;
            }
            return $listaAgenda;
        }
        $emptyArray = array();
        return $emptyArray;
    }

    public function toArray(){
        return(
            array(
                "dataehora" => $this->getDataehora(),
                "stats" => $this->getStats(),
                "descricao" => $this->getDescricao(),
                "codConsulta" => $this->getCodConsulta(),
            )
        );
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