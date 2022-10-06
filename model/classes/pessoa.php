<?php
class Pessoa{
    private $nome;
    private $telefone;
    private $endereco;
    private $idade;
    private $cpf;
    private $datanasct;
    private $prontuario;
    private $cttemerg;
    private $estadocivil;

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of telefone
     */ 
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of telefone
     *
     * @return  self
     */ 
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get the value of endereco
     */ 
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set the value of endereco
     *
     * @return  self
     */ 
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get the value of idade
     */ 
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     *
     * @return  self
     */ 
    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of datanasct
     */ 
    public function getDatanasct()
    {
        return $this->datanasct;
    }

    /**
     * Set the value of datanasct
     *
     * @return  self
     */ 
    public function setDatanasct($datanasct)
    {
        $this->datanasct = $datanasct;

        return $this;
    }

    /**
     * Get the value of cttemerg
     */ 
    public function getCttemerg()
    {
        return $this->cttemerg;
    }

    /**
     * Set the value of cttemerg
     *
     * @return  self
     */ 
    public function setCttemerg($cttemerg)
    {
        $this->cttemerg = $cttemerg;

        return $this;
    }

    /**
     * Get the value of estadocivil
     */ 
    public function getEstadocivil()
    {
        return $this->estadocivil;
    }

    /**
     * Set the value of estadocivil
     *
     * @return  self
     */ 
    public function setEstadocivil($estadocivil)
    {
        $this->estadocivil = $estadocivil;

        return $this;
    }

    /**
     * Get the value of prontuario
     */ 
    public function getProntuario()
    {
        return $this->prontuario;
    }
}
?>