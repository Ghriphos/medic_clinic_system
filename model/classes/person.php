<?php

include_once ('../model/dao/personDao.php');

class Person{
    private $cod_person;
    private $nome;
    private $phone;
    private $street;
    private $cpf;
    private $birthDate;
    private $cttemerg;
    private $estadocivil;

    //construtor
    public function __construct($nome, $phone, $street, $cpf, $birthDate, $cttemerg, $estadocivil) {
        $this -> setNome($nome);
        $this -> setPhone($phone);
        $this -> setStreet($street);
        $this -> setCpf($cpf);
        $this -> setBirthDate($birthDate);
        $this -> setCttemerg($cttemerg);
        $this -> setEstadocivil($estadocivil);;
    }
    /**
     * Get the value of cod_person
     */ 
    public function getCod_person()
    {
        return $this->cod_person;
    }

    /**
     * Get the value of name
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of street
     */ 
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set the value of street
     *
     * @return  self
     */ 
    public function setStreet($street)
    {
        $this->street = $street;

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
     * Set the value of street
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    /**
     * Get the value of prontuario
     */ 
    public function getProntuario()
    {
        return $this->cod_prontuario;
    }

    /**
     * Get the value of birthDate
     */ 
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set the value of birthDate
     *
     * @return  self
     */ 
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

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
    public function incluirPerson(){
        $personDao = new PersonDao();
        if ($personDao->incluirPerson($this)) {
            return true;
        }
        else{
            return false;
        }
    }
}
?>