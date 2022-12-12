<?php

include_once ('../model/dao/prontuarioDao.php');


class Prontuario{
    private $codProntuario;
    private $vacina;
    private $examepedido;
    private $examevisto;
    private $cirurgia;
    private $receita;

    //construtor
    public function __construct($codProntuario, $vacina, $examepedido, $examevisto, $cirurgia, $receita) {
        $this -> setCodProntuario($codProntuario);
        $this -> setVacina($vacina);
        $this -> setExamepedido($examepedido);
        $this -> setExamevisto($examevisto);
        $this -> setCirurgia($cirurgia);
        $this -> setReceita($receita);
    }

    public function alterarProntuario(){
        $ProntuarioDao = new ProntuarioDao;
        if($ProntuarioDao -> alterarProntuario($this)){
            return true;
        }else{
            return false;
        }
    }

    final public function consultar(){
        $ProntuarioDao = new ProntuarioDao;
        $testaConsulta = $ProntuarioDao->ConsultarProntuario($this);
        $qtdLinhas = mysqli_num_rows($testaConsulta);
        if ($qtdLinhas == 0) {
            $_SESSION['msg'] = "\n" . "Não existem registros na tabela Prontuario ";
        }else{
            $linha = mysqli_fetch_assoc($testaConsulta);
            $this->setCodProntuario($linha['codProntuario']);
            $this->setVacina($linha['vacina']);
            $this->setExamepedido($linha['examepedido']);
            $this->setExamevisto($linha['examevisto']);
            $this->setCirurgia($linha['cirurgia']);
            $this->setReceita($linha['receita']);
        }
    }
    /**
     * Get the value of vacina
     */ 
    public function getVacina()
    {
        return $this->vacina;
    }

    /**
     * Set the value of vacina
     *
     * @return  self
     */ 
    public function setVacina($vacina)
    {
        $this->vacina = $vacina;

        return $this;
    }

    /**
     * Get the value of examepedido
     */ 
    public function getExamepedido()
    {
        return $this->examepedido;
    }

    /**
     * Set the value of examepedido
     *
     * @return  self
     */ 
    public function setExamepedido($examepedido)
    {
        $this->examepedido = $examepedido;

        return $this;
    }

    /**
     * Get the value of examevisto
     */ 
    public function getExamevisto()
    {
        return $this->examevisto;
    }

    /**
     * Set the value of examevisto
     *
     * @return  self
     */ 
    public function setExamevisto($examevisto)
    {
        $this->examevisto = $examevisto;

        return $this;
    }

    /**
     * Get the value of cirurgia
     */ 
    public function getCirurgia()
    {
        return $this->cirurgia;
    }

    /**
     * Set the value of cirurgia
     *
     * @return  self
     */ 
    public function setCirurgia($cirurgia)
    {
        $this->cirurgia = $cirurgia;

        return $this;
    }

    /**
     * Get the value of receita
     */ 
    public function getReceita()
    {
        return $this->receita;
    }

    /**
     * Set the value of receita
     *
     * @return  self
     */ 
    public function setReceita($receita)
    {
        $this->receita = $receita;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodProntuario()
    {
        return $this->codProntuario;
    }

    /**
     * @param mixed $codProntuario
     */
    public function setCodProntuario($codProntuario)
    {
        $this->codProntuario = $codProntuario;
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
}
?>