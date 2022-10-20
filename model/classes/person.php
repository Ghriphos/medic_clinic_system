<?php
class person{
    private $cod_person;
    private $name;
    private $phone;
    private $street;
    private $idade;
    private $cpf;
    private $datanasct;
    private $prontuario;
    private $cttemerg;
    private $estadocivil;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

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
     * Get the value of prontuario
     */ 
    public function getProntuario()
    {
        return $this->prontuario;
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
}
?>