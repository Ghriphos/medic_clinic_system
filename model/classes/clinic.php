<?php

include_once ('../dao/clinicdao.php');
//get = pessoa pode ver     set = pessoa pode alterar
//baixando php get e setters e php debbug
class clinic{
    private $cod_clinic;
    private $name;
    private $cnpj;
    private $email;
    private $street;
    private $street_number;
    private $street_complement;
    private $district;
    private $phone;
    private $open_hour;
    private $close_hour;

    //construtor
    public function _construct($name, $cnpj, $email, $street, $street_number, $street_complement, $district, $phone, $open_hour, $close_hour) {
        $this -> setName($name);
        $this -> setCnpj($cnpj);
        $this -> setEmail($email);
        $this -> setStreet($street);
        $this -> setStreet_number($street_number);
        $this -> setStreet_complement($street_complement);
        $this -> setDistrict($district);
        $this -> setPhone($phone);
        $this -> setOpen_hour($open_hour);
        $this -> setClose_hour($close_hour);
        
    }

    public function incluirClinic(){
        $ClinicDao = new ClinicDao();
        if($ClinicDao -> incluirClinic($this)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the value of cod_clinic
     */ 
    public function getCod_clinic()
    {
        return $this->cod_clinic;
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
     * Get the value of cnpj
     */ 
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     *
     * @return  self
     */ 
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

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
     * Get the value of street_number
     */ 
    public function getStreet_number()
    {
        return $this->street_number;
    }

    /**
     * Set the value of street_number
     *
     * @return  self
     */ 
    public function setStreet_number($street_number)
    {
        $this->street_number = $street_number;

        return $this;
    }

    /**
     * Get the value of street_complement
     */ 
    public function getStreet_complement()
    {
        return $this->street_complement;
    }

    /**
     * Set the value of street_complement
     *
     * @return  self
     */ 
    public function setStreet_complement($street_complement)
    {
        $this->street_complement = $street_complement;

        return $this;
    }

    /**
     * Get the value of district
     */ 
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set the value of district
     *
     * @return  self
     */ 
    public function setDistrict($district)
    {
        $this->district = $district;

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
     * Get the value of open_hour
     */ 
    public function getOpen_hour()
    {
        return $this->open_hour;
    }

    /**
     * Set the value of open_hour
     *
     * @return  self
     */ 
    public function setOpen_hour($open_hour)
    {
        $this->open_hour = $open_hour;

        return $this;
    }

    /**
     * Get the value of close_hour
     */ 
    public function getClose_hour()
    {
        return $this->close_hour;
    }

    /**
     * Set the value of close_hour
     *
     * @return  self
     */ 
    public function setClose_hour($close_hour)
    {
        $this->close_hour = $close_hour;

        return $this;
    }
}
?>